   <!--::footer_part start::-->
   <footer class="footer_part">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-12">
                   <div class="copyright_text">
                       <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Aceh &copy;<script>
                               document.write(new Date().getFullYear());
                           </script> CODE NVL | Link Blogger <a href="https://pelajaransekolahpintar.blogspot.com/" target="_blank">nvl livewire</a>
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                       <p>
                           <a href="">Disclaimer</a>
                           <a href="">Privacy Policy</a>
                       </p>

                       <div class="social_icon">
                           <a href="#"><i class="ti-facebook"></i></a>
                           <a href="#"><i class="ti-twitter-alt"></i></a>
                           <a href="#"><i class="ti-instagram"></i></a>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </footer>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!--::footer_part end::-->
   <script src="<?= BASEURL .  'assets/js/jquery-1.12.1.min.js' ?>"></script>
   <!-- popper js -->

   <script src="<?= BASEURL .  'assets/js/popper.min.js' ?>"></script>
   <!-- bootstrap js -->

   <script src="<?= BASEURL .  'assets/js/bootstrap.min.js' ?>"></script>
   <!-- easing js -->

   <script src="<?= BASEURL .  'assets/js/jquery.magnific-popup.js' ?>"></script>
   <!-- swiper js -->

   <script src="<?= BASEURL .  'assets/js/swiper.min.js' ?>"></script>
   <!-- swiper js -->

   <script src="<?= BASEURL .  'assets/js/mixitup.min.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/price_rangs.js' ?>"></script>
   <!-- particles js -->

   <script src="<?= BASEURL .  'assets/js/owl.carousel.min.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/jquery.nice-select.min.js' ?>"></script>
   <!-- slick js -->

   <script src="<?= BASEURL .  'assets/js/slick.min.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/jquery.counterup.min.js' ?>"></script>

   <script src="<?= BASEURL .  'assets/js/waypoints.min.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/contact.js' ?>"></script>

   <script src="<?= BASEURL .  'assets/js/jquery.ajaxchimp.min.js' ?>"></script>


   <script src="<?= BASEURL .  'assets/js/jquery.form.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/jquery.validate.min.js' ?>"></script>
   <script src="<?= BASEURL .  'assets/js/mail-script.js' ?>"></script>
   <!-- custom js -->
   <script src="<?= BASEURL .  'assets/js/custom.js' ?>"></script>


   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
       //Cancel X modal
       window.addEventListener('hide-cancel-modal', event => {
           $("#modalForm").modal('hide');

       })

       //Tampilan modal
       window.addEventListener('showModalSuccess', event => {
           $("#modalForm").modal('hide');
           toastr.options.positionClass = 'toast-top-right';
           toastr.success(event.detail.message, 'Upload success!');
           $('#modalForm').on('hidden.bs.modal', function(e) {
               $(this)
                   .find("input,textarea,select")
                   .val('')
                   .end()
                   .find("input[type=checkbox], input[type=radio], input[type=file]")
                   .prop("checked", "")
                   .end();
           })
           swal("Upload Berhasil", "Silahkan tekan OK!", "success");

       })
   </script>

   </body>

   </html>