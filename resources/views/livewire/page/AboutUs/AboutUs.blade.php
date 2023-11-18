<div>
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
                <h2 class="display-4 fw-normal p-3 pb-md-6 mx-auto text-center">About Us</h2>
                <p class="lead text-dark p-3 pb-md-4 mx-auto text-center">Welcome to the future of educational assistance! PyBOT is your virtual companion designed to enhance your university experience in the digital age. This intelligent and friendly bot is here to make your academic journey smoother, more efficient, and enjoyable.</p>
                <p class="mb-5"></p>
                <div class="row gy-4 gy-md-0 gx-xxl-5X justify-content-center">
                  @if($about_us_data)
                    @foreach($about_us_data as $key => $value)
                      <div class="col-12 col-md-4 ">
                        <div class="row ">
                          <div class="col-md-12 me-4 text-primary">
                            <img src="{{asset('storage/content/about_us/'.$value->about_us_logo)}}" style="border-radius:50%;" alt=""  width="32" height="32">
                          </div>
                          <div class="col-md-12">
                            <h4 class="lead mt-3 mb-3">{{$value->about_us_header}}</h4>
                            <p class="text-secondary mb-0">{{$value->about_us_content}}</p>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <div class="col-12 col-md-4">
                      <div class="row">
                        <div class="col-md-12 me-4 text-primary">
                          <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top " alt="Program Image">
                        </div>
                        <div class="col-md-12">
                          <h4 class="lead mt-3 mb-3">Instant Answers</h4>
                          <p class="text-secondary mb-0">Have a question? PyBOT is here to provide quick and accurate answers 24/7. Whether you need information on courses, campus facilities, or academic deadlines, PyBOT has got you covered.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="row">
                        <div class="col-md-12 me-4 text-primary">
                          <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top " alt="Program Image">
                        </div>
                        <div class="col-md-12">
                          <h4 class="lead mt-3 mb-3">Events and Activities</h4>
                          <p class="text-secondary mb-0">Stay updated with the latest university events, clubs, and extracurricular activities. PyBOT will keep you informed about exciting opportunities to enrich your college experience.</p>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="row">
                        <div class="col-md-12 me-4 text-primary">
                          <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top " alt="Program Image">
                        </div>
                        <div class="col-md-12">
                          <h4 class="lead mt-3 mb-3">Registration and Enrollment</h4>
                          <p class="text-secondary mb-0">Easily access information about registration deadlines, enrollment procedures, and tuition payment. The chatbot simplifies administrative tasks, making your life as a student more manageable.</p>
                        </div>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- End About Us Section -->



</div>
