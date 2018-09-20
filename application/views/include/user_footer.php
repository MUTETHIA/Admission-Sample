<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Designed By</b> MUTETHIA ISAIAH
        </div>
        <strong>Copyright &copy;  MMUST ONLINE COURSE APPLICATION SYSTEM 2017  .</strong> All rights reserved.
      </footer>    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>


    <script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>public/assets/swal2/sweetalert2.min.js"></script>
     <script src="<?php echo base_url(); ?>public/js/applicant.js"> </script>
     <script src="<?php echo base_url(); ?>public/js/check_loader.js"></script>
   <script>
   $('document').ready(function() {
    $('#level').change(function(){
        var level_id = $(this).val();
        $("#programme > option").remove();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users/populate_programme');  ?>",
            data: "cid=" + level_id,
            success:function(opt){
                $('#programme').html(opt);

            }
        });
    });


 $('#programme').change(function(){
        var course_req = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users/populate_coursereg');  ?>",
            data: "prog=" + course_req,
            success:function(data){
                //$('#req').val(data);
                $('#requrement').show();
                 $('#requrement').html(opt);


            }
        });
    });


});
   </script>

    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>public/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script>
  $(function () {
     //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'

    })

  })
</script>
      <script  src="<?php echo base_url(); ?>public/js/jquery.validate.js"></script>
        <script  src="<?php echo base_url(); ?>public/js/additional-methods.js"></script>
    <script src="<?php echo base_url(); ?>public/js/validator.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>public/assets/plugins/ckeditor/ckeditor.js"></script>

      <script src="<?php echo base_url(); ?>public/assets/js/app.min.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/js/tools.js"></script>

    <script src="<?php echo base_url(); ?>public/assets/esystem/js/system.js"></script>

    <script src="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/managed-datatables.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

 <script src="../assets/charts/modules/exporting.js" type="text/javascript"></script>

              <script>
                 $(document).ready(function () {
                   $('.dataTable .dataTables table').dataTable();
                    $('.dataTables, .dataTable').dataTable();
                 });


              </script>


<script src="<?php echo base_url(); ?>public/assets/esystem/js/jquery.li-scroller.1.0.js" type="text/javascript"></script>

<script type="text/javascript">
 $(document).ready(function(){
  var slider_content = '';

  //$('.elibrary_editor').wysihtml5();

   CKEDITOR.replace('elibrary_editor');

 });
 </script>

 <script>
    var timer = 0;
    function set_interval() {
        timer = setInterval("auto_logout()", 300000);
        // the figure '10000' above indicates how many milliseconds the timer be set to.
        // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
        // 1min 1x60=60000
        // So set it to 300000
    }
    function reset_interval() {
        if (timer != 0) {
            clearInterval(timer);
            timer = 0;
            timer = setInterval("auto_logout()", 300000);
        }
    }
    function auto_logout() {

        window.location ="<?php echo site_url('Users/logout'); ?>";
    }


</script>
    
  </body>
</html>