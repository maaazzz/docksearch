<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jthemes.net/themes/html/neondir/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 10:28:14 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="{{ asset('front-end') }}/assets/images/favicon.png" sizes="35x35" type="image/png">
        <title>@yield('title')</title></title>

@include('front-end.partials.styles')
@yield('styles')
@livewireStyles
    </head>
    <body>
        <main>

            {{-- header + responsive header --}}
            @include('front-end.partials.header')
            @yield('content')
            @include('front-end.partials.footer')

        </main><!-- Main Wrapper -->

       @include('front-end.partials.scripts')

       @yield('scripts')
       @livewireScripts
       {{-- hide alert after livewire action --}}
         <script>
             window.addEventListener('hide-notification', event => {
                         setTimeout(function() {
                            $('.alert').fadeOut('slow');
                        }, 3000);
                })
          </script>
    </body>

<!-- Mirrored from jthemes.net/themes/html/neondir/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 10:28:49 GMT -->
</html>
