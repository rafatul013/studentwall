@extends('teacher.layouts.app')
@section('title','Teacher | Dashboard')
@section('content')

<section id="teacher" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">Teacher Profile </h3>
            </div>
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('frontend/img/ayesha_madam.png')}}" class="img-fluid rounded b-shadow-a" alt="" style="height:150px; width:150px">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{ Auth::guard('teacher')->user()->name }}</span></p>
                        <p><span class="title-s">Designation: </span> <span>Faculty OF CSE Department</span></p>
                        <p><span class="title-s">Email: </span> <span>{{ Auth::guard('teacher')->user()->email }}</span></p>
                        <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <h4>Education</h4>
                    <p class="title-s">B. Sc. in Computer Science & Engineering, Chittagong University of Engineering & Technology (CUET)</p>
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
                  </div>
                </div>
              </div>
              <a href="teachers" class="btn btn-primary ">Edit Teacher Profile</a>
            </div>
          </div>
        </div>
      </div>
</section> 

<section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="service-box">
            <a href="teachers"><img style="height:100px; width:100px;" src="{{ asset('icon/teacherpanel.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Teacher</h2>
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
            <a href=""><img style="height:100px; width:100px;" src="{{ asset('icon/classroom.png') }}"></a>
              <div class="service-content">
                <h2 class="s-title">Attendance</h2>
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
        </div>
          
</section><!-- End Services Section -->
    
@endsection