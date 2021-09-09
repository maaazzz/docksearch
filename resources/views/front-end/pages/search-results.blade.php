@extends('front-end.layouts.master')

@section('title', 'Docks Listing')

@section('content')
{{-- {{ dd($docks) }} --}}
<section>
    <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
        <div class="fixed-bg" style="background-image: url({{ asset('storage/'.$site_setting->find_dock_banner) }}"></div>
        <div class="container">
            <div class="pg-tp-wrp text-center w-100">
                <h1 class="mb-0">{{ $site_setting->find_dock_header }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-140 gray-bg position-relative">
        <div class="container">
            {{-- <div class="listing-top-bar d-flex flex-wrap align-items-center w-100">
                <div class="slc-wp">
                    <select name="dock_country" id="dock-state">
                        <option selected disabled>Filter By Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="slc-wp">
                    <select name="dock_state" id="dock-state">
                        <option selected disabled>Filter By States</option>
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
                            <option value="Florida (Florida Keys)">Florida (Florida Keys)</option>
                            <option value="Florida (Central East / Space Coast)">Florida (Central East / Space Coast)</option>
                            <option value="Florida (Central / Heartland)">Florida (Central / Heartland)</option>
                            <option value="Florida (Tampa Bay Area)">Florida (Tampa Bay Area)</option>
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
            </div><!-- Listing Top Bar --> --}}
            <div class="listing-layout mt-70 w-100">

                <div class="row">

                    <div class="col-md-10 col-sm-12 col-lg-10">
                     <div class="row">
                        @forelse ($searchResults as $dock)
                        <div class="col-md-5 col-sm-6 col-lg-5">
                            <div class="list-post-box brd-rd5 overflow-hidden position-relative w-100">
                                @php
                                    $img = explode('|',$dock->images);
                                @endphp
                                <div class="list-post-img overflow-hidden position-relative w-100">
                                   @if (!empty($img))
                                   <img class="img-fluid w-100" src="{{ asset('images/'.$img[0]) }}" alt="List Post Image 1" style="height: 30vh !important">
                                   @else
                                   <img class="img-fluid w-100" src="{{ asset('images/defaul2.jpg') }}" alt="List Post Image 1">
                                   @endif
                                    <span class="list-post-cat position-absolute "><a class="rounded-pill" href="{{ route('dock.details',$dock->id) }}" title="">{{ $dock->is_featured == 1 ? 'Featured' : 'Basic' }}</a></span>

                                </div>
                                <div class="list-post-info w-100">
                                    <div class="list-post-inner w-100">
                                        <div class="list-post-info-top d-flex flex-wrap justify-content-between">
                                            <span class="list-post-date"><i class="thm-clr far fa-clock"></i>{{ date('Y-m-d',strtotime($dock->created_at)) }}</span>
                                        </div>
                                        <h3 class="mb-0"><a href="{{ route('dock.details',$dock->id) }}" title="">{{ $dock->name }}</a></h3>
                                        <div class="list-post-author-stats d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="list-post-author d-inline-flex align-items-center">
                                                <img class="rounded-circle img-fluid" src="{{ asset('front-end') }}/assets/images/resources/author-img1-1.jpg" alt="Author Image 1">
                                                <span>{{ ucfirst($dock->user->first_name ) }}</span>
                                            </div>
                                            <span class="rounded-pill bg-color1">${{ !empty($dock->price) ? $dock->price : $dock->price_for_rent }}</span>

                                        </div>
                                        <p class="m-2">
                                            {{ Str::limit($dock->dock_description, 30)}}
                                        </p>
                                    </div>
                                    <ul class="list-post-meta mb-0 list-unstyled">
                                        <li class="active"><i class="thm-clr fas fa-map-marker-alt"></i><span>{{ ucfirst($dock->dock_state) }}, {{ ucfirst($dock->dock_country) }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h2>No dock found</h2>
                        @endforelse
                     </div>
                 </div>
                 <div class="col-md-2 col-sm-2 col-lg-2">
                    {{-- <img src="{{ asset('front-end/assets/ads/portrait.jpg') }}" alt="not found" class="img-fluid"> --}}
                    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=12345670066-20&marketplace=amazon&amp;region=US&placement=B01HD53J02&asins=B01HD53J02&linkId=d881e09e2a65064bd248ef6d3c6f0ad3&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                    </iframe><br>
                    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=12345670066-20&marketplace=amazon&amp;region=US&placement=B01HD53J02&asins=B01HD53J02&linkId=d881e09e2a65064bd248ef6d3c6f0ad3&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                    </iframe>
                </div>


                </div>
            </div><!-- Listing Layout -->
            <div class="view-all mt-30 text-center w-100">
                        {{ $searchResults->links() }}
            </div><!-- View All -->
            <div class="listing-explore-info-wrap advance-filter-wrap">
                <span class="advanc-filter-close-btn"><i class="fas fa-times"></i></span>
                <div class="mini-title w-100">
                    <h4 class="mb-0">What are you looking for?</h4>
                    <span class="d-block">Search or select categories</span>
                </div>
                <div class="listing-explore-form-wrap w-100">
                    <form>
                        <div class="wdgt w-100">
                            <div class="field w-100"><input type="text" placeholder="What are you looking for?"></div>
                            <div class="field slc-wp w-100">
                                <select>
                                    <option>All Categories</option>
                                    <option>Restaurant</option>
                                    <option>Fast Food</option>
                                    <option>Drink</option>
                                </select>
                            </div>
                            <div class="field w-100"><input type="text" placeholder="Where to Look?"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                        <div class="wdgt advance-search w-100">
                            <h4>Advance Search</h4>
                            <div class="search-range">
                                <label>Price Range</label>
                                <ul class="search-price-opt">
                                    <li><span>$$</span></li>
                                    <li><span>$$$</span></li>
                                    <li><span>$$$$</span></li>
                                </ul>
                                <div class="slc-wp">
                                    <label>Sort by:</label>
                                    <select>
                                        <option>Name</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="wdgt search-tags w-100">
                            <h4>Tags</h4>
                            <ul class="tags-list row mb-0 list-unstyled">
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-1"><label for="tag1-1">Reservations (04)</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-2"><label for="tag1-2">Outdoor Seating</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-3"><label for="tag1-3">Wheelchair Accesible</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-4"><label for="tag1-4">Smoking Allowed</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-5"><label for="tag1-5">Accepts Credit Cards</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-6"><label for="tag1-6">Parking street</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-7"><label for="tag1-7">Outdoor Seating</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-8"><label for="tag1-8">Accepts Credit Cards</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-9"><label for="tag1-9">Wireless Internet</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-10"><label for="tag1-10">Parking street</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-11"><label for="tag1-11">Wirless Internet</label></span></li>
                                <li class="col-md-6 col-sm-6 col-lg-6"><span><input type="checkbox" id="tag1-12"><label for="tag1-12">Parking street</label></span></li>
                            </ul>
                        </div>
                        <div class="wdgt location-search w-100">
                            <div class="field slc-wp w-100">
                                <select>
                                    <option>Location</option>
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                </select>
                            </div>
                        </div>
                        <button class="thm-btn" type="submit">Search Now</button>
                    </form>
                </div>
            </div><!-- Listing Explore Info Wrap -->
        </div>
    </div>
</section>
@endsection
