        <!-- Footer -->
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
            </div>
        </div>
        </footer>
        <!-- End of Footer -->

    </div>
</div>

<a href="javascript:void(0);" id="scroll" title="Back To Top" style="background:url(<?php echo base_url('assets/images/top-button.png') ?>);background-position: center center;">TOP<span></span></a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!------- BACK TO TOP ------->
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
    });
    </script>

</body>

</html>