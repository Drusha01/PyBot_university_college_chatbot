<div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-color: white;">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 class="display-4 fw-normal text-white">Forums</h2>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route ('page.home')}}">Home</a></li>
          <li>Forums</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->
    <!-- FAQ/forums content -->
    <section id="faq-forums" class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="section-title">Frequently Asked Questions</h2>
            @if($faq_data)
              <div class="accordion" id="faqAccordion"> 
              @foreach($faq_data as $key => $value)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$key}}" aria-expanded="false" aria-controls="collapseOne">
                      {{$value->faq_question}}
                    </button>
                    </h2>
                    <div id="collapse-{{$key}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-start">
                          {{$value->faq_answer}}
                        </div>
                    </div>
                </div>
                @endforeach
                
              </div>        
            @endif
          </div>
          <div class="col-lg-6">
            <h2 class="section-title">Chat</h2>
            <p>Join our real time chat application to connect with faculty, and staff. Share your experiences, ask questions, and engage in meaningful conversations.</p>
            <a class="btn btn-primary"  href="{{route ('page.chat') }}">Visit Chat Application</a>
          </div>
        </div>
      </div>
    </section>
</div>
