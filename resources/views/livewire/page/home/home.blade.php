    <div class="web-sized">
    <div class="container">
      <header class="p-3 text-bg-dark">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <a href="/" class="d-flex align-items-center text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
          </div>
          <ul class="nav">
            <li><a href="{{ Route('page.home') }}" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="{{ url('about') }}" class="nav-link px-2 text-white">About</a></li>
            <li><a href="{{ url('faq') }}" class="nav-link px-2 text-white">FAQs</a></li>
          </ul>
          <div>
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Sign In</a>
          </div>

        </div>
      </header>
    </div>
        <main class="computer-science-facts-blog-he-parent" id="main-panel">
          <<img class="computer-science-facts-blog-he-icon " alt="" src="{{ asset('assets/images/computersciencefactsblogheader-1@2x.png') }}">
          <section class="frame-child" id="section"></section>
     <!-- walang file   <img class="frame-item" alt="" src="{{ asset('images/frame.svg') }}"> -->
        </main>
        <div class="frame-parent" style="position: fixed; top: 20%;">
          <div class="wmsu-logo-1-parent">
          <img class="wmsu-logo-1" alt="" src="{{ asset('assets/images/wmsu-logo-1@2x.png') }}">
          
          <img class="ccs-logo-icon" alt="" src="{{ asset('assets/images/ccs-logo@2x.png') }}">
          </div>
          <div class="logo">
            <div class="frame">
              <div class="an-ai-query-chatbot">
                An AI-query chatbot for CCS
              </div>
            </div>
            <div class="frame1">
              <div class="frame2">
                <div class="frame-group">
                  <div class="frame3">
                    <div class="frame4">
                      <div class="frame5">
                        <h1 class="p">P</h1>
                      </div>
                      <div class="frame6">
                        <h1 class="y">y</h1>
                      </div>
                    </div>
                  </div>
                  <div class="frame7">
                    <div class="frame8">
                      <h1 class="b">b</h1>
                      <h1 class="o">o</h1>
                      <h1 class="t">t</h1>
                    </div>
                  </div>
                </div>
              </div>
              <img class="tableryin-yang-icon" alt="" src="{{ asset('assets/svg/pybot_icon.svg') }}">
            </div>
          </div>
        </div>
        <div class="chat-screen">
          <div class="frame-container">
            <div class="pybot-parent">
              <div class="pybot">
                <div class="hi-its-great-to-see-you-wrapper">
                  <h3 class="hi-its-great">Hi, it's great to see you!</h3>
                </div>
                <div class="how-can-i-help-you-wrapper">
                  <h3 class="hi-its-great">How can I help you?</h3>
                </div>
              </div>
              <div class="options">
                <div class="admission-schedule">
                <img class="admission-schedule-child" alt="" src="{{ asset('assets/svg/schedule.svg') }}">

                  <div class="admission-schedule1">Admission Schedule</div>
                </div>
                <div class="contact-faculty">
                <img class="contact-faculty-child" alt="" src="{{ asset('assets/svg/faq.svg') }}">
                  <div class="admission-schedule1">Contact Faculty</div>
                </div>
                <div class="exams">
                <img class="exams-child" alt="" src="{{ asset('assets/svg/bullet_list.svg') }}">


                  <div class="admission-schedule1">Exams</div>
                </div>
                <div class="programmes">
                <img class="programmes-child" alt="" src="{{ asset('assets/svg/graduation_hat.svg') }}">
                  <div class="admission-schedule1">Programmes</div>
                </div>
                <div class="subjects">
                <img class="subjects-child" alt="" src="{{ asset('assets/svg/bookmarked.svg') }}">
                  <div class="admission-schedule1">Subjects</div>
                </div>
              </div>
            </div>
            <div class="input-box-parent">
              <div class="input-box">
                <h3 class="message">Message...</h3>
              </div>
              <img class="send-icon" alt="" src="{{ asset('images/send.svg') }}" />
            </div>
          </div>
          <div class="frame9">
            <div class="bgw">
            <img class="image-20-icon" alt="" src="{{ asset('images/chat_bgframe.png') }}" />

              <div class="bgw-child"></div>
              <img class="vector-icon" alt="" src="{{ asset('svg/three_dots.svg') }}" />
            </div>
            <div class="header">
            <img class="header-child" alt="" src="{{ asset('assets/svg/active_profile.svg') }}" />

              <h2 class="pybot1">PyBot</h2>
            </div>
          </div>
        </div>
      </div>
      
    <div id="chatbot" class="main-card collapsed">
        <button id="chatbot_toggle">
        <img src="{{ asset('assets/svg/chat-toggle.svg') }}" alt="Logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style=""><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg>
        </button>
        <div class="main-title">
            <div class="avatar">
            <img src="{{ asset('assets/svg/icon.svg') }}" alt="Logo">

            </div>
            <span>Chatbot</span>
        </div>
        <div class="chat-area" id="message-box">
        </div>
        <div class="line"></div>
        <div class="input-div">
            <input class="input-message" name="message" type="text" id="message" placeholder="Type your message ..." />
            <button class="input-send" onclick="send()">
                <svg style="width:24px;height:24px">
                    <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
                </svg>
            </button>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{ asset('assets/js/chat.js') }}"></script>
    </div>


