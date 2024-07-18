<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mentor;

use App\Models\Post;

use App\Models\Appointment;

use Notification;

use App\Notifications\SendEmailNotification;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){

                return view('admin.add_mentor');

            }

            else{
                return redirect()->back();
            }

        }

        else{
            return redirect('login');
        }

    }

    public function upload(Request $request){

        $mentor = new mentor;

        $image = $request->file;

     $imagename = time(). '.' . $image->getClientOriginalExtension();

     $request->file->move('mentorimage', $imagename);

     $mentor->image = $imagename;

     $mentor->name = $request->name;

     $mentor->email = $request->email;

     $mentor->phone = $request->number;

     $mentor->specialization = $request->specialization;

     $mentor->room = $request->room;

     $mentor->save();

     return redirect()->back()->with('message','Mentor Added Successfully');

    }

    public function showappointment(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){

                $data = appointment::all();

        return view('admin.showappointment',compact('data'));

            }

            else{
                return redirect()->back();
            }

        }

        else{
            return redirect('login');
        }

    }

    public function approved($id){

        $data = appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back();

    }

    public function canceled($id){

        $data = appointment::find($id);

        $data->status = 'Canceled';

        $data->save();

        return redirect()->back();

    }

    public function showmentor(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){

        $data = mentor::all();

        return view('admin.showmentor',compact('data'));

            }

            else{
                return redirect()->back();
            }

        }

        else{
            return redirect('login');
        }
        

    }

    public function deletementor($id){

        $data = mentor::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function updatementor($id){

        $data = mentor::find($id);

        return view('admin.update_mentor',compact('data'));

    }

    public function editmentor(Request $request ,$id){

        $mentor = mentor::find($id);

        $mentor->name = $request->name;
        
        $mentor->email = $request->email;

        $mentor->phone = $request->phone;

        $mentor->specialization = $request->specialization;

        $mentor->room = $request->room;

        $image = $request->file;

        if($image){

        $imagename = time(). '.' . $image->getClientOriginalExtension();

        $request->file->move('mentorimage',$imagename);

        $mentor->image = $imagename;
        }

        $mentor->save();

        return redirect()->back()->with('message','Mentor details updated successfully');

    }


    public function emailview($id){

        $data = appointment::find($id);

        return view('admin.email_view',compact('data'));

    }

    public function sendemail(Request $request,$id){

        $data = appointment::find($id);

        $details = [

            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart

        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email sent successfully');

    }

    public function post_page(){

        return view('admin.post_page');

    }


    public function add_post(Request $request){

        $user = Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;



        $post = new Post;

        $post->title = $request->title;

        $post->body = $request->body;

        $post->post_status = 'active';

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;

        $image = $request->image;

        if($image){

            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image = $imagename;

        }

        $post->save();
        return redirect()->back()->with('message','Post added successfully');
    }

    public function show_post(){

        $post = Post::all();

        return view('admin.show_post',compact('post'));

    }

    public function delete_post($id){

        $post = post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post deleted successfully');

    }

    public function edit_page($id){
        $post = Post::find($id);

        return view('admin.edit_page',compact('post'));

    }

    public function update_post(Request $request,$id){
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

    public function accept_post($id){

        $data = Post::find($id);

        $data->post_status = 'active';

        $data->save();

        return redirect()->back()->with('message','Post accepted');

    }

    public function reject_post($id){

        $data = Post::find($id);

        $data->post_status = 'rejected';

        $data->save();

        return redirect()->back()->with('message','Post rejected');

    }
    
}