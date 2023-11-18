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
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.820.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                          </svg>
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
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                            <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                          </svg>
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
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                            <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                          </svg>
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
