<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Vatara Taekwondo Association</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/homepage_assets/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/homepage_assets/assets/css/font-awesome.css">

    <link rel="stylesheet" href="{{ url('/') }}/homepage_assets/assets/css/templatemo-training-studio.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}/homepage_assets/index.html" class="logo">Vatara<em> Taekwondo </em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @auth('admin')
                                <li>
                                    <a
                                        href="{{ url('admin/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Admin Dashboard
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a
                                        href="{{ route('admin.login') }}"
                                        class="scroll-to-section"
                                    >
                                        Admin Login
                                    </a>
                                </li>
                                {{-- @if (Route::has('admin.register'))
                                <li>
                                    <a
                                        href="{{ route('admin.register') }}"
                                        class="scroll-to-section"
                                    >
                                        Admin Register
                                    </a>
                                </li>
                                @endif --}}
                            @endauth
                            @auth('student')
                                <li>
                                    <a
                                        href="{{ url('student/dashboard') }}"
                                        class="scroll-to-section"
                                    >
                                        Student Dashboard
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a
                                        href="{{ route('student.login') }}"
                                        class="scroll-to-section"
                                    >
                                        Student Login
                                    </a>
                                </li>
                            @endauth
                            @auth('trainer')
                                <li>
                                    <a
                                        href="{{ url('trainer/dashboard') }}"
                                        class="scroll-to-section"
                                    >
                                        Trainer Dashboard
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a
                                        href="{{ route('trainer.login') }}"
                                        class="scroll-to-section"
                                    >
                                        Trainer Login
                                    </a>
                                </li>
                            @endauth
                            <li class="scroll-to-section text_white"><a href="#top" class="active text-white">Home</a></li>
                            {{-- <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Classes</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="#schedule">Schedules</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                            <li class="main-button"><a href="#">Sign Up</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ url('/') }}/homepage_assets/assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>easy with our <em>Training</em></h2>
                {{-- <div class="main-button scroll-to-section">
                    <a href="#features">Become a member</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="{{ url('/') }}/homepage_assets/assets/images/line-dec.png" alt="waves">
                        {{-- <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ url('/') }}/homepage_assets/assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Basic Self-defence</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                {{-- <a href="#" class="text-button">Discover More</a> --}}
                            </div>
                        </li>


                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ url('/') }}/homepage_assets/assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Martial Art Training</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                {{-- <a href="#" class="text-button">Discover More</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="card mt-5">
                        <div class="card-header bg-secondary text-center">
                            <h2 class="font-bold text-white">Give us yout details</h2>
                        </div>
                        <div class="card-body mt-3">
                            <form action="{{route('send.request')}}" method="post">
                                 <!-- Name input -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>

                                <!-- Phone number input -->
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                                </div>

                                <!-- Email input -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>

                                <!-- Image upload -->
                                <div class="mb-3">
                                    <label>Image:</label>
                                    <input type="file"  name="image" id="image" onchange="document.getElementById('bah').src = window.URL.createObjectURL(this.files[0])" class="form-control">
                                    <img id="bah" class="img-fluid mt-1">
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn text-button">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        {{-- <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p> --}}
                        {{-- <div class="main-button scroll-to-section">
                            <a href="#our-classes">Become a member</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="{{ url('/') }}/homepage_assets/assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="{{ url('/') }}/homepage_assets/assets/images/tabs-first-icon.png" alt="">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="{{ url('/') }}/homepage_assets/assets/images/tabs-first-icon.png" alt="">Second Training Class</a></a></li>
                  <li><a href='#tabs-3'><img src="{{ url('/') }}/homepage_assets/assets/images/tabs-first-icon.png" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="{{ url('/') }}/homepage_assets/assets/images/tabs-first-icon.png" alt="">Fourth Training Class</a></a></li>
                  {{-- <div class="main-rounded-button"><a href="#">View All Schedules</a></div> --}}
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{ url('/') }}/homepage_assets/assets/images/training1.jpeg" alt="First Class">
                    <h4>First Training Class</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="{{ url('/') }}/homepage_assets/assets/images/training2.jpeg" alt="Second Training">
                    <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{ url('/') }}/homepage_assets/assets/images/training3.jpeg" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="{{ url('/') }}/homepage_assets/assets/images/training-image-04.jpg" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    {{-- <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="{{ url('/') }}/homepage_assets/assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src="{{ url('/') }}/homepage_assets/assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ url('/') }}/homepage_assets/assets/images/johura.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Chief Instructor</span>
                            <h4>Johura Akter</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/mithilamimi.3190"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ url('/') }}/homepage_assets/assets/images/secondtrainer.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Assistant Instructor</span>
                            <h4>Jannatul Ferdous Taspia</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/jannatulferdoustaspia10?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ url('/') }}/homepage_assets/assets/images/thirdtrainer.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Volunteer Instructor</span>
                            <h4>Ummay saima</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100075708900031&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    {{-- <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a><br>

                Distributed by <a rel="nofollow" href="https://themewagon.com" class="tm-text-link" target="_blank">ThemeWagon</a>

                </p>

                    <!-- You shall support us a little via PayPal to info@templatemo.com -->

                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{ url('/') }}/homepage_assets/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ url('/') }}/homepage_assets/assets/js/popper.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{ url('/') }}/homepage_assets/assets/js/scrollreveal.min.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/waypoints.min.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/imgfix.min.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/mixitup.js"></script>
    <script src="{{ url('/') }}/homepage_assets/assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="{{ url('/') }}/homepage_assets/assets/js/custom.js"></script>

  </body>
</html>
