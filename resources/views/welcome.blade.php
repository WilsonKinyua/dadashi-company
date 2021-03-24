@extends('layouts.home-page')

@section('content')

<main>

    <div class="slider-area slider-height" data-background="{{ asset('assets_homegpage/img/hero/h1_hero.jpg')}}">
      <div class="slider-active">

        @foreach ($homePageSlides as $key => $slides)

        <div class="single-slider">
            <div class="slider-cap-wrapper">
                <div class="hero__caption">
                <p data-animation="fadeInLeft" data-delay=".2s"> {{ $slides->caption ?? '' }} </p>
                <h2 data-animation="fadeInLeft" data-delay=".5s">{{ $slides->description ?? '' }}</h2>

                {{-- <a href="{{ route('company.apply') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a> --}}
                </div>
                <div class="hero__img">
                    @if($slides->file)
                        <img class="img-responsive" src="{{ asset($slides->file) }}" alt="">
                        @else
                        <img class="img-responsive" src="http://placehold.it/600x600" alt="">
                    @endif
                </div>
            </div>
        </div>

        @endforeach

      </div>

      <div class="slider-footer section-bg d-none d-sm-block">
        <div class="footer-wrapper">

          <div class="single-caption">
            <div class="single-img">
              <img src="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            </div>
          </div>


          <div  class="single-caption">
            <div class="caption-icon">
              {{-- <span class="flaticon-clock"></span> --}}
            </div>
            <div class="caption">
              <p>Software as a service (SaaS)</p>
              {{-- <p>Approvals</p> --}}
            </div>
          </div>

          <div  class="single-caption">
            <div class="caption-icon">
              {{-- <span class="flaticon-clock"></span> --}}
            </div>
            <div class="caption">
              <p>Cyber Security</p>
              {{-- <p>Approvals</p> --}}
            </div>
          </div>

          <div  class="single-caption">
            <div class="caption-icon">
              {{-- <span class="flaticon-clock"></span> --}}
            </div>
            <div class="caption">
              <p>API Integration</p>
              {{-- <p>Approvals</p> --}}
            </div>
          </div>

          <div  class="single-caption">
            <div class="caption-icon">
              {{-- <span class="flaticon-clock"></span> --}}
            </div>
            <div class="caption">
              <p>Data access service</p>
              {{-- <p>Approvals</p> --}}
            </div>
          </div>

          <div  class="single-caption">
            <div class="caption-icon">
              {{-- <span class="flaticon-clock"></span> --}}
            </div>
            <div class="caption">
              <p>Cloud computing</p>
              {{-- <p>Approvals</p> --}}
            </div>
          </div>
          {{-- <div class="single-caption">
            <div class="caption-icon">
              <span class="flaticon-like"></span>
            </div>
            <div class="caption">
              <p>Quick & Easy Loan</p>
              <p>Approvals</p>
            </div>
          </div>

          <div class="single-caption">
            <div class="caption-icon">
              <span class="flaticon-money"></span>
            </div>
            <div class="caption">
              <p>Quick & Easy Loan</p>
              <p>Approvals</p>
            </div>
          </div> --}}
        </div>
      </div>

    </div>

    @foreach ($aboutOurCompanies as $key => $about)



    <div class="about-low-area section-padding2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about-caption mb-50">

              <div class="section-tittle mb-35">
                <span>About Our Company</span>
                {{-- <h2> Contexte </h2> --}}
              </div>

                {!! $about->description ?? '' !!}


              {{-- <a href="{{ route('company.apply') }}" class="btn">Apply for Loan</a> --}}
            </div>
          </div>

          <div class="col-lg-12 col-md-12">
            <div class="about-caption mb-50">

              <div class="section-tittle mb-35">
                <span>Mission</span>
                <h2> {!! $about->mission ?? '' !!} </h2>
              </div>



              {{-- <a href="{{ route('company.apply') }}" class="btn">Apply for Loan</a> --}}
            </div>
          </div>

        </div>
      </div>
    </div>

    @endforeach

    <div class="services-area pt-150 pb-150" data-background="{{ asset('assets_homepage/img/gallery/section_bg02.jpg')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-10">

            <div class="section-tittle text-center mb-80">
              {{-- <span>Services that we are providing</span>
              <h2>High Performance Services For All Industries.</h2> --}}
              <h2>Services that we are providing</h2>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1600267165517-13aa4805b387?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Card image cap">
                    </a>
                    <div class="card-body">
                              <!-- Button trigger modal -->
                            <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#exampleModalCenter">
                                Software as a service (SaaS)
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Software as a service (SaaS)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Our cloud-based customer relationship management software that integrates
                                        core functionalities of sales, marketing, service, and web engagement platforms into a single
                                         unified solution.Our agile CRM has  massive set of features including project management, contact
                                          management, scheduling, sales and marketing automation, customer service, email tracking, landing
                                          pages, and social media marketing to name a few.With Agile CRM, users have a unified platform that
                                           puts all the information as well as people on a single page, streamlining their tasks, enhances
                                           communication and collaboration, and greatly improves productivity and output both at individual
                                           and collective levels.
                                    </div>
                                    {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> --}}
                                </div>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal2">
                        <img class="card-img-top" src="https://images.pexels.com/photos/60504/security-protection-anti-virus-software-60504.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Card image cap">
                    </a>
                    <div class="card-body">
                              <!-- Button trigger modal -->
                            <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal2">
                                Cyber Security
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="modal2"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Cyber Security</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Evaluating a business from the outside to pinpoint security vulnerabilities is a key element to any
                                         comprehensive security strategy. Weza provides the platform to speed and streamline the data
                                         analytics process for external threat detection
                                         <br>
                                         <br>
                                        Dadashi also provides the engine for threat detection systems to help organizations
                                         effectively identify, understand and take action against adversaries. Weza will
                                         centrally manage infrastructure to gain greater visibility into the ecosystem and
                                          reduce attack vectors and reduce risk. After going through the breach defense framework,
                                           our cyber security analysts will track and record changes, ensure groups and access
                                            rights are managed to make incident investigation more meaningful, and reduce false positives.
                                    </div>
                                    {{-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> --}}
                                </div>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal3">
                        <img style="height: 190px" class="card-img-top" src="https://cdn.pixabay.com/photo/2018/05/14/16/54/cyber-3400789_960_720.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body">
                              <!-- Button trigger modal -->
                            <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal3">
                                API Integration
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="modal3"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">API Integration</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Dadashi company takes pride in being one of the top providers of smart API integration solutions and services. If you’re looking for a company that can assist you with third-party API integration, custom application development, web or software development, web applications maintenance, software testing, and anything that has to deal with software systems, then look no further. We have a team of dedicated experts with experience in handling software development and maintenance, custom CRM, including third-party API integration for businesses and organizations.
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal4">
                        <img class="card-img-top" src="https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Card image cap">
                     </a>
                    <div class="card-body">
                              <!-- Button trigger modal -->
                            <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal4">
                                Data access service
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="modal4"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Data access service</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Our proven application framework, centralised business rules, rich class libraries, data-aware controls and a highly tuned studio mean less new code, higher reliability and more business software faster. Dadashi developers are highly productive. Their skills are applied to programming business requirements in a mature framework, not writing and rewriting low-level application controls and components.
                                        <br> <br>
                                        Building web, mobile and Windows business software on one framework-based platform – Dadashi – reduces complexity, simplifies maintenance and delivers life-cycle efficiencies and cost savings
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal5">
                        <img class="card-img-top" src="https://images.pexels.com/photos/1181354/pexels-photo-1181354.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Card image cap">
                    </a>
                    <div class="card-body">
                              <!-- Button trigger modal -->
                            <a href="#" style="color: black !important" type="button" class="" data-toggle="modal" data-target="#modal5">
                                Cloud computing
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="modal5"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Cloud computing</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        Dadashi Technologies Cloud Storage Services provide Storage-as-a-Service that’s directly connected to multiple clouds for disaster recovery, analytics, test/dev and other use cases. Cloud Storage Services free IT teams from system management while delivering enterprise-grade data security, capacity, replication, performance and availability in the public cloud. With this Dadashi Technologies offering, enterprises can easily leverage their preferred clouds and switch easily between them at any time based on the needs of applications. Cloud storage services help to avoid vendor lock-in as data is independent of the cloud.
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </div>

    {{-- <div class="application-area pt-150 pb-140" data-background="{{ asset('assets_homepage/img/gallery/section_bg03.jpg')}}">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-10">

            <div class="section-tittle section-tittle2 text-center mb-45">
              <span>Apply in Three Easy Steps</span>
              <h2>Easy Application Process For Any Types of Loan</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9 col-xl-8">

            <form action="#" class="search-box">
              <div class="select-form">
                <div class="select-itms">
                  <select name="select" id="select1">
                    <option value="">Select Amount</option>
                    <option value="">$120</option>
                    <option value="">$700</option>
                    <option value="">$750</option>
                    <option value="">$250</option>
                  </select>
                </div>
              </div>
              <div class="select-form">
                <div class="select-itms">
                  <select name="select" id="select1">
                    <option value="">Duration Month</option>
                    <option value="">7 Days</option>
                    <option value="">10 Days</option>
                    <option value="">14 Days Days</option>
                    <option value="">20 Days</option>
                  </select>
                </div>
              </div>
              <div class="input-form">
                <input type="text" placeholder="Return Amount">
              </div>
              <div class="search-form">
                <a href="{{ route('company.services') }}">Apply for Loan</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}


    {{-- <div class="team-area section-padding30">
      <div class="container">
        <div class="row justify-content-center">
          <div class="cl-xl-7 col-lg-8 col-md-10">

            <div class="section-tittle text-center mb-70">
              <span>Team Mambers</span>
              <h2>Take a look to our professional team members.</h2>
            </div>
          </div>
        </div>
        <div class="row">

            @foreach ($teams as $key => $team)


          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="{{ asset($team->file )}}" alt="">
                <img style="width:300px; height:300px" src="{{ asset($team->file ? $team->file: 'http://placehold.it/400x400') }}" alt="">

                <div class="team-social">
                  <li><a href="https://www.facebook.com/{{ $team->facebook ?? '' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/{{ $team->twitter ?? '' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://instagram.com/ {{ $team->instagram ?? '' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="{{ $team->website ?? '' }}"><i class="fas fa-globe" target="_blank"></i></a></li>
                </div>
              </div>
              <div class="team-caption">
                <h3><a>{{ $team->full_name ?? '' }}</a></h3>
                <p>{{ $team->professionalism ?? '' }}r</p>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </div> --}}
{{--
    @if ($testimonies == '')

    @else
    <div class="testimonial-area t-bg testimonial-padding">
        <div class="container ">
          <div class="row d-flex justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-9">
              <div class="h1-testimonial-active">

                  @foreach ($testimonies as $key => $tests)


                <div class="single-testimonial text-center">

                  <div class="testimonial-caption ">
                    <div class="testimonial-top-cap">
                      <img src="{{ asset('assets_homepage/img/gallery/testimonial.png')}}" alt="">
                      <p>{{ $tests->testimonial_caption ?? '' }}</p>
                    </div>

                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                      <div class="founder-img">
                          @if($tests->file)
                                  <img src="{{ asset($tests->file) }}">
                          @endif
                      </div>
                      <div class="founder-text">
                        <span>{{ $tests->name ?? '' }}</span>
                        <p> {{ $tests->professionalism ?? '' }}</p>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif --}}



    {{-- <div class="home-blog-area section-padding30">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-10">

            <div class="section-tittle text-center mb-70">
              <span>News form our latest blog</span>
              <h2>News from around the world selected by us.</h2>
            </div>
          </div>
        </div>
        <div class="row">

            @foreach ($blogs as $key => $blog)


          <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="single-blogs mb-30">
              <div class="blog-images">
                    <img src="{{ asset($blog->file)}}" alt="">
              </div>
              <div class="blog-captions">

                  @if ($blog->created_at)
                     <p>Posted {{ $blog->created_at->diffForHumans() ?? '' }}</p>
                  @endif

                <h2 style="text-transform: capitalize"><a>{{ $blog->title ?? '' }}</a></h2>

                <p>{{ $blog->description ?? '' }} </p>
              </div>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </div> --}}

  </main>


@endsection
