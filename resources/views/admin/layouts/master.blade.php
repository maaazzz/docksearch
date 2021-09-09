<!DOCTYPE html>

<html lang="en" class="default-style">

<head>
  <title>@yield('title')</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  @include('admin.partials.styles')
  @yield('styles')
  @livewireStyles
</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
@include('admin.partials.sidebar')
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
       @include('admin.partials.header')
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          <div class="container-fluid flex-grow-1 container-p-y">

            <h4 class="font-weight-bold py-3 mb-4">
             @yield('content-head')
            </h4>

            @yield('content')

          </div>
          <!-- / Content -->



        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  @include('admin.partials.scripts')
  @yield('scripts')
  @livewireScripts
  <script>
 window.addEventListener('closeModal', event => {
    jQuery('#modals-top').modal('hide');
});
</script>
</body>

</html>
