<div>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-color: white;">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 class="display-4 fw-normal text-white">Academic</h2>
            
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route ('page.home')}}">Home</a></li>
          <li>Academic</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->
  <!-- Academic Page Content Section -->
  <section class="container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="lead mb-4" style="ccolor: var(--color-default);">Explore our academic programs designed to help you achieve your educational goals.</p>
        </div>
      </div>

      <div class="row mt-3 justify-content-xl-center">
        @if($academic_data)
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
        @else
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top " alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 1</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program. hfowbuoetb hweofihweiovhtonawe jhafniosrhaiovth nhiovfhaslh mh oeihcpath nfioahgaoeg.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4">
            <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top" alt="Program Image">
            <div class="card-body">
              <h5 class="card-title">Program Title 2</h5>
              <p class="card-text cqh-7">A brief description of the program goes here. You can add more details about the program.</p>
              <a href="#" class="btn btn-sm btn-success">Learn More</a>
            </div>
          </div>
        </div>
        @endif
        <!-- Add more program cards here (copy and paste the above card structure as needed) -->

      </div>
    </div>
  </section>
  <!-- End Academic Page Content Section -->
</div>
