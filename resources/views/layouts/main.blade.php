<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Магазинчик админ</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"
    href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake"
        src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
        height="60" width="60">
    </div>

    @include('main.includes.navbar')

    <!-- Main Sidebar Container -->
    @include('main.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('main.includes.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- bs-custom-file-input -->
  <script
    src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}">
  </script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
  </script>
  <!-- Select2 -->
  <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script
    src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
  </script>
  <!-- AdminLTE App -->
  <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();

      //Initialize Select2 Elements
      $('.select2').select2()
      $('.colors').select2()
      $('.category').select2()

      const colorsSelected = $('.select2-selection__rendered')[2].children;
      $('.select2-container').click(() => {
        const colorOptions = $('.select2-results__options')[0].children;
        for (let i = 0; i < colorOptions.length; i++) {
          $('#' + colorOptions[i].id).mouseenter(function() {
            $(this).css("background", colorOptions[i].innerText.trim());
          }).mouseleave(function() {
            $(this).css({
              "background-color": "#fff",
              'color': '#212529'
            });
          });
        }
      })
      // setInterval(() => {
      //   const colorsOption = $('.select2-results__options');
      //   console.log(colorsOption);
      // }, 1000);

      $('.form-colors').change(() => {
        for (let i = 0; i < colorsSelected.length - 1; i++) {
          colorsSelected[i].style.background = colorsSelected[i].title.trim()
          colorsSelected[i].style.borderColor = colorsSelected[i].title.trim()
        }
      })
    });
  </script>
</body>

</html>
