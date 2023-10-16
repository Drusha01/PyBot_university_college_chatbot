    <div>
        <!-- ======= Top Navigation ======= -->
    <nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="http://pybot/admin-assets/media/pybot_icon.svg" class="mr-2" alt="logo" style="width: 40px;height: 34px;">
            <span class="logo">Pybot</span>
        </a>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.AboutUs')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.academic')}}">Academic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.admission')}}">Admission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.forums')}}">FAQs/Forums</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 30px; height: 30px; margin-right: 8px;">Kai kai
                </a>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route ('page.profile') }}">
                    <i class="bi bi-person-fill"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                    <i class="bi bi-box-arrow-right"></i> Sign Out
                    </a>
                </div>
                </li>
            </ul>
            <!-- Icon links (if needed) -->
            <div class="top-nav-icons">
            <!-- Add your icon links here if needed -->
            </div>
        </div>
        </div>
    </nav><!-- End Top Navigation -->
    
    <div id="chat-circle" class="btn btn-raised">
        <img src="{{ asset('admin-assets/media/icon.png') }}" class="icon" alt="logo">
        <div id="chat-overlay"></div>
        </div>
    <div class="chat">
        <div class="chat-title">
        <div>
            <h1>PyBot</h1>
            <h2>ACTIVE</h2>
        </div>
        <figure class="avatar">
            <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" />
        </figure>
        <span class="chat-box-toggle"><i class="bi bi-x"></i></span>
        </div>
        <div class="messages">
        <div class="messages-content"></div>
        </div>
        <div class="message-box">
        <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
        <button type="submit" class="message-submit">Send</button>
        </div>
    </div>
<!-- Academic Page Content Section -->
<section class="py-5" style="margin-top: 5rem;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h2 class="display-4 mb-4">Academic Programs</h2>
        <p class="lead">Explore our academic programs designed to help you achieve your educational goals.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-1.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 1</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <img src="your-image-url-2.jpg" class="card-img-top" alt="Program Image">
          <div class="card-body">
            <h5 class="card-title">Program Title 2</h5>
            <p class="card-text">A brief description of the program goes here. You can add more details about the program.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <!-- Add more program cards here (copy and paste the above card structure as needed) -->

    </div>
  </div>
</section>
<!-- End Academic Page Content Section -->




    </div>
