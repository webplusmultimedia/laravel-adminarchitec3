@extends('layouts.app')
@section('title', $article->tag_title)
@section('description', $article->tag_meta_description)

@section('lcss')
    <link rel="stylesheet" type="text/css" href="{{ mix("assets/css/revolution.css")}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix("assets/css/zabuto_calendar.min.css")}}"> --}}
@endsection

@section('ljs')
    {{--<script type="text/javascript" src="{{ asset('/assets/js/zabuto_calendar.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/revolution.js') }}"></script>
@endsection
@section('content')
    @if($article->getMedia('bandeau')->count())
        <div class="hero-slider" style="min-height: 100px">
            <div class="rev-slider">
                <ul>
                    @foreach($article->getMedia('bandeau') as $media)
                        <li>
                            <img src="{{ url(Croppa::url($media->getFullUrl(),1920,710)) }}" alt="{{ $media->getCustomProperty('alt') }}">
                            <div class="tp-caption"
                                 data-x="left" data-hoffset="0"
                                 data-y="top" data-voffset="150"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                                 data-start="500"><h4 class="opacity-90 {{ $loop->odd?'text-color-white':'' }}">{{ $media->getCustomProperty('titre') }}</h4>
                            </div>
                            <div class="tp-caption"
                                 data-x="left" data-hoffset="0"
                                 data-y="top" data-voffset="210"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                                 data-start="600"><h1 class=" {{ $loop->odd?'text-color-white':'' }}">{!! nl2br($media->getCustomProperty('description'))  !!} </h1>
                            </div>
                            <div class="tp-caption"
                                 data-x="left" data-hoffset="0"
                                 data-y="top" data-voffset="410"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                                 data-start="700"><a href="#five-steps-to-success" class="link underline scroll">En savoir plus</a>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <!--/.hero-slider-->
    @endif

    <div class="page-content">
        <div class="block" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box">
                            <i class="icon_comment_alt"></i>
                            <a href=""><h3>My Mentoring</h3></a>
                            <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                            <a href=""><i class="arrow_right"></i></a>
                        </div>
                        <!--/ .feature-box-->
                    </div>
                    <!--/ .col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box">
                            <i class="icon_id-2"></i>
                            <a href=""><h3>Successful Stories</h3></a>
                            <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                            <a href=""><i class="arrow_right"></i></a>
                        </div>
                        <!--/ .feature-box-->
                    </div>
                    <!--/ .col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box">
                            <i class="icon_briefcase"></i>
                            <a href=""><h3>For Companies</h3></a>
                            <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                            <a href=""><i class="arrow_right"></i></a>
                        </div>
                        <!--/ .feature-box-->
                    </div>
                    <!--/ .col-md-3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box">
                            <i class="icon_box-checked"></i>
                            <a href=""><h3>Kick Up Your Career</h3></a>
                            <p>Fusce facilisis nec ante et accumsan. Ut malesuada tristique sagittis</p>
                            <a href=""><i class="arrow_right"></i></a>
                        </div>
                        <!--/ .feature-box-->
                    </div>
                    <!--/ .col-md-3-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
            <div class="bg bg-color-neutral opacity-50"></div><!--/ .bg-->
        </div>
        <!--/ .block-->

        <div class="block">
            <div class="container">
                <blockquote class="center">
                    <p>Maecenas pharetra imperdiet finibus. Aenean tortor lectus, facilisis non pellentesque non</p>
                    <footer>Karine UDINO</footer>
                </blockquote>
                <!--/ blockquote-->
            </div>
            <!--/ .container-->
            <div class="bg bg-color-neutral opacity-20"></div><!--/ .bg-->
        </div>
        <!--/ .block-->

        <div class="block" id="about-me">
            <div class="container">
                <h2>About Me</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="center">
                            <img src="{{ asset('assets/img/kk.jpg') }}" class="circle" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3 class="no-bottom-margin"><strong>Jane Doe</strong></h3>
                        <h5>A personal mentor</h5>
                        <br>
                        <p>
                            Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et,
                            pellentesque diam. Nullam non dolor eu ligula ultrices pellentesque placerat imperdiet metus.
                            Etiam lobortis bibendum egestas. In quis massa a felis molestie consequat rhoncus vitae nisl.
                            In pharetra posuere dictum. In eget metus eu leo rutrum venenatis vitae sit amet elit.
                            Duis luctus enim enim.
                        </p>
                        <div class="numbers">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="number">
                                        <figure>68</figure>
                                        <aside>Persons Mentored</aside>
                                    </div>
                                    <!--/ .number-->
                                </div>
                                <!--/ .col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="number">
                                        <figure>45</figure>
                                        <aside>Workshops Attended</aside>
                                    </div>
                                    <!--/ .number-->
                                </div>
                                <!--/ .col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="number">
                                        <figure>12</figure>
                                        <aside>Coaching Certificates</aside>
                                    </div>
                                    <!--/ .number-->
                                </div>
                                <!--/ .col-md-4-->
                            </div>
                            <!--/ .row-->
                        </div>
                        <!--/ .numbers-->
                        <hr>
                        <a href="" class="link arrow">More about me</a>
                    </div>
                    <!--/ .col-sm-6-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
        </div>
        <!--/ .block-->

        <div class="space"></div>

        <div class="container">
            <div class="block center">
                <h2 class="text-color-white half-bottom-margin"><strong>Your Daily Motivation Quote</strong></h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        <form id="form-daily-motivation">
                            <div class="form-group input-group">
                                <div class="form-status text-color-white"></div>
                                <input type="text" class="form-control" name="email" placeholder="Enter your e-mail">
                                <span class="input-group-btn"><button class="btn btn-white" type="submit"><i class="arrow_right"></i></button></span>
                            </div>
                        </form>
                        <!--/ form-->
                    </div>
                    <!--/ .col-md-6-->
                </div>
                <!--/ .row-->
                <div class="bg">
                    <img src="assets/img/bg.jpg" alt="">
                </div><!--/ .bg-->
            </div>
            <!--/ .block-->
        </div>
        <!--/ .container-->

        <div class="space"></div>

        <div class="block" id="five-steps-to-success">
            <div class="container">
                <h2 class="center">Five Steps to Your Success</h2>
                <div class="steps">
                    <div class="step width-20">
                        <figure>
                            <aside>1.</aside>
                            <div class="bar height-20">
                                <div class="arrow"></div>
                            </div>
                        </figure>
                        <h3>Contact Me</h3>
                        <hr>
                        <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                    </div>
                    <!--/ .step-->
                    <div class="step width-20">
                        <figure>
                            <aside>2.</aside>
                            <div class="bar height-40">
                                <div class="arrow"></div>
                            </div>
                        </figure>
                        <h3>Make an Appointment</h3>
                        <hr>
                        <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                    </div>
                    <!--/ .step-->
                    <div class="step width-20">
                        <figure>
                            <aside>3.</aside>
                            <div class="bar height-60">
                                <div class="arrow"></div>
                            </div>
                        </figure>
                        <h3>I will Analyze Your Profile</h3>
                        <hr>
                        <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                    </div>
                    <!--/ .step-->
                    <div class="step width-20">
                        <figure>
                            <aside>4.</aside>
                            <div class="bar height-80">
                                <div class="arrow"></div>
                            </div>
                        </figure>
                        <h3>Apply Changes</h3>
                        <hr>
                        <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                    </div>
                    <!--/ .step-->
                    <div class="step width-20">
                        <figure>
                            <aside>5.</aside>
                            <div class="bar height-100">
                                <div class="arrow"></div>
                            </div>
                        </figure>
                        <h3>Apply Changes</h3>
                        <hr>
                        <p>Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et</p>
                    </div>
                    <!--/ .step-->
                </div>
                <!--/ .steps-->
                <div class="center">
                    <a href="meet-me.html" class="btn btn-default btn-big">Contact Me!</a>
                </div>
            </div>
            <!--/ .container-->
            <div class="bg bg-color-neutral opacity-50"></div><!--/ .bg-->
        </div>
        <!--/ .block-->

        <div class="block">
            <div class="container">
                <h2 class="center">Do You Want a Successful Life?</h2>
                <hr>
                <h3 class="center">Enter your name and e-mail and I will tell you for free!</h3>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                        <form id="form-subscribe">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control framed" id="name" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <!--/ .col-md-5-->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="email" class="form-control framed" id="email" name="email" placeholder="Your E-mail">
                                    </div>
                                </div>
                                <!--/ .col-md-5-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary width-100">Send Me</button>
                                    </div>
                                </div>
                                <!--/ .col-md-2-->
                                <div class="form-status"></div>
                            </div>
                            <!--/ .row-->
                        </form>
                        <!--/ form-->
                    </div>
                    <!--/ .col-md-10-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
            <div class="bg bg-color-neutral opacity-20"></div><!--/ .bg-->
        </div>
        <!--/ .block-->


        <hr>

        <div class="block" id="successful-stories">
            <div class="container">
                <h2>Successful Stories</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="story">
                            <div class="image"><img src="assets/img/person-01.jpg" alt=""></div>
                            <blockquote>
                                <p>Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida
                                    felis nec, tincidunt ligula. Sed dapibus mauris ullamcorper.</p>
                                <footer>Jane Doe</footer>
                            </blockquote>
                            <!--/ blockquote-->
                        </div>
                        <!--/ .story-->
                        <div class="story">
                            <div class="image"><img src="assets/img/person-04.jpg" alt=""></div>
                            <blockquote>
                                <p>Etiam pulvinar, urna a iaculis sagittis, purus turpis ornare justo, porta volutpat turpis
                                    mi et sapien. Nullam sodales lorem sed pulvinar mattis. Cras gravida, libero in commodo
                                    vehicula, mauris mi finibus leo, quis tincidunt turpis augue vitae lorem.</p>
                                <footer>Nellie Gibson</footer>
                            </blockquote>
                            <!--/ blockquote-->
                        </div>
                        <!--/ .story-->
                    </div>
                    <!--/ .col-md-6-->
                    <div class="col-md-6">
                        <div class="story">
                            <div class="image"><img src="assets/img/person-02.jpg" alt=""></div>
                            <blockquote>
                                <p>Integer efficitur dictum mi ac lobortis. Sed finibus, diam id mollis auctor, odio ligula
                                    sagittis nisl, vitae volutpat metus nisi vitae risus. Donec tempus augue sit amet
                                    malesuada pretium. </p>
                                <p>Etiam pulvinar, urna a iaculis sagittis, purus turpis ornare justo, porta volutpat
                                    turpis mi et sapien. Nullam sodales lorem sed pulvinar mattis. Cras gravida.</p>
                                <footer>Catherine Brown</footer>
                            </blockquote>
                            <!--/ blockquote-->
                        </div>
                        <!--/ .story-->
                        <div class="story">
                            <div class="image"><img src="assets/img/person-03.jpg" alt=""></div>
                            <blockquote>
                                <p>Cras gravida, libero in commodo vehicula, mauris mi finibus leo, quis tincidunt turpis augue vitae lorem.</p>
                                <footer>Jack Hayes</footer>
                            </blockquote>
                            <!--/ blockquote-->
                        </div>
                        <!--/ .story-->
                    </div>
                    <!--/ .col-md-6-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
            <div class="bg"></div><!--/ .bg-->
        </div>
        <!--/ .block-->

        <div class="block" id="packages">
            <div class="container">
                <h2>Packages</h2>
                <div class="pricing">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="description">
                                <h3>Select Package</h3>
                                <ul>
                                    <li>Email Support</li>
                                    <li>Phone Support</li>
                                    <li>Monthly Access to Online Training</li>
                                    <li>Consultation Hours</li>
                                    <li>Profile Builder</li>
                                </ul>
                            </div>
                            <!--/ .price-box-->
                        </div>
                        <!--/ .col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box">
                                <h3 class="center">Silver</h3>
                                <ul>
                                    <li><i class="icon_check"></i></li>
                                    <li><i class="icon_check"></i></li>
                                    <li class="not-available"><i class="icon_close"></i></li>
                                    <li>Up to 15 Hours</li>
                                    <li class="not-available"><i class="icon_close"></i></li>
                                </ul>
                                <div class="price">$9.90</div>
                                <a href="" class="btn btn-default">Buy Now</a>
                            </div>
                            <!--/ .price-box-->
                            <aside class="note center">Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et,</aside>
                        </div>
                        <!--/ .col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box promoted">
                                <div class="best-value">Top!</div>
                                <h3 class="center">Gold</h3>
                                <ul>
                                    <li><i class="icon_check"></i></li>
                                    <li><i class="icon_check"></i></li>
                                    <li><i class="icon_check"></i></li>
                                    <li>Up to 3 Hours</li>
                                    <li class="not-available"><i class="icon_close"></i></li>
                                </ul>
                                <div class="price">$19.90</div>
                                <a href="" class="btn btn-primary btn-white">Buy Now</a>
                            </div>
                            <!--/ .price-box-->
                            <aside class="note center">Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et,</aside>
                        </div>
                        <!--/ .col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box">
                                <h3 class="center">Platinum</h3>
                                <ul>
                                    <li><i class="icon_check"></i></li>
                                    <li><i class="icon_check"></i></li>
                                    <li><i class="icon_check"></i></li>
                                    <li>Up to 45 Hours</li>
                                    <li><i class="icon_check"></i></li>
                                </ul>
                                <div class="price">$9.90</div>
                                <a href="" class="btn btn-default">Buy Now</a>
                            </div>
                            <!--/ .price-box-->
                            <aside class="note center">Sed iaculis dapibus tellus eget condimentum. Curabitur ut tellus congue, convallis tortor et,</aside>
                        </div>
                        <!--/ .col-md-3-->
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .pricing-->
            </div>
            <!--/ .container-->
            <div class="bg"></div><!--/ .bg-->
        </div>
        <!--/ .block-->

    </div>





@endsection
