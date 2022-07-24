@extends('user.layouts.app')
@section('title','Student | Dashboard')
@section('content')

<section id="student" class="about-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
          Student Profile
          </h3>
        </div>
        <div class="box-shadow-full">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="{{asset('frontend/img/rafatulislam.jpg')}}" class="img-fluid rounded b-shadow-a" alt="" style="height:150px; width:150px">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">Name: </span> <span>{{ Auth::guard('web')->user()->name }}</span></p>
                    <p><span class="title-s">Profile: </span> <span>Web developer</span></p>
                    <p><span class="title-s">Email: </span> <span>{{ Auth::guard('web')->user()->email }}</span></p>
                    <p><span class="title-s">Phone: </span> <span>(+880) 01518389378</span></p>
                  </div>
                </div>
              </div>
              <div class="skill-mf">
                <p class="title-s">Bsc in CSE</p>
                <span>CGPA</span> <span class="pull-right">3.0</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="3.5" aria-valuemin="0" aria-valuemax="4"></div>
                </div>
                <span>Credit Complete</span> <span class="pull-right">90</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Complete Semester</span> <span class="pull-right">11th</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="12"></div>
                </div>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <div class="title-box-2">
                  <h5 class="title-left">
                  About me
                  </h5>
                </div>
                <p class="lead">
                  Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                  imperdiet et, porttitor
                  at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                  porttitor accumsan tincidunt.
                </p>
                <p class="lead">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                  porttitor volutpat. Vestibulum
                  ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                </p>
                <p class="lead">
                  Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                  Nulla porttitor accumsan
                  tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </p>
              </div>
            </div>
          </div>
          <a href="students" class="btn btn-primary ">Edit Student Profile</a>
        </div>

      </div>
    </div>

  </div>
</section><!-- End student Section -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a"> 
                All service are available here.You can take any service by clicking on the specific icon
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="service-box">
            <a href="students"><img style="height:100px; width:100px;" src="{{ asset('icon/studentpanel.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Attendance</h2>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/classroom.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Classroom</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href="todos"><img style="height:100px; width:100px;" src="{{ asset('icon/todo.png') }}"></a>
              <div class="service-content">
                <h2  class="s-title">Todo</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href="library"><img style="height:100px; width:100px;" src="{{ asset('icon/freelibrary.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Library</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/blog.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Blog</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/groupchat.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Group Chat</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/findjob.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Find Job</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/hostel.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Find Hostel</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/findjob.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Portfolio</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/calender.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Calender</h2>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="service-box">
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/bloodbank.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Blood Bank</h2>
              </div>
            </div>
          </div>
        </div>
          
    </section><!-- End Services Section -->
@endsection