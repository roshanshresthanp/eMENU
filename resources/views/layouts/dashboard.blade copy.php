<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('admin/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('admin/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('admin/css/fullcalendar.css')}}">
  <link href="{{asset('admin/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('admin/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  
  <section id="container" class="">


    @include('inc.header')
    @include('inc.sidebar')
    @yield('content')
    
    <!--sidebar end-->

    <!--main content start-->
    
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{asset('admin/js/jquery.js')}}"></script>
  <script src="{{asset('admin/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
  <script type="{{asset('admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('admin/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('admin/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('admin/js/calendar-custom.js')}}"></script>
    <script src="{{asset('admin/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('admin/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('admin/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('admin/js/sparkline-chart.js')}}"></script>
    <script src="{{asset('admin/js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('admin/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/js/xcharts.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('admin/js/gdp-data.js')}}"></script>
    <script src="{{asset('admin/js/morris.min.js')}}"></script>
    <script src="{{asset('admin/js/sparklines.js')}}"></script>
    <script src="{{asset('admin/js/charts.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
