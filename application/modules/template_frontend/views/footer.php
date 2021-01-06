
    <div class="col-md-12 bg-white mt-5 p-3 shadow" style="border-radius: 15px 15px 0 0;">
        <div class="row col-md-10 mx-auto">
            <div class="col-md-3">
                <a href="<?= base_url()?>">
                    <img class="logo-footer" src="<?php echo base_url('assets/images/logo-footer.png') ?>">
<<<<<<< HEAD
                </a>
                <a href="<?= base_url()?>">
                    <img class="logo-footer-responsive" src="<?php echo base_url('assets/images/nav-logo.png') ?>">
                </a>
=======
                </a>    
                <a href="<?= base_url()?>">
                    <img class="logo-footer-responsive" src="<?php echo base_url('assets/images/nav-logo.png') ?>">
                </a>    
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
            </div>
            <div class="col-md-3">
                <div class="text-dark title-footer">Album / Inspirasi</div>
                <div class="text-pils">Interior Designer</div>
                <div class="text-pils">Kitchen Set</div>
                <div class="text-pils">Kontraktor Bangunan</div>
            </div>
            <div class="col-md-3">
                <div class="text-dark title-footer">Cari Penyedia Jasa</div>
                <div class="text-pils">Buat Permintaan Jasa</div>
                <div class="text-pils">Lihat Layanan</div>
            </div>
            <div class="col-md-3">
                <div class="text-dark title-footer">Menjadi Penyedia Jasa</div>
                <div class="text-pils">Cara Kerja</div>
                <div class="text-pils">Buat Profil Penjasa</div>
            </div>
        </div>
        <div class="row col-md-10 mx-auto">
            <div class="follow-us mx-auto text-dark">Follow Us</div>
            <div class="group-sosmed d-block">
                <img class="sosmed-footer" src="<?php echo base_url('assets/images/sosmed/g+.png') ?>">
<<<<<<< HEAD
                <img class="sosmed-footer" src="<?php echo base_url('assets/images/sosmed/Fb.png') ?>">
=======
                <img class="sosmed-footer" src="<?php echo base_url('assets/images/sosmed/FB.png') ?>">
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
                <img class="sosmed-footer" src="<?php echo base_url('assets/images/sosmed/Instagram.png') ?>">
            </div>
        </div>
    </div>
    <div class="row col-md-12 bg-warning text-dark p-2 mx-auto">
        <h6 class="mx-auto copyright">Copyright © 2020 | JAS<b>TUKANG</b></h6>
    </div>

<a href="javascript:void(0);" id="scroll" title="Back To Top" style="background:url(<?php echo base_url('assets/images/top-button.png') ?>);background-position: center center;">TOP<span></span></a>

</body>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script  src="<?= base_url('assets/js/navbar_frontend.js') ?>"></script>
<<<<<<< HEAD
    <script  src="<?= base_url('assets/js/jquery/jquery.js') ?>"></script>
=======
    <script  src="<?= base_url('assets/js/jquery/jquery.min.js') ?>"></script>
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
    <!-- search -->
    <script  src="<?= base_url('assets/js/search.js') ?>"></script>
    <!-- scroll smooth -->
    <!-- <script  src="assets/js/ScrollSmooth.js"></script> -->

<<<<<<< HEAD
    <!--- BACK TO TOP ------->
=======
    <!------- BACK TO TOP ------->
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
    <script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 100){
                $('#scroll').fadeIn();
            }else{
                $('#scroll').fadeOut();
            }
        });
        $('#scroll').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
<<<<<<< HEAD

        // Select Kategori

        $('#kategori').on('change',function(){
          var id = $(this).val();
          if(id){
            $.ajax({
              type : 'POST',
              url : 'beranda/get_sub_kat',
              data : 'id='+id,
              success:function(html) {
                $('#subKat').html(html);
              }
            });
          }else{
            $('#subKat').html('<option value="">Select Kategori First</option>');
          }
        });

        // Kecamatan & kelurahan
        $('#kec').on('change',function(){
          var id = $(this).val();
          if(id){
            $.ajax({
              type : 'POST',
              url : '<?php echo base_url() ?>/jasa/get_kelurahan',
              data : 'id='+id,
              success:function(html) {
                $('#kel').html(html);
              }
            });
          }else{
            $('#kel').html('<option value="">Select Kategori First</option>');
          }
        });

        // gallery photo added
        $(function(){
          var imagesPreview = function(input, placeToInsertImagePreview){
            if(input.files){
              var filesAmount = input.files.length;

              for(i=0; i<filesAmount;i++){
                var reader = new FileReader();
                reader.onload = function(event){
                  $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
              }
            }
          };
          $('#gallery-photo-add').on('change', function(){
            imagesPreview(this,'div.gallery');
          });
        });


    });
    </script>
    <!--- SUB Kategori -->
=======
    });
    </script>
    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
                document.getElementById("search").style.top = "8px";
            } else {
                document.getElementById("search").style.top = "20px";
            }
        }
    </script>
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
</html>
