 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="container">
         <div class="row gy-4">
             <div class="col-lg-5 col-md-12 footer-info">
                 <a href="index.html" class="logo d-flex align-items-center">
                     <span>DH&T</span>
                 </a>
                 <p> Your home of comfort and luxury. </p>
                 <div class="social-links d-flex mt-4">
                     <a href="https://www.tiktok.com/@derriquehomesandtravels?is_from_webapp=1&sender_device=pc" class="twitter"><i class="bi bi-tiktok"></i></a>
                     <a href="https://www.facebook.com/profile.php?id=100086576053252" class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="https://www.instagram.com/nakuruairbnbandcarhire?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram"><i class="bi bi-instagram"></i></a>
                     <a href="https://api.whatsapp.com/send?phone=25490179020" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                 </div>
             </div>

             <div class="col-lg-2 col-6 footer-links">
                 <h4>Useful Links</h4>
                 <ul>
                     <li><a href="#hero">Home</a></li>
                     <li><a href="cars.html">Cars</a></li>
                     <li><a href="homes.html">Homes</a></li>
                     <li><a href="#about">About us</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#contact">Contact Us</a></li>
                 </ul>
             </div>

             <div class="col-lg-2 col-6 footer-links">
                 <ul>
             </div>

             <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                 <h4>Contact Us</h4>
                 <p>
                     Teejay's Arcade, <br> Along Oginga Odinga Avenue <br>
                     Nakuru<br>
                     Kenya <br><br>
                     <strong>Phone:</strong> +254 790 179 020<br>
                     <strong>Email:</strong> derriquehomesandtravel@gmail.com<br>
                 </p>

             </div>

         </div>
     </div>

     <div class="container mt-4">
         <div class="copyright">
             &copy; Copyright <strong><span>Derrique H & T</span></strong>. All Rights Reserved
         </div>

     </div>

 </footer><!-- End Footer -->
 <!-- End Footer -->

 <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <div id="preloader"></div>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const whatsappBtns = document.querySelectorAll('.btn-order');

         whatsappBtns.forEach(function(btn) {
             btn.addEventListener('click', function() {
                 const phoneNumber = '254790179020';
                 const title = encodeURIComponent(btn.getAttribute('data-title'));
                 const description = encodeURIComponent(btn.getAttribute('data-description'));
                 const image = encodeURIComponent(btn.getAttribute('data-image'));
                 const message = `I want to book ${title}%0A${description}%0A${image}`;

                 const whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${message}`;
                 window.open(whatsappUrl, '_blank');
             });
         });
     });
 </script>

 <!-- Vendor JS Files -->
 <script src="{{ asset('asset1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('asset1/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('asset1/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('asset1/vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ asset('asset1/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('asset1/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('asset1/vendor/php-email-form/validate.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('asset1/js/main.js') }}"></script>

 </body>

 </html>