<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mentor;
use App\Models\Appointment;
use App\Models\Post;
use App\Models\SurveyResponse;
use Alert;

class HomeController extends Controller
{
    public function redirect()
    {

        $user = User::where('usertype','0')->get()->count();

        $appointments = Appointment::all()->count();

        $mentor = Mentor::all()->count();

        if(Auth::id())
        {

            $post = Post::where('post_status','=','active')->get();

            if(Auth::user()->usertype=='0'){

                $mentor=mentor::all();
                
                return view('user.home', compact('mentor','post'));
            }

            else{
                return view('admin.home', compact('user','appointments','mentor'));
            }
        }

        else{

            return redirect()->back();
        }

    }

    public function index(){

        $post = Post::where('post_status','=','active')->get();

        if(Auth::id()){
            return redirect('home');
        }

        else{

        $mentor = mentor::all();
        
        return view('user.home', compact('mentor','post'));
        }
    }


    public function appointment(Request $request){

        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->mentor=$request->mentor;

        $data->status='In progress';


        if(Auth::id()){

            $data->user_id=Auth::user()->id;

        }

        $data->save();


        return redirect()->back()->with('message', 'Appointment request successful. We will contact you soon');

    }


    public function myappointment(){

        if(Auth::id()){

            if(Auth::user()->usertype==0){

                $user_id=Auth::user()->id;

            $appoint=appointment::where('user_id', $user_id)->get();

            return view('user.my_appointment', compact('appoint'));

            }

            else{
                return redirect()->back();
            }

        }

        else{

            return redirect('login');

        }
     
    }

    public function cancel_appoint($id){

        $data = Appointment::find($id);

        if ($data) {

            $data->delete();

            return redirect()->back()->with('message', 'Appointment canceled successfully.');

        } 
        else {

             return redirect()->back()->with('error', 'Appointment not found.');
        
        }
    }

    public function create_post(){
        return view('user.create_post');
    }

    public function user_post(Request $request){

        $user = Auth()->user();

        $user_id = $user->id;
        
        $username = $user->name;

        $usertype = $user->usertype;

        $post = new Post;

        $post->title = $request->title;

        $post->body = $request->body;

        $post->user_id = $user_id;

        $post->name = $username;

        $post->usertype = $usertype;

        $post->post_status = 'pending';

        $image = $request->image;

        if($image){
            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image = $imagename;
        }
        $post->save();

        Alert::success('Congrats','You have added data successfully');

        return redirect()->back();

    }

    public function post_details($id){

        $post = Post::find($id);

        return view ('user.post_details',compact('post'));

    }

    public function my_post(){

        $user = Auth::user();

        $userid = $user->id;

        $data = Post::where('user_id','=',$userid)->get();
        
        return view('user.my_post',compact('data'));

    }

    public function my_post_del($id){
        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('message','Post deleted successfully');
    }

    public function post_update_page($id){

        $data = Post::find($id);

        return view('user.post_page',compact('data'));

    }

    public function update_post_data(Request $request,$id){

        $data = Post::find($id);

        $data->title = $request->title;

        $data->body = $request->body;

        $image = $request->image;

        if($image){

            $imagename = time(). '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $data->image = $imagename;

        }

        $data->save();

        return redirect()->back()->with('message','Post updated successfully');


    }


    public function about() {

        return view('user.about');

    }

    
    public function contact() {

        return view('user.contact');

    }

    public function survey() {

        return view('user.survey');

    }
    public function submitSurvey(Request $request)
    {

        $validatedData = $request->validate([
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'q5' => 'required|string',
            'q6' => 'required|string',
            'q7' => 'required|string',
            'q8' => 'required|string',
            'q9' => 'required|string',
            'q10' => 'required|string',
            'q11' => 'required|string',
            'q12' => 'required|string',
            'q13' => 'required|string',
            'q14' => 'required|string',
            'q15' => 'required|string',
            'q16' => 'required|string',
        ]);

        SurveyResponse::create($validatedData);

        return redirect()->back()->with('message', 'Survey submitted successfully!');
}
}