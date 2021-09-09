<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
  {{-- <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/fontawesome.css"> --}}
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/ionicons.css">
  {{-- <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/linearicons.css"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/open-iconic.css"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/fonts/pe-icon-7-stroke.css"> --}}

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/bootstrap.css" class="theme-settings-bootstrap-css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/appwork.css" class="theme-settings-appwork-css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/theme-corporate.css" class="theme-settings-theme-css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/colors.css" class="theme-settings-colors-css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/css/rtl/uikit.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/demo.css">

  <!-- Load polyfills -->
   {{-- <script src="{{ asset('admin') }}/assets/vendor/js/polyfills.js"></script> --}}
  {{-- <script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script> --}}

  {{-- <script src="{{ asset('admin') }}/assets/vendor/js/material-ripple.js"></script> --}}
  <script src="{{ asset('admin') }}/assets/vendor/js/layout-helpers.js"></script>

  <!-- Theme settings -->
  <!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->
  <script src="{{ asset('admin') }}/assets/vendor/js/theme-settings.js"></script>
  <script>
    window.themeSettings = new ThemeSettings({
      cssPath: "{{ asset('admin') }}/assets/vendor/css/rtl/",
      themesPath: "{{ asset('admin') }}/assets/vendor/css/rtl/"
    });
  </script>

  <!-- Core scripts -->
  <script src="{{ asset('admin') }}/assets/vendor/js/pace.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Libs -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
