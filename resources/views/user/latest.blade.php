<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Blog Posts</h1>
      <div class="row mt-5">
      
      @foreach($post as $post)


        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
              </div>
              <a style="margin-bottom:20px; height:200px; width:350px;" href="{{url('post_details',$post->id)}}" class="post-thumb">
                <img src="../postimage/{{$post->image}}" alt="">
              </a>
            </div>
            <div class="body">

              <h4>{{$post->title}}</h4>

              <div class="site-info">
                <div class="avatar mr-2">
                  
                  <p>Post by <b>{{$post->name}}</b></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center mt-4 wow zoomIn">
            <a href="{{url('post_details',$post->id)}}" class="btn btn-primary">Read More</a>
          </div>
        </div>

        @endforeach



      </div>
    </div>
  </div> <!-- .page-section -->
