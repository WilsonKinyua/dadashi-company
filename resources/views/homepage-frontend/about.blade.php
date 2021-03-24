@extends('layouts.home-page')

@section('content')

<main>

    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap text-center pt-50">
              <h2>About us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    @foreach ($aboutOurCompanies as $key => $about)



    <div class="about-low-area section-padding2">
      <div class="container">
        {{-- <h2>ddddd</h2> --}}
        {{-- <div class="section-tittle mb-35">
            <span>About Our Company</span>
            <h2> {{ $about->title ?? '' }} </h2>
          </div> --}}
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about-caption mb-50">

              <div class="section-tittle mb-35">
                {{-- <span> Contexte </span> --}}
                <h2> {!! $about->description ?? '' !!} </h2>
              </div>

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

          {{-- <div class="col-lg-6 col-md-12">

            <div class="about-img ">
              <div class="about-back-img ">
                @if($about->file)
                    <img style="height: 500px; width:auto;"  src="{{ asset($about->file) }}">
                @endif
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>

    @endforeach



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
                <a href="{{ route('company.apply') }}">Apply for Loan</a>
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
              <span>Our Loan Section Team Mambers</span>
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


    {{-- <div class="testimonial-area t-bg testimonial-padding">
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
                                <img src="{{ asset($tests->file)}}" alt="">
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
    </div> --}}


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
                @if($blog->file)
                        <img src="{{ asset($blog->file)}}" alt="">
                @endif
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
