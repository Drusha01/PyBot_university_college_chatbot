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

<!-- FAQ/forums content -->
<section id="faq-forums" class="bg-light py-5" style="margin-top: 5rem;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
          <!-- FAQ Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                How do I apply for admission to WMSU?
              </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                To apply for admission to WMSU, please visit our <a href="#">Admissions page</a> and follow the instructions provided.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                What programs and courses does WMSU offer?
              </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                WMSU offers a wide range of programs and courses. You can find detailed information about our academic programs on our <a href="#">Academics page</a>.
              </div>
            </div>
          </div>

          <!-- Add more FAQ items here -->
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="section-title">Forums</h2>
        <p>Join our discussion forums to connect with fellow students, faculty, and staff. Share your experiences, ask questions, and engage in meaningful conversations.</p>
        <a class="btn btn-primary" href="#">Visit Forums</a>
      </div>
    </div>
  </div>
</section>






    </div>
