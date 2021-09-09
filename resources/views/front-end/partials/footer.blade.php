<footer>
    <div class="w-100 dark-bg2 position-relative">
        <div class="footer-cont-wrap w-100">
            <div class="container">
                <div class="footer-cont-inner d-flex flex-wrap align-items-center justify-content-between">
                    <div class="footer-cont-info row justify-content-center">

                    </div>

                </div>
            </div>
        </div><!-- Footer Contact Wrap -->
        <div class="footer-data w-100">
            <div class="container res-row">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="widget w-100">
                            <div class="logo">
                                <h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid"
                                            src="{{ url('storage/'.$site_setting->website_logo) }}" alt="Logo"
                                            srcset="{{ url('storage/'.$site_setting->website_logo) }}"></a></h1>
                            </div>
                            <p class="mb-0">
                                {{ Str::limit($site_setting->footer_description, 150) }}
                            </p>
                            <div class="social-links d-inline-block">
                                <a href="javascript:void(0);" title="Facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="javascript:void(0);" title="Twitter" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0);" title="Google Plus" target="_blank"><i
                                        class="fab fa-google-plus-g"></i></a>
                                <a href="javascript:void(0);" title="Linkedin" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-5">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="widget w-100">
                                    <h3>Userful Links</h3>
                                    <ul class="mb-0 list-unstyled w-100">
                                        <li><a href="{{ route('docks.listing') }}" title="">Find a Dock</a></li>
                                        <li><a href="{{ route('user.profile') }}" title="">List a Dock</a></li>
                                        <li><a href="{{ route('contact.us') }}" title="">Contact Us</a></li>
                                        @foreach ($top_navbar as $item)
                                        <li><a href="{{ url($item->url) }}" target="_blank">{{ $item->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                @if ($site_setting->footer_ad)
                                <div class="widget w-100">
                                    <iframe style="width:120px;height:240px;"  scrolling="no" frameborder="0" src="<?php echo $site_setting->footer_ad  ?>">
                                    </iframe>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Footer Data -->
    </div>
</footer><!-- Footer -->
<div class="copyright text-center w-100">
    <div class="container">
        <p class="mb-0">&copy; 2021 <a href="/" title="">DockSearch</a></p>
    </div>
</div><!-- Copyright -->
