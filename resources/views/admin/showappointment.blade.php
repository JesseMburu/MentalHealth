<!DOCTYPE html>
<html lang="en">
  <head>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  @include('admin.css')

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
        <div class="container-fluid page-body-wrapper">

        <div align="center">

        <table>
            <tr style="background-color:black;" align="center">
                <th style="padding:10px;">Patient Name</th>
                <th style="padding:10px;">Email</th>
                <th style="padding:10px;">Phone</th>
                <th style="padding:10px;">Mentor Name</th>
                <th style="padding:10px;">Date</th>
                <th style="padding:10px;">Message</th>
                <th style="padding:10px;">Status</th>
                <th style="padding:10px;">Approved</th>
                <th style="padding:10px;">Canceled</th>
                <th style="padding:10px;">Send Email</th>
            </tr>

            @foreach($data as $appoint)

            <tr style="background-color:skyblue;" align="center">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->mentor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a onclick="confirm(event)" class="btn btn-success" href="{{url('approved' ,$appoint->id)}}">Approved</a>
                </td>
                <td>
                    <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('canceled' ,$appoint->id)}}">Canceled</a>
                </td>

                <td>
                    <a class="btn btn-primary" href="{{url('emailview' ,$appoint->id)}}">Send Email</a>
                </td>
            </tr>

            @endforeach

        </table>

        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

    <script type="text/javascript">

            //Cancel button
            function confirmation(ev){

                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({
                    title : " Are you sure you want to cancel this appointment? " ,
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

          //Approve button
            function confirm(ev){

                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({
                    title : " Are you sure you want to approve this appointment? " ,
                    icon : "success",
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