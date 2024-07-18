<!DOCTYPE html>
<html lang="en">
  <head>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  @include('admin.css')

  <style type="text/css">
    .title_deg{
        font-size:30px;
        font-weight:bold;
        text-align:center;
        padding-left:100px;
        padding-bottom:30px;
        color:white;
    }
    .table_deg{
        width:100%;
        text-align:center;
        margin-left:-10px;
    }
  </style>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
       
        <div class="page-content" style="padding-top:100px;">

            @if(session()->has('message'))

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    x
                </button>

                {{session()->get('message')}}
            </div>

            @endif

            <h1 class="title_deg">All Posts</h1>

            <table style="padding-top:20px;" class="table_deg">

                <tr style="background-color:black;" align="center">
                    <th style="padding:10px;">Post Title</th>
                    <th style="padding:10px;">Body</th>
                    <th style="padding:10px;">Post By</th>
                    <th style="padding:10px;">Post Status</th>
                    <th style="padding:10px;">Usertype</th>
                    <th style="padding:10px;">Image</th>
                    <th style="padding:10px;">Delete</th>
                    <th style="padding:10px;">Update</th>
                    <th style="padding:10px;">Accept Post</th>
                    <th style="padding:10px;">Reject Post</th>
                </tr>

                @foreach($post as $post)

                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;">{{$post->title}}</td>
                    <td style="padding:10px;">{{$post->body}}</td>
                    <td style="padding:10px;">{{$post->name}}</td>
                    <td style="padding:10px;">{{$post->post_status}}</td>
                    <td style="padding:10px;">{{$post->usertype}}</td>
                    <td><img height="100" width="100" src="postimage/{{$post->image}}"></td>

                    <td>
                        <a class="btn btn-danger" href="{{url('delete_post',$post->id)}}" onclick="confirmation(event)">Delete</a>
                    </td>
                    <td>
                      <a class="btn btn-primary" href="{{url('edit_page',$post->id)}}">Update</a>
                  </td>
                  <td>
                      <a class="btn btn-success" href="{{url('accept_post',$post->id)}}">Accept</a>
                  </td>
                  <td>
                      <a onclick="confirming(event)" class="btn btn-danger" href="{{url('reject_post',$post->id)}}">Reject</a>
                  </td>
                </tr>

                @endforeach

            </table>

        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        
        <!-- End custom js for this page -->


        <script type="text/javascript">

            function confirmation(ev){

                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({
                    title : " Are you sure you want to delete this post? " ,
                    text : "You will not be able to reverse this action!" ,
                    icon : "warning",
                    buttons : true ,
                    dangerMode : true ,
                })

                .then((willCancel)=>{

                    if(willCancel){
                        window.location.href=urlToRedirect;
                    }

                });

            }

            function confirming(ev){

              ev.preventDefault();

              var urlToRedirect = ev.currentTarget.getAttribute('href');

              console.log(urlToRedirect);

              swal({
                  title : " Are you sure you want to reject this post? " ,
                  icon : "warning",
                  buttons : true ,
                  dangerMode : true ,
              })

              .then((willCancel)=>{

                  if(willCancel){
                      window.location.href=urlToRedirect;
                  }

              });

            }
          

        </script>

  </body>
</html>