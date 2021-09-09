@extends('front-end.layouts.master')
@section('title', 'DockSearch | Home')
@section('styles')
    <style>
        select {
            color: #a4a4a4;
            font-size: 14px;
        }

        select>option {
            color: rgb(56, 53, 53);
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .dir-form>button {
            flex: 0 0 20%;
            margin-left: auto;
            max-width: 20%;
            color: #fff;
            font-weight: 700;
            font-family: Jost;
            font-size: 14px;
            -webkit-border-radius: 0 5px 5px 0;
            border-radius: 0 5px 5px 0;
            position: relative;
            right: -1px;
            /* justify-content: end; */
        }

        .dir-form>*:not(button) {
            flex: 0 0 24%;
            max-width: 24%;
        }

        .how-work-inner {
            margin-top: 35px;
        }

        .feat-inner {
            padding-top: 11rem !important;
        }

        .find-more {
            font-size: 1.2rem;
        }

        .find-more:hover {
            color: rgba(207, 67, 40, 1) !important;
        }

    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="feat-wrap pt-140 pb-140 dark-layer position-relative opc7 w-100">
                <div class="fixed-bg"
                    style="background-image: url({{ url('storage/' . $site_setting->website_banner) }});"></div>
                <div class="container">
                    <div class="feat-inner pt-240 w-100">
                        <h2 class="mb-0 text-center">{{ $site_setting->website_header }} </h2>
                        <form class="dir-form d-flex" action="{{ route('docks.search') }}" method="post">
                            @csrf
                            @if (in_array('zip_code', $input_fields))
                                <div class="field loc">
                                    <label class="thm-clr">Postal Code</label>
                                    <input type="text" name="postal_code" placeholder="postal code">
                                </div>
                            @endif
                            @if (in_array('county', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="county">
                                            <option value="">Select County</option>
                                            <option value="palm beach">Palm Beach</option>
                                            <option value="broward">Broward</option>
                                            <option value="miami dade">Miami-Dade</option>
                                            <option value="monroe">Monroe</option>
                                            <option value="martin">Martin</option>
                                            <option value="pinellas">Pinellas</option>
                                            <option value="hillsborough">Hillsborough</option>
                                            <option value="sarasota">Sarasota</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('boat_length', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="boat_length">
                                            <option value="" selected disabled>Select Boat Length</option>
                                            @for ($i = 4; $i <= 500; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('boat_width', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="boat_width">
                                            <option value="" selected disabled>Select Boat Width</option>
                                            @for ($i = 2; $i <= 100; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('boat_clearance', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="boat_clearance">
                                            <option value="" selected disabled>Clearance(height)</option>
                                            @for ($i = 1; $i <= 75; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('boat_beam', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="boat_beam">
                                            <option value="" selected disabled>Select Boat Beam</option>
                                            @for ($i = 1; $i <= 75; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('dock_country', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="dock_country">
                                            <option value="" selected disabled>Select Country</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="Great Britain">Great Britain (UK)</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Netherlands">Netherlands Antilles</option>
                                            <option value="New Zealand">New Zealand (Aotearoa)</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                the Grenadines</option>
                                            <option value="Spain">Spain</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon
                                            </option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                            </option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="US Minor Outlying Islands">US Minor Outlying Islands
                                            </option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Virgin Islands">Virgin Islands (British)</option>
                                            <option value="Virgin Islands">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('dock_state', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="dock_state">
                                            <option value="" selected disabled>Select State</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Alberta">Alberta</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="British Columbia">British Columbia</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida (Southeast)">Florida (Southeast)</option>
                                            <option value="Florida (Southwest)">Florida (Southwest)</option>
                                            <option value="Florida (Florida Keys)">Florida (Florida Keys)
                                            </option>
                                            <option value="Florida (Central East / Space Coast)">Florida
                                                (Central East / Space Coast)</option>
                                            <option value="Florida (Central / Heartland)">Florida (Central /
                                                Heartland)</option>
                                            <option value="Florida (Tampa Bay Area)">Florida (Tampa Bay Area)
                                            </option>
                                            <option value="Florida (Northeast)">Florida (Northeast)</option>
                                            <option value="Florida (Northwest)">Florida (Northwest)</option>

                                            <option value="Georgia">Georgia</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Manitoba">Manitoba</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Brunswick">New Brunswick</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New MexicoM">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="Newfoundland">Newfoundland</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Northwest Territories">Northwest Territories</option>
                                            <option value="Nova Scotia">Nova Scotia</option>
                                            <option value="Nunavut">Nunavut</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Ontario">Ontario</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Prince-Edward-Island">Prince-Edward-Island</option>
                                            <option value="Puerto Rico<">Puerto Rico</option>
                                            <option value="Quebec">Quebec</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="Saskatchewan">Saskatchewan</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                            <option value="Yukon">Yukon</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (in_array('price', $input_fields))
                                <div class="field loc">
                                    <label class="thm-clr">Postal Code</label>
                                    <input type="text" name="price" placeholder="Price">
                                </div>
                            @endif
                            @if (in_array('list_type', $input_fields))
                                <div class="field slc">
                                    <div class="slc-wp">
                                        <select name="list_type" id="list_type">
                                            <option value="" selected disabled>Select List Type</option>
                                            <option value="rent">For Rent</option>
                                            <option value="sale">For Sale</option>
                                            <option value="rent and sale">For Rent and Sale</option>
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <button class="thm-btn" type="submit"><i class="fas fa-search"></i>Search</button>
                        </form>
                        {{-- <div class="dir-cate-wrap text-center w-100">
                        <h4 class="mb-0">Use quick search by Location type</h4>
                        <ul class="dir-opt-list d-inline-flex mb-0 list-unstyled">
                            <li>
                                <a href="{{ route('docks.listing','vacant') }}" title=""><span class="rounded-circle"><i class="fas fa-hamburger thm-clr"></i></span><h5 class="mb-0">Vacant Lot</h5></a>
                            </li>
                            <li>
                                <a href="{{ route('docks.listing') }}" title=""><span class="rounded-circle"><i class="fas fa-hotel thm-clr"></i></span><h5 class="mb-0">Condo</h5></a>
                            </li>
                            <li>
                                <a href="{{ route('docks.listing') }}" title=""><span class="rounded-circle"><i class="fas fa-store-alt thm-clr"></i></span><h5 class="mb-0">Home</h5></a>
                            </li>
                            <li>
                                <a href="{{ route('docks.listing') }}" title=""><span class="rounded-circle"><i class="fas fa-school thm-clr"></i></span><h5 class="mb-0">Marina</h5></a>
                            </li>
                        </ul>
                    </div> --}}
                    </div><!-- Feat Wrap -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-140 pb-110 position-relative overflow-hidden">
            <div class="fixed-bg bg-norepeate"
                style="background-image: url({{ asset('storage/' . $site_setting->rent_list_left_image) }});"></div>
            <div class="container">
                <div class="sec-title text-center w-100">
                    <span class="d-block thm-clr">DockForRent.com is your one stop shop to rent or list</span>
                    <h2 class="mb-0">See How it Works</h2>
                </div><!-- Sec Title -->
                <div class="how-work-wrap  text-center w-100 d-flex col-sm d-block align-items-center">
                    <div class="row">
                        @if ($docks_shop)
                            @forelse ($docks_shop as $dock)
                                <div class="col-md-6 col-sm-6 col-lg-4 mt-4">
                                    <div class="how-work-box w-100">
                                        <img class="img-fluid" style="width:350px;height:164px"
                                            src="{{ url('storage/', $dock->photo) }}" alt="How It Works Icon 1">
                                        <div class="how-work-inner w-100">
                                            <h3 class="mb-0">{{ $dock->header }}</h3>
                                            <p class="mb-0">{{ Str::limit($dock->description, 150) }} </p>
                                        </div>
                                    </div>
                                    @if ($dock->link_text)
                                        <a href="{{ $dock->redirect_link }}" class="find-more">{{ $dock->link_text }} <i
                                                class="fa fa-arrow-right"></i></a>
                                    @endif
                                </div>
                            @empty
                                <h3>No Data Found !!</h3>
                        @endforelse
                        @endif
                    </div>
                    <iframe style="width:120px;height:240px;"  scrolling="no" frameborder="0" src="<?php echo $site_setting->home_page_ad ?>">
                    </iframe>
                </div><!-- Services Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pt-140 gray-layer3 pb-50 opc65 position-relative" style="padding-top: 7.75rem">
            <div class="fixed-bg patern-bg"
                style="background-image: url({{ asset('storage/' . $site_setting->reviews_section_background_image) }});">
            </div>
            {{-- <div class="fixed-bg patern-bg"
                style="background-image: url({{ asset('front-end') }}/assets/images/pattern-bg2.png);"></div> --}}
            <div class="container">
                <div class="sec-title text-center w-100">
                    <span class="d-block thm-clr">We would love to hear from you. please e-mail us at
                        {{ $site_setting->contact_us_email }}</span>
                    <h2 class="mb-0">Stop By!</h2>
                </div><!-- Sec Title -->
                <div class="testi-wrap2 w-100">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12 col-lg-10">
                            <div class="texti-inner w-100">
                                <div class="testi-nav-caro">
                                    <div class="testi-nav-img">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ asset('storage/' . $reviews_section[0]->image) }}"
                                            alt="Testimonials Image 1">
                                    </div>

                                    <div class="testi-nav-img">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ asset('storage/' . $reviews_section[1]->image) }}"
                                            alt="Testimonials Image 2">
                                    </div>

                                    <div class="testi-nav-img">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ asset('storage/' . $reviews_section[2]->image) }}"
                                            alt="Testimonials Image 3">
                                    </div>
                                </div>
                                <div class="testi-data-caro">
                                    @if ($reviews_section)
                                        @forelse ($reviews_section as $review)
                                            <div class="testi-content-item">
                                                <p class="mb-0">“ {{ $review->review_text }}. ”</p>
                                                <h4 class="mb-0"> {{ $review->review_by }}</h4>
                                            </div>
                                        @empty
                                            <h4 class="mb-0">Not Found</h4>
                                    @endforelse
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section>


@endsection
