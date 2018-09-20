<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Designed By</b> MUTETHIA ISAIAH
        </div>
        <strong>Copyright &copy;  MMUST ONLINE COURSE APPLICATION SYSTEM 2017  .</strong> All rights reserved.
      </footer>    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>


    <script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>public/ssets/swal2/sweetalert2.min.js"></script>
     <script src="<?php echo base_url(); ?>public/js/applicant.js"> </script>
     <script src="<?php echo base_url(); ?>public/js/check_loader.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/js/loader.js" type="text/javascript"></script>

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
<!--  <script>
 (function($) {
  "use strict";
Highcharts.chart('market2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'What influenced you to choose MMUST'
    },
    tooltip: {
        pointFormat: '{series.response}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.response}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Percentage',
        colorByPoint: true,
        data: [ <?php echo $chart_data; ?> ]
    }]
});
})(jQuery);
 </script>


 <script>
 (function($) {
  "use strict";
 Highcharts.chart('market1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Bar graph representation of what influenced to choose MMUST'
    },

    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Totals of Options'
        }
    },
    legend: {
        enabled: false
    },

    series: [{
        name: 'Totals',
        data: [
             <?php echo $chart_data1; ?>
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});



})(jQuery);
 </script>-->

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
        window.location = "../logout";
    }


</script>
    
  </body>
</html>