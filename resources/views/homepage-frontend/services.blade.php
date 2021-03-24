@extends('layouts.home-page')
@section('content')
<main>

    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap text-center pt-50">
              <h2>Services</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="services-area section-padding30">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-10">

            <div class="section-tittle text-center mb-80">
              <span>Services that we are providing</span>
              <h2>High Performance Services For All Industries.</h2>
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

  </main>
@endsection
