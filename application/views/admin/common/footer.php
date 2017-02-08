<!-- jQuery 2.2.0 -->
<script src="<?php echo site_url('assets/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<!-- Moment Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo site_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
<!-- Theme JS file -->
<script src="<?php echo site_url('assets/js/app.min.js'); ?>"></script>
<!-- TokenInput JS file -->
<script src="<?php echo site_url('assets/js/jquery.tokeninput.js'); ?>"></script>
<!-- Pretmode added JQUERY Validation File -->
<script src="<?php echo site_url('assets/js/jquery.validate.min.js'); ?>"></script>
<!-- Jquery Template JS -->
<script src="<?php echo site_url('assets/js/jquery.tmpl.min.js'); ?>"></script>
<!-- Select2 Plugin -->
<script src="<?php echo site_url('assets/js/select2.full.min.js'); ?>"></script>
 <!-- ColorPicker  -->
<script src="<?php echo site_url('assets/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- Pretmode Admin Custom file -->
<script src="<?php echo site_url('assets/js/bootstrap.colorpickersliders.js'); ?>"></script>
<!-- colorPicker -->
<script src="//cdnjs.cloudflare.com/ajax/libs/tinycolor/0.11.1/tinycolor.min.js"></script>
<!-- Daterange picker -->
<script src="<?php echo site_url('assets/js/daterangepicker.js'); ?>"></script>
<!-- Pretmode Admin Custom file -->
<script src="<?php echo site_url('assets/js/main.js'); ?>"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
      	
    $('input.themed').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

</script>
</body>
</html>