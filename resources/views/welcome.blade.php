@extends('layouts.landing')

@section('title', 'Derrique homes and Travels')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero pt-0 mt-0">
    <div class="container-fluid position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-sm-12 col-md-6 order-2 order-md-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2><span>Derrique Homes and Travels</span></h2>
                <p>Discover the freedom of seamless travel. Choose from our premium fleet and drive your dreams today.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started">Get Started</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 order-1 order-md-2">
                <img src="{{ asset('asset1/img/design3.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>

    </div>
</section>
<!-- End Hero Section -->

<main class="main" id="main">

    <!--how we work-->
    <div class="container features py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">How We Work</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-sm-3">
            <div class="feature col feature-item">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3 mt-3">
                    <img src="{{ asset('asset1/img/choose.png')}}">
                    <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg> -->
                </div>
                <h3 class="fs-2 border-bottom">Choose Your Car</h3>
                <p>Significantly enhance your Travel experience by choosing from our
                    huge collection of well maintained vehicles. From offroad and rough terrains, to city driving we got you.
                </p>

            </div>
            <div class="feature col feature-item" style="background-color: #48bbdb; border-radius: 25px; padding-bottom: 20px;">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3 mt-3">
                    <img src="{{ asset('asset1/img/booking.png')}}">
                    <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg> -->
                </div>
                <h3 class="fs-2 text-body-emphasis">Book It</h3>
                <p>Once you have set your mind on your choice, provide us with your personal documents to complete your booking process.
                    After that you can rest assured that your car will be ready and waiting for you.
                </p>

            </div>
            <div class="feature col feature-item">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3  mt-3">
                    <img src="{{ asset('asset1/img/drive.png')}}">
                    <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg> -->
                </div>
                <h3 class="fs-2 border-bottom">Drive The Dream</h3>
                <p>Before you drive off, inspect the car to ensure it meets your expectations and familiarize yourself with the controls. Once you're ready, buckle up, adjust your mirrors, and start your adventure with confidence.</p>

            </div>
        </div>
    </div>



    <!-- =======Cars Portfolio Section ======= -->
    <section id="cars" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-start pb-2 border-bottom">Our Cars Catalogue</h2>
                <p>Take your time to compare different models and select the perfect car that matches your style and requirements. </p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <!-- <li data-filter="*" class="filter-active">All</li> -->
                        <!-- <li data-filter=".filter-offroad">offroad</li> -->
                        <li><a href="cars.html">View All</a></li>


                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('asset1/img/portfolio/VDYE0947.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('asset1/img/portfolio/VDYE0947.JPG')}}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Landcruiser V8</a></h4>
                                <p>Automatic</p>
                                <h6>Ksh 22,000/day</h6>
                                <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="{{ asset('asset1/img/portfolio/VDYE0947.jpg')}}">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('asset1/img/portfolio/ToyotaPrado.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('asset1/img/portfolio/ToyotaPrado.JPG')}}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Landcruiser Prado</a></h4>
                                <p>Automatic</p>
                                <h6>Ksh 15,000/day</h6>
                                <button class="btn-order" data-title="Toyota Prado" data-description="Toyota Prado" data-image="{{ asset('asset1/img/portfolio/ToyotaPrado.jpg')}}">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('asset1/img/portfolio/ToyotaPrado1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('asset1/img/portfolio/ToyotaPrado1.JPG')}}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Landcruiser Prado</a></h4>
                                <p>Automatic</p>
                                <h6>Ksh 15,000/day</h6>
                                <button class="btn-order" data-title="Toyota Prado" data-description="Toyota Prado" data-image="{{ asset('asset1/img/portfolio/ToyotaPrado1.jpg')}}">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('asset1/img/portfolio/MazdaDemio.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('asset1/img/portfolio/MazdaDemio.JPG')}}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Mazda Demio</a></h4>
                                <p>Automatic</p>
                                <h6>Ksh 3000/day</h6>
                                <button class="btn-order" data-title="Mazda Demio" data-description="Mazda Demio" data-image="{{ asset('asset1/img/portfolio/MazdaDemio.jpg')}}">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="cars/toyotaharrier/3.JPG" data-gallery="portfolio-gallery-small" class="glightbox"><img src="cars/toyotaharrier/3.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Nissan Note</a></h4>
                                <p>Automatic</p>
                                <h6>Ksh 3,500/day</h6>
                                <button class="btn-order" data-title="Nissan Note" data-description="Nissan Note" data-image="cars/toyotaharrier/3.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->



    <!-- =======Homes Portfolio Section ======= -->
    <section id="cars" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-start pb-2 border-bottom">Homes Catalogue</h2>
                <!-- <p>Take your time to compare different models and select the perfect car that matches your style and requirements. </p> -->
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <!-- <li data-filter="*" class="filter-active">All</li> -->
                        <!-- <li data-filter=".filter-offroad">offroad</li> -->
                        <li><a href="{{ route('homes') }}">View All</a></li>


                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="homes/5bdrms/12.JPG" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="homes/5bdrms/12.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">5 Bedroom</a></h4>
                                <p>Lanet, Nakuru</p>
                                <h6>Ksh 17,000/day</h6>
                                <button class="btn-order" data-title="5bdrms" data-description="5 Bedrooms Naka" data-image="homes/5bdrms/12.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="homes/sunnyside/2.JPG" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="homes/sunnyside/2.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">4 Bedrooms</a></h4>
                                <p>Lanet, Nakuru</p>
                                <h6>Ksh 15,000/day</h6>
                                <button class="btn-order" data-title="4bdrms" data-description="4 Bedroom Lanet" data-image="homes/sunnyside/2.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="homes/2bdyellow/6.JPG" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="homes/2bdyellow/6.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">2 Bedroom</a></h4>
                                <p>Naka, Nakuru</p>
                                <h6>Ksh 5,500/day</h6>
                                <button class="btn-order" data-title="2 Bedroom" data-description="2 Bedroom Naka" data-image="homes/2bdyellow/6.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="homes/1bd/4.JPG" data-gallery="portfolio-gallery-small" class="glightbox"><img src="homes/1bd/4.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">1 Bedroom</a></h4>
                                <p>Nakuru Town</p>
                                <h6>Ksh 3000/day</h6>
                                <button class="btn-order" data-title="1 Bedroom" data-description="1 Bedroom" data-image="homes/1bd/4.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="homes/studiowhite/1.JPG" data-gallery="portfolio-gallery-small" class="glightbox"><img src="homes/studiowhite/1.JPG" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">Studio Apartment</a></h4>
                                <p>Nakuru Town</p>
                                <h6>Ksh 2500/day</h6>
                                <button class="btn-order" data-title="Studio" data-description="White Studio" data-image="homes/studiowhite/1.JPG">Book Now</button>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="pb-2 border-bottom text-start">About Us</h2>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <img src="assets/img/about1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    <p>Our car and Airbnb hire service is dedicated to providing our customers with an exceptional experience from start to finish. With years of industry expertise, we have curated a fleet of well-maintained vehicles and a network of top-rated Airbnb properties to ensure your travels are seamless and enjoyable.</p>
                    <p>At the heart of our business is a commitment to quality. We meticulously inspect each car and Airbnb listing to uphold the highest standards, so you can have peace of mind knowing you're getting a reliable and comfortable experience</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Our team of knowledgeable professionals is here to guide you every step of the way, from selecting the perfect car or Airbnb to providing local recommendations to make the most of your trip.
                        </p>

                        <p>
                            Whether you're planning a road trip, a city getaway, or anything in between, our car and Airbnb hire service is the trusted choice for discerning travelers. Experience the difference that our dedication to excellence can make in your next adventure.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/SFKF2583.JPG" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-6">
                    <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong> + Happy Clients</strong></p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong> + Cars</strong> ready</p>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong> + Hours Of Support</strong></p>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </div>
    </section><!-- End Stats Counter Section -->


    <!-- ======= Our Services Section ======= -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-start pb-2 border-bottom">Testimonials</h2>
                <p>Listen to what our previous clients have to say about us.</p>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-start pb-2 border-bottom">Contact</h2>
                <p>For questions, assistance, complains and/or feedback feel free to get in touch with us.</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Teejay's Arcade, Along Oginga Odinga Avenue
                                    Nakuru
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>derriquehomesandtravel@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+254 790 179 020</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 8AM - 6PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@section('content')