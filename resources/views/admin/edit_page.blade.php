<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  @include('admin.css')

  <style type="text/css">
    .post_title{
        font-size:30px;
        font-weight:bold;
        text-align:center;
        padding:30px;
        color:white;
        margin-left:220px;
    }

    .div_center{
    text-align:center;
    padding:30px;
    }
    label{
        display:inline-block;
        width:200px;
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

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                     {{session()->get('message')}}

                </div>

            @endif

            <h1 class="post_title">Update Post</h1>
        
            <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">

                @csrf


                <div class="div_center">
                    <label for="">Post Title</label>
                    <input style="color:black;" type="text" name="title" value="{{$post->title}}">
                </div>

                <div class="div_center">
                    <label for="">Post Body</label>
                    <textarea  style="color:black;" name="body" id="" required>{{$post->body}}</textarea>
                </div>

                <div class="div_center">
                    <label>Old Image</label>
                    <img style="margin:auto;" height="150px" width="100px" src="/postimage/{{$post->image}}" alt="">
                </div>

                <div class="div_center">
                    <label>Update Old Image</label>
                    <input type="file" name="image" id="">
                </div>

                <div class="div_center">
                    <input type="submit" value="Update" class="btn btn-success">
                </div>


            </form>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>