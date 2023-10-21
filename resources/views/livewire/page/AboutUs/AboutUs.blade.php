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
      <!-- About Us Section -->
    <div class="container"  style="margin-top: 5rem;">
    <section class="p-3 pb-md-4 mx-auto text-center">
      <div class="row p-3 pb-md-4 mx-auto text-center">
        <div class="col-12 col-lg-6 col-xl-5">
      <!--     <img class="img-fluid rounded" loading="lazy" src="{{asset('assets/images/people.png') }}" alt=""> optional -->
        </div>
        <div class="p-3 pb-md-4 mx-auto text-center">
          <div class="row justify-content-xl-center">
            <div class="p-3 pb-md-4 mx-auto text-center">
              <h2 class="p-3 pb-md-6 mx-auto text-center">Abous Us</h2>
              <p class="lead fs-4 text-secondary p-3 pb-md-4 mx-auto text-center">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
              <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>
              <div class="row gy-4 gy-md-0 gx-xxl-5X">
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.820.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                      </svg>
                    </div>
                    <div>
                      <h4 class="mb-3">Versatile Brand</h4>
                      <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                      </svg>
                    </div>
                    <div>
                      <h4 class="mb-3">Digital Agency</h4>
                      <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End About Us Section -->



</div>
