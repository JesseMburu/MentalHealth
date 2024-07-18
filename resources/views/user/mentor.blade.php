<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Mentors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">


      @foreach($mentor as $mentors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important" src="mentorimage/{{$mentors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="{{url('chatify')}}"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$mentors->name}}</p>
              <span class="text-sm text-grey">{{$mentors->specialization}}</span>
            </div>
          </div>
        </div>

        @endforeach
        

      </div>
    </div>
  </div>