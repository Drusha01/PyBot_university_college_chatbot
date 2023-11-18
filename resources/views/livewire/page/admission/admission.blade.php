<div>
    <!-- Admission Page Content Section -->
    <section class="py-5" style="margin-top: 5rem;" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <h2 class="display-4 mb-4">Admissions</h2>
            <p class="lead">Welcome to the Western Mindanao State University's admission page. We are excited to help you start your educational journey with us.</p>
          </div>
        </div>
        <div class="row border-top mt-3 justify-content-xl-center">
          @if($admission_data)
            @foreach($admission_data as $key=>$value)
              <div class="col-md-6">
                <div class="card mb-4">
                  <img src="{{asset('storage/content/admission/'.$value->admission_logo)}}"  class="card-img-top w-50 mx-auto" alt="Admission Image 1">
                  <div class="card-body">
                    <h5 class="card-title">{{$value->admission_header}}</h5>
                    <p class="card-text cqh-7">{{$value->admission_content}}</p>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="col-md-6">
              <div class="card mb-4">
                <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top w-50 mx-auto" alt="Admission Image 1">
                <div class="card-body">
                  <h5 class="card-title">Undergraduate Admissions</h5>
                  <p class="card-text cqh-7">Explore the various undergraduate programs available at WMSU and find the right fit for your academic goals. hfowbuoetb hweofihweiovhtonawe jhafniosrhaiovth nhiovfhaslh mh oeihcpath nfioahgaoeg. jdiowaofiwfij kosafoinifninw iwnoafn oijwifawioj oc iawfo w jij oiojoijdaw oiajwiroirrrririririr anwon oijpwijr nsajjjjjsnnnnn oaijiioiiooiioi ijweijijijiwe kaklkncksnkfnjln jowaj</p>
                  <a href="undergraduate-admissions.html" class="btn btn-sm btn-success">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4">
                <img src="{{ asset('admin-assets/media/programs/course-1.png') }}" class="card-img-top w-50 mx-auto" alt="Admission Image 2">
                <div class="card-body">
                  <h5 class="card-title">Graduate Admissions</h5>
                  <p class="card-text cqh-7">Discover the opportunities for postgraduate education at WMSU and advance your knowledge and career.</p>
                  <a href="graduate-admissions.html" class="btn btn-sm btn-success">Learn More</a>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
    <!-- End Admission Page Content Section -->
</div>
