<div>
  <main class="content-wrapper" id="home">
    @if($carousel_data)
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($carousel_data as $key =>$value)
            @if($key == 0)
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key}}" class="active" aria-current="true" aria-label="Slide {{ $key+1}}"></button>
            @else
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key}}" aria-label="Slide {{ $key+1}}"></button>
            @endif
          @endforeach
        </div>
        <div class="carousel-inner">
        @foreach ($carousel_data as $key =>$value)
          @if($key == 0)
            <div class="carousel-item active" >
              <img src="{{asset('storage/content/carousel/'.$value->carousel_content_image)}}" class="card-img-top mx-auto" alt="Admission Image {{ $key+1}}">
              <div class="banner"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="animated fadeInDown" style="text-shadow: 2px 4px 8px #0b4737;">{{$value->carousel_header_title}}</h1>
                  <p class="animated fadeInUp" style="-webkit-text-stroke: 0.9px #b1beb9; text-shadow: 2px 4px 8px #0b4737;">{{$value->carousel_paragraph_paragraph}}</p>
                  <p class="animated fadeInUp"><a class="btn btn-md btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
                </div>
              </div>
            </div>
          @else
          <div class="carousel-item" >
            <img src="{{asset('storage/content/carousel/'.$value->carousel_content_image)}}" class="card-img-top mx-auto" alt="Admission Image {{ $key+1}}">
            <div class="banner"></div>
            <div class="container">
              <div class="carousel-caption">
                <h1 class="animated fadeInDown" style="text-shadow: 2px 4px 8px #0b4737;">{{$value->carousel_header_title}}</h1>
                <p class="animated fadeInUp" style="-webkit-text-stroke: 0.9px #b1beb9; text-shadow: 2px 4px 8px #0b4737;">{{$value->carousel_paragraph_paragraph}}</p>
                <p class="animated fadeInUp"><a class="btn btn-md btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          @endif
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Next</span>
        </button>
      </div>
    @else
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" >
          <img src="{{ asset('admin-assets/media/programs/banner-1.jpg') }}" class="card-img-top mx-auto" alt="Admission Image 1">
          <div class="banner"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1 class="animated fadeInDown" style="text-shadow: 2px 4px 8px #0b4737;">Student-Centered College.</h1>
              <p class="animated fadeInUp" style="-webkit-text-stroke: 0.9px #b1beb9; text-shadow: 2px 4px 8px #0b4737;">The College of Computing Studies allows students to explore their passions for problem-solving and producing creative experiences.</p>
              <p class="animated fadeInUp"><a class="btn btn-md btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" >
          <img src="{{asset('admin-assets/media/programs/banner-2.jpg')}}"  class="card-img-top mx-auto" alt="Admission Image 2">
          <div class="banner"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1 class="animated fadeInDown" style="text-shadow: 2px 4px 8px #0b4737;">Innovative and Supportive Faculty and Staff.</h1>
              <p class="animated fadeInUp" style="-webkit-text-stroke: 0.9px #b1beb9; text-shadow: 2px 4px 8px #0b4737;">The College of Computing Studies is united by a common goal: to make the world a better place through education, research, and innovation.</p>
              <p class="animated fadeInUp"><a class="btn btn-md btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" >
          <img src="{{asset('admin-assets/media/programs/banner-3.jpg')}}"  class="card-img-top mx-auto" alt="Admission Image 3">
          <div class="banner"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1 class="animated fadeInDown" style="text-shadow: 2px 4px 8px #0b4737;">Convenient Facilities.</h1>
              <p class="animated fadeInUp" style="-webkit-text-stroke: 0.9px #b1beb9; text-shadow: 2px 4px 8px #0b4737;">The College of Computing Studies is equipped with spacious and fully-aircon classrooms, high-tech laboratories, media rooms, and free wifi for all students.</p>
              <p class="animated fadeInUp"><a class="btn btn-md btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden ">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden ">Next</span>
      </button>
    </div>
    @endif

    <!-- start -->
    @if(0 && $academic_data)
      <div class="container marketing" style="font-family: -webkit-body; background-color: darkseagreen;">
        <div class="pricing-header pt-md-1 pb-md-4 mx-auto text-center" id="academics">
          <h1 class="display-4 fw-normal">Technology Degrees That Deliver Results</h1>
          <p class="fs-5">We offer a range of technology programs designed to equip students with cutting-edge skills and knowledge following industry standards. Our programs include:
          </p>
        </div>
      @foreach($academic_data as $key=>$value)
        <div class="row featurette featurette-1">
          <div class="col-12 col-md-12 col-lg-7 course-cs">
            <h2 class="featurette-heading course-title">BS in Computer Science</span></h2>
            <p class="lead justify">
              Master advanced programming languages, algorithms, and software architecture for careers in fields like machine learning, blockchain, IoT, and more. Gain a comprehensive foundation rooted in computer theory and mathematics.
            </p>
            <p class="btn-apply-center"><a class="btn btn-md btn-success background-color-green btn-apply btn-font" href="../student/apply.php?program=bscs">Apply Now</a></p>
          </div>
          <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1"></div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{asset('storage/content/academic/'.$value->academic_logo)}}" class="card-img-top " alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">{{$value->academic_header}}</h5>
              <p class="card-text cqh-7">{{$value->academic_content}}</p>
            </div>
          </div>
        </div>
      @endforeach
    @else
    <div class="container marketing">
      <div class="pricing-header pt-md-4 pb-md-4 mx-auto text-center" id="academics">
        <h1 class="display-4 fw-normal">Technology Degrees That Deliver Results</h1>
        <p class="fs-5">We offer a range of technology programs designed to equip students with cutting-edge skills and knowledge following industry standards. Our programs include:
        </p>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette featurette-1">
        <div class="col-12 col-md-12 col-lg-7 course-cs">
          <h2 class="featurette-heading course-title">BS in Computer Science</span></h2>
          <p class="lead justify">
            Master advanced programming languages, algorithms, and software architecture for careers in fields like machine learning, blockchain, IoT, and more. Gain a comprehensive foundation rooted in computer theory and mathematics.
          </p>
          <p class="btn-apply-center"><a class="btn btn-md btn-success background-color-green btn-apply btn-font" href="../student/apply.php?program=bscs">Apply Now</a></p>
        </div>
        <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1"></div>
      </div>
      <hr class="featurette-divider sec-divider">
      <div class="row featurette featurette-2">
        <div class="col-12 col-md-12 col-lg-7 course-it">
          <h2 class="featurette-heading course-title">BS in Information Technology</span></h2>
          <p class="lead justify">
            Apply emerging technologies to implement and administer real-world information systems, networks, databases and infrastructure. Become the do-it-all IT expert every organization needs.
          </p>
          <p class="btn-apply-center"><a class="btn btn-md btn-success background-color-green btn-apply btn-font" href="../student/apply.php?program=bscs">Apply Now</a></p>
        </div>
        <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1 course-2"></div>
      </div>
      <hr class="featurette-divider sec-divider">
      <div class="row featurette featurette-2">
        <div class="col-12 col-md-12 col-lg-7 course-it">
          <h2 class="featurette-heading course-title">Associate in Computer Technology (ACT)</span></h2>
          <p class="lead justify">
            Build versatile computer skills in programming, hardware, databases, and networks. Gain knowledge applicable across sectors and launch your technology career.
          </p>
          <p class="btn-apply-center"><a class="btn btn-md btn-success background-color-green btn-apply btn-font" href="../student/apply.php?program=bscs">Apply Now</a></p>
        </div>
        <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1 course-2"></div>
      </div>
      @endif
      <!-- end -->
      
      <hr class="featurette-divider">
      
      @if($academic_data)
          <div class="pricing-header pt-md-4 pb-md-4 mx-auto text-center" id="admissions">
            <h1 class="display-4 fw-normal">Admissions</h1>
            <p class="fs-5">
              We have rolled out an AI-enabled decision support system named - <span class="green-bold fs-5">Pybot</span>. to improve and accelerate the way we assess and admit candidates seeking enrollment.
            </p>
            <p></p>
          </div>
          <div class="row justify-content-xl-center">
          @foreach($academic_data as $key=>$value)
            <div class="col-md-3">
              <div class="card mb-4">
                <img src="{{asset('storage/content/academic/'.$value->academic_logo)}}" class="card-img-top " alt="Program Image">
                <div class="card-body">
                  <h5 class="card-title">{{$value->academic_header}}</h5>
                  <p class="card-text cqh-7">{{$value->academic_content}}</p>
                </div>
              </div>
            </div>
          @endforeach
          </div>
      @else
      <div class="pricing-header pt-md-4 pb-md-4 mx-auto text-center" id="admissions">
        <h1 class="display-4 fw-normal">Admissions</h1>
        <p class="fs-5">
          We have rolled out an AI-enabled decision support system named - <span class="green-bold fs-5">Pybot</span>. to improve and accelerate the way we assess and admit candidates seeking enrollment.
        </p>
        <p><a class="btn btn-md btn-success background-color-green text-center btn-apply btn-font" href="../student/apply.php">Apply Now</a></p>
      </div>
      @endif

      <hr class="featurette-divider">
      @if($faculty_data)
        <div class="pricing-header pt-md-4 pb-md-4 mx-auto text-center" id="faculty">
          <h1 class="display-4 fw-normal">Faculty and Staff</h1>
        </div>
        <div class="row faculty justify-content-xl-center">
        @foreach($faculty_data as $key =>$value)
          <div class="col-lg-4">
            <div class="row">
              <div class="col-12 mb-2">
              <img src="{{asset('storage/content/faculty/'.$value->faculty_picture)}}" alt="" class="bd-placeholder-img rounded w-75">
              </div>
              <div class="col-12 border-top pt-3">
              <h3>{{$value->faculty_fullname}}</h3>
              <h4>{{$value->faculty_position}}</h4>
              </div>
            </div>
          </div>
        @endforeach
      @else
      <div class="pricing-header pt-md-4 pb-md-4 mx-auto text-center" id="faculty">
        <h1 class="display-4 fw-normal">Faculty and Staff</h1>
      </div>
      <div class="row faculty">
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-1.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Dr. Juan Dela Cruz</h3>
          <h4>Dean</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-2.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Maria Santos, MSCS</h3>
          <h4>Associate Dean</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-3.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Carla Rivera, MIT</h3>
          <h4>IT Department Head</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-4.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Daniel Padilla</h3>
          <h4>CS Department Head</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-5.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Andrea Lopez, MSCS </h3>
          <h4>ACT Department Head</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-6.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Miguel Torres</h3>
          <h4>Faculty Member</h4>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('admin-assets/media/avatar/avatar-8.jpg')}}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Clara Mendoza</h3>
          <h4>Faculty Member</h4>
        </div>
      </div>
      @endif
      <hr class="featurette-divider">
    </div>
  </main>
</div>


