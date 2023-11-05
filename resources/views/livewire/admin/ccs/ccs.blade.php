@section('title', 'Pybot | College of Computing Studies') <!-- Set the page title -->

@section('colleges', 'active')
<div>
<link href="{{ asset('admin-assets/css/dashboard.css') }}" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" rel="stylesheet" type="text/css">
     <!-- Main Content -->
     <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="colleges">Colleges</a></li>
                <li class="breadcrumb-item active"aria-current="page">View CCS</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-3 col-sm-3  profile_left">
                        <div class="card">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <img class="img-responsive avatar-view w-100" src="{{ asset('admin-assets\media\programs\banner-3.jpg') }}" alt="Avatar" title="Change the avatar">
                            </div>
                        </div>
                        <h3>College of Computing Studies</h3>
                        <ul class="list-unstyled user_data">
                            <li>
                            <i class="bi bi-geo-alt-fill"></i> Baliwasan, Zamboanga City
                            </li>
                            <li>
                            <i class="bi bi-question-circle"></i> IT, CS, ACT
                            </li>
                            <li class="m-top-xs">
                            <i class="bi bi-box-arrow-up-right"></i><a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                            </li>
                        </ul>
                        <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                        <br>
                        <h4>Population</h4>
                        <ul class="list-unstyled user_data">
                            <li>
                                <p>Faculties</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" style="width: 50%;" aria-valuenow="48"></div>
                                </div>
                            </li>
                            <li>
                                <p>IT</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" style="width: 70%;" aria-valuenow="69"></div>
                                </div>
                            </li>
                            <li>
                                <p>CS</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" style="width: 30%;" aria-valuenow="29"></div>
                                </div>
                            </li>
                            <li>
                                <p>ACT</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" style="width: 50%;" aria-valuenow="48"></div>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="card">
                        <div class="profile_title">
                            <div class="col-md-6">
                                <h2>Activity Report</h2>
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                <span>September 29, 2023 - October 28, 2023</span> <b class="caret"></b>
                            </div>
                        </div>

                        <div id="graph_bar" style="width:100%; height:280px;"></div>

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="nav-item active show"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a></li>

                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a></li>

                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content pb-0">
                                <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                                <ul class="com">
                                    <li>
                                        <img src="{{ asset('admin-assets\media\programs\banner-3.jpg') }}" class="avatar" alt="Avatar">
                                    <div class="com_date">
                                        <h3 class="date text-info">24</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="com_wrapper">
                                        <h4 class="heading">Desmond Davison</h4>
                                        <blockquote class="com">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('admin-assets\media\programs\banner-3.jpg') }}" class="avatar" alt="Avatar">
                                    <div class="com_date">
                                        <h3 class="date text-error">21</h3>
                                        <p class="month">May</p>
                                    </div>
                                    <div class="com_wrapper">
                                        <h4 class="heading">Brian Michaels</h4>
                                        <blockquote class="com">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                        <br>
                                        <p class="url">
                                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                                            <a href="#" data-original-title="">Download</a>
                                        </p>
                                    </div>
                                </li>
                            </li>
                        </ul>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <table class="data table table-striped no-margin">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Client Company</th>
                                    <th class="hidden-phone">Hours Spent</th>
                                    <th>Contribution</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>New Company Takeover Review</td>
                                    <td>Deveint Inc</td>
                                
                                    <td class="hidden-phone">18</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-transitiongoal="35" style="width: 35%;" aria-valuenow="35"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>New Partner Contracts Consultanci</td>
                                    <td>Deveint Inc</td>
                                    <td class="hidden-phone">13</td>
                                    <td class="vertical-align-mid">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-transitiongoal="15" style="width: 15%;" aria-valuenow="15"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
      //bar chart
      var bar = document.getElementById('graph_bar');
      bar.height = 400
      var barConfig = new Chart(bar, {
          type: 'verticalBar',
          data: {
              labels: ['data-1', 'data-2', 'data-3', 'data-4', 'data-5', 'data-6', 'data-7'],
              datasets: [{
                  label: '# of data',
                  data: [30, 25, 20, 15, 11, 4, 2],
                  backgroundColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(225, 50, 64, 1)', 'rgba(64, 159, 64, 1)'],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              },
              responsive: true, // Instruct chart js to respond nicely.
              maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
          }
      })
    </script>

    </main><!-- End #main -->
</div>
