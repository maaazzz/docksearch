@extends('front-end.layouts.master')

@section('title', 'Add Listing')
@section('styles')

    <style>
        select {
            font-size: .9375rem;
            color: #555;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            background-color: #f9f9f9;
            border: 1px solid #e3e3e3;
            width: 100%;
            height: 4.375rem;
            padding: 1rem 3.75rem;
        }

    </style>
@endsection

@section('content')
    <section>
        <div class="w-100 pt-180 pb-110 black-layer opc45 position-relative">
            <div class="fixed-bg" style="background-image: url({{ asset('images/user-listing.jpg') }})">
            </div>
            <div class="container">
                <div class="pg-tp-wrp text-center w-100">
                    <h1 class="mb-0">Add Listing</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Add listing</li>
                    </ol>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 gray-bg position-relative">
            <div class="container">
                <div class="add-listing-wrap w-100">

                    <div class="add-listing-top w-100">
                        @if (Session::get('success'))
                        {{-- {{ dd(session('success')) }} --}}
                        <div class="alert alert-success ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                           <p>{{session('success')}}</p>
                        </div>
                        <?php Session::forget('success');?>
                        @endif

                        @if ( Session::get('error'))
                        <div class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                           <p>{{session('error')}}</p>
                        </div>
                        <?php Session::forget('error');?>
                        @endif
                        <div class="add-listing-top-info d-flex flex-wrap justify-content-between w-100">

                            <div class="add-listing-top-info-btns">
                                <a style="cursor: pointer;" onclick="document.getElementById('logout-form').submit()" title=""><i class="thm-clr fas fa-sign-out-alt"></i>Logout</a>
                            </div>

                            <div class="add-listing-top-info-user text-center">
                                <div class="add-listing-top-info-img position-relative">
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front-end') }}/assets/images/resources/add-listing-user-img.jpg"
                                        alt="Add Listing User Image">
                                    <span class="rounded-circle thm-bg"><i class="fas fa-camera-retro"></i></span>
                                </div>
                                <h3 class="mb-0">{{ auth()->user()->first_name }}</h3>
                                <p class="mb-0">Joined {{ date('d-m-Y',strtotime(auth()->user()->created_at)) }} <br> {{ auth()->user()->country }}</p>
                            </div>
                            <div class="add-listing-top-info-stats">
                                <ul class="add-listing-top-info-stats-list d-inline-flex mb-0 list-unstyled">
                                    <li><span><i class="fas fa-map-marked-alt"></i>Active Listing<span
                                                class="d-block">{{ count($dockListings) }}</span></span></li>
                                    <li><span><i class="fas fa-chart-line"></i>Active View<span
                                                class="d-block">21</span></span></li>
                                    <li ><span><i class="far fa-eye"></i>Total Reviews<span class="d-block">21</span></span>
                                    </li>
                                    <li ><span><i class="far fa-heart"></i>Times Bookmarket<span
                                                class="d-block">21</span></span></li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-tabs add-listing-nav d-flex flex-wrap justify-content-center mb-0 list-unstyled w-100">
                            {{-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#add-tab1"><i class="fas fa-chart-line"></i>Dashboard</a></li> --}}
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#add-tab2"><i
                                        class="fas fa-user-edit"></i>Edit profile</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab3"><i
                                        class="fas fa-key"></i>Change password</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-tab4"><i
                                        class="fas fa-list"></i>My Listing</a></li>

                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#add-tab7"><i
                                        class="fas fa-file-medical"></i>Add New</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        {{-- <div class="tab-pane fade show active" id="add-tab1">
                        <form class="add-listing-form-wrap w-100">
                            <div class="add-listing-inner-wrap dashboard-wrap w-100">
                                <h3 class="mb-0">Dashboard</h3>
                                <div class="add-listing-inner w-100">
                                    <div class="row mrg20">
                                        <div class="col-md-12 col-sm-12 col-lg-6">
                                            <div class="row mrg20">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="dash-widget w-100">
                                                        <div class="mini-title w-100">
                                                            <h4 class="mb-0">Congratulations John!</h4>
                                                            <span class="d-block">Best seller of the month</span>
                                                        </div>
                                                        <div class="sales-wrap w-100 d-flex flex-wrap">
                                                            <div class="sale-info">
                                                                <span class="d-block thm-clr">$89k</span>
                                                                <p class="mb-0">You have done 57.6% more sales today.</p>
                                                                <a class="thm-btn" href="javascript:void(0);" title="">View Sales</a>
                                                            </div>
                                                            <div class="sale-img">
                                                                <img class="img-fluid" src="assets/images/resources/award-img.png" alt="Award Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="dash-widget stats-widget text-center w-100">
                                                        <i class="rounded-circle fas fa-briefcase"></i>
                                                        <h5 class="mb-0">New Products</h5>
                                                        <span class="d-block">1.2k</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="dash-widget stats-widget text-center w-100">
                                                        <i class="rounded-circle far fa-user"></i>
                                                        <h5 class="mb-0">New Users</h5>
                                                        <span class="d-block">45.6k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-6">
                                            <div class="dash-widget w-100">
                                                <div class="mini-title w-100">
                                                    <h4 class="mb-0">Latest Update</h4>
                                                    <span class="d-block">Latest Posts List</span>
                                                </div>
                                                <div class="listing-posts-wrap2 w-100">
                                                    <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                        <div class="listing-post-img3">
                                                            <a href="event-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/list-post-img4-1.jpg" alt="List Post Image 1"></a>
                                                        </div>
                                                        <div class="list-post-info3">
                                                            <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                            </ul>
                                                            <h3 class="mb-0"><a href="event-detail.html" title="">MWC Barcelona 2021</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                        <div class="listing-post-img3">
                                                            <a href="event-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/list-post-img4-2.jpg" alt="List Post Image 2"></a>
                                                        </div>
                                                        <div class="list-post-info3">
                                                            <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                            </ul>
                                                            <h3 class="mb-0"><a href="event-detail.html" title="">MWC Barcelona 2021</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="listing-post-box3 v2 d-flex flex-wrap w-100">
                                                        <div class="listing-post-img3">
                                                            <a href="event-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/list-post-img4-3.jpg" alt="List Post Image 3"></a>
                                                        </div>
                                                        <div class="list-post-info3">
                                                            <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                                <li><i class="thm-clr far fa-clock"></i>May 28, 2018</li>
                                                            </ul>
                                                            <h3 class="mb-0"><a href="event-detail.html" title="">MWC Barcelona 2021</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                        <div class="tab-pane fade" id="add-tab2">
                            @livewire('user.update-profile')
                        </div>
                        <div class="tab-pane fade" id="add-tab3">
                           @livewire('user.change-password')
                        </div>
                        <div class="tab-pane fade" id="add-tab4">
                            <form class="add-listing-form-wrap w-100">
                                <div class="add-listing-inner-wrap w-100">
                                    <h3 class="mb-0">My Listing</h3>
                                    <div class="listing-posts-wrap2 w-100">
                                        @forelse ($dockListings as $dock)
                                        <div class="listing-post-box3 v3 d-flex flex-wrap w-100">
                                            <div class="listing-post-img3">
                                                @php $img = explode('|', $dock->images); @endphp
                                                @if (!empty($img))
                                                <a href="{{ route('dock.details',$dock->id) }}" title=""><img class="img-fluid w-100"
                                                    src="{{ asset('images/'.$img[0]) }}"
                                                    alt="List Post Image 1"></a>
                                                @else
                                                <a href="{{ route('dock.details',$dock->id) }}" title=""><img class="img-fluid w-100"
                                                    src="{{ asset('front-end/default-img') }}"
                                                    alt="List Post Image 1"></a>
                                                @endif
                                                <span class="position-absolute rounded-pill {{ $dock->is_featured == 0 ? 'bg-warning' : 'bg-success' }}">{{ $dock->is_featured == 1 ? 'Featured' : 'Basic' }}</span>
                                            </div>
                                            <div class="list-post-info3">
                                                <ul class="post-meta2 d-inline-flex mb-0 list-unstyled">
                                                    <li><i class="thm-clr far fa-clock"></i>{{ $dock->created_at }}</li>
                                                    <li><i class="thm-clr fas fa-user-edit"></i>By <a
                                                            href="javascript:void(0);">{{ $dock->user->first_name }}</a></li>
                                                </ul>
                                                <h3 class="mb-0"><a href="{{ route('dock.details',$dock->id) }}" title="">{{ $dock->name }}</a></h3>
                                                <p class="mb-0">{{$dock->dock_description}}</p>
                                                <ul class="post-meta d-inline-flex flex-wrap mb-0 list-unstyled">
                                                    <li><i class="fas fa-glass-cheers rounded-circle"></i>{{ !empty($dock->price) ? $dock->price : $dock->price_for_rent }} {{ !empty($dock->price) ? '$ (Sale Price)' : '$ (Per Month)' }}
                                                    </li>
                                                    <li><i class="fas fa-phone rounded-circle"></i>+{{ $dock->phone }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @empty
                                        <p>No Docks Found !!</p>
                                        @endforelse

                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade active show" id="add-tab7">

                            <form class="add-listing-form-wrap w-100" action="{{ route('paypal') }}" method="post" id="needs-validation" enctype="multipart/form-data">
                                @csrf
                                {{-- listing details --}}
                                <div class="add-listing-inner-wrap w-100">
                                    <h3 class="mb-0">Add Listing</h3>
                                    <div class="add-listing-inner w-100">
                                        <div class="row mrg20">
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Name</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="Name" name="name" required>
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Email</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="email" placeholder="Email" name="email" required>
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Telephone</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="phone number" name="phone" >
                                                    @error('phone')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Alternate Phone</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="Alternate phone number"
                                                        name="alternate_phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Marine Name</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="Marine Name" name="marine_name" required>
                                                    @error('marine_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Dock Images</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="file" name="images[]" required multiple>
                                                    @error('images')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- dock rental pricing --}}
                                <div class="add-listing-inner-wrap w-100">
                                    <h3 class="mb-0">Dock Rental Pricing</h3>
                                    <div class="add-listing-inner w-100">
                                        <div class="row mrg20">
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Listing Type</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <select name="list_type" id="list_type" required>
                                                        <option value="" selected disabled>Select List Type</option>
                                                        <option value="rent">For Rent</option>
                                                        <option value="sale">For Sale</option>
                                                        <option value="rent and sale">For Rent and Sale</option>
                                                    </select>
                                                    @error('list_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <p class="text-lead" style="margin-top:2.6rem;">
                                                    Please choose whether you are renting, selling, or renting/selling your
                                                    dock.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Pricing Flat Rate(for sale or monthly rent)$</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="flat price" name="flat_price" id="price">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <p class="text-lead" style="margin-top:2.6rem;">
                                                    Mostly listings charge by "Flat Rate" per month.
                                                    Some listings may charge "By Foot" per month.
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <label>Dollar Per Foot $</label>
                                                <div class="field w-100 position-relative">
                                                    <i class="fas fa-chart-line"></i>
                                                    <input type="text" placeholder="dollar per foot" name="foot_per_month" id="foot-price">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                                <p class="text-lead" style="margin-top: 2.6rem">
                                                    If your listing is 'For Sale' use "Flat Rate".
                                                    Please fill in EITHER a "Flat Rate" or "By Foot".
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     {{-- dock description --}}
                        <div class="add-listing-inner-wrap w-100">
                            <h3 class="mb-0">Dock Description</h3>
                            <div class="add-listing-inner w-100">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Dock Address Line 1</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="text" placeholder="Address Line 1" name="address_one" required>
                                             @error('address_one')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Dock Address Line 2</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="email" placeholder="Address Line 2" name="address_two" required>
                                             @error('address_two')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>City Of Dock</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="text" placeholder="dock city" name="dock_city" required>
                                            @error('dock_city')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>State (USA/Canada)</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="dock_state" required>
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
                                            @error('dock_state')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Country</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="dock_country" required>
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
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
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
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Spain">Spain</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Virgin Islands">Virgin Islands (British)</option>
                                            <option value="Virgin Islands">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            </select>
                                            @error('dock_country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>County Of Dock</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="county" required>
                                                <option value="" >Select County</option>
                                                <option value="palm beach">Palm Beach</option>
                                                <option value="broward">Broward</option>
                                                <option value="miami dade">Miami-Dade</option>
                                                <option value="monroe">Monroe</option>
                                                <option value="martin">Martin</option>
                                                <option value="pinellas">Pinellas</option>
                                                <option value="hillsborough">Hillsborough</option>
                                                <option value="sarasota">Sarasota</option>
                                            </select>
                                            @error('dock_city')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>International</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="text" name="international" placeholder="enter country name if not listed">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>ZIP/POSTAL Code of Dock</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="text" name="postal_code" placeholder="Zip Code" required>
                                            @error('postal_code')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Dock Description (1024 characters max)</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <textarea name="dock_description" minlength="60" cols="60" rows="10" placeholder="Dock Description (1024 characters max)" required></textarea>
                                            @error('dock_description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Location Type</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="location_type" required>
                                                <option value="" selected disabled>Select Location Type</option>
                                                <option value="home">Home</option>
                                                <option value="condo">Condo</option>
                                                <option value="marina">Marina</option>
                                                <option value="vacant lot">Vacant Lot</option>
                                                <option value="other">Other</option>
                                            </select>
                                            @error('location_type')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Dock Type</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                           <select name="dock_type" required>
                                               <option value="" selected disabled>Select Dock Type</option>
                                               <option value="dock">Dock</option>
                                           </select>
                                           @error('dock_type')
                                           <div class="text-danger">{{ $message }}</div>
                                           @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- boat limitations --}}
                        <div class="add-listing-inner-wrap w-100">
                            <h3 class="mb-0">Target Boat Limitations</h3>
                            <div class="add-listing-inner w-100">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Max Length Of Boat</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="boat_length" required>
                                                <option value="" selected disabled>Select Max Boat Length</option>
                                                @for ($i = 4; $i <= 500; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                                @endfor
                                            </select> ft.
                                            @error('boat_length')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Max Beam(width) Of Boat</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="boat_width" required>
                                                <option value="" selected disabled>Select Max Boat width</option>
                                                @for ($i = 2; $i <= 100; $i++)
                                                <option value="{{ $i }}">{{ $i }}'</option>
                                                @endfor
                                            </select> ft.
                                            @error('boat_width')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Max Draw Of Boat</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="boat_depth" required>
                                                <option value="" selected disabled>Select Max Boat Draw</option>
                                             @for ($i = 1; $i <= 70; $i++)
                                             <option value="{{ $i }}">{{ $i }}</option>
                                             @endfor
                                            </select> ft.
                                            @error('boat_depth')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Max Clearance(height) Of Boat</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="max_clearance" required>
                                                <option value="" selected disabled>Select Max Boat Clearance</option>
                                                <option value="255">Unlimited</option>
                                                @for ($i = 3; $i <= 200; $i++)
                                                <option value="200">200'</option>
                                                @endfor
                                            </select> ft.
                                            @error('max_clearance')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Website(optional)</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <input type="url" placeholder="website url (optional)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- dock attributes --}}
                        <div class="add-listing-inner-wrap w-100">
                            <h3 class="mb-0">Dock Attributes)</h3>
                            <div class="add-listing-inner w-100">
                                <ul class="tags-list mb-0 list-unstyled">
                                    <li><span><input type="checkbox" id="anmi1-1" name="dock_attributes[]"><label for="anmi1-1" value="Electricity/Shore Power">Electricity/Shore Power</label></span></li>
                                    <li><span>
                                        <input type="checkbox" id="anmi1-2" name="dock_attributes[]" value="resaurant">
                                        <label
                                                for="anmi1-2">Restaurant</label>
                                            </span></li>
                                    <li><span>
                                        <input type="checkbox" id="anmi1-3" name="dock_attributes[]" value="ocean access">
                                        <label for="anmi1-3">Ocean Access</label>
                                            </span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-4" value="telephone hookup"><label for="anmi1-4">Telephone Hookup</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-5" value="deep water"><label for="anmi1-5">Deep Water</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-6" value="cable tv"><label for="anmi1-6">Cable TV Hookup</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-7" value="no fixed bridges"><label for="anmi1-7">No Fixed Bridges</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-8" value="internet"><label for="anmi1-8">
                                                Internet</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-9" value="davits"><label for="anmi1-9">Davits/Lift
                                            </label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-10" value="clubhouse"><label for="anmi1-10">Clubhouse</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-11" value="fresh water"><label for="anmi1-11">Fresh Water Available</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-12" value="fueling facilities"><label for="anmi1-12">Fueling Facilities</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-13" value="shower"><label for="anmi1-13">Shower Facilities</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-14" value="24 hour accessability"><label for="anmi1-14">24 Hour Accessibility</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-15" value="marina location"><label for="anmi1-15">Marina Location</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-16" value="pool"><label for="anmi1-16">Pool</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-17" value="laundry"><label for="anmi1-17">Laundry Facilities</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-18" value="hotel"><label for="anmi1-18">Hotel</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-19" value="live aboard allowed"><label for="anmi1-19">Live Aboard Allowed</label></span></li>
                                    <li><span><input type="checkbox" name="dock_attributes[]" id="anmi1-20" value="services"><label for="anmi1-20">Secives/Repair</label></span></li>
                                </ul>
                            </div>
                        </div>

                        {{-- payment information --}}
                        <div class="add-listing-inner-wrap w-100">
                            <h3 class="mb-0">Payment Information</h3>
                            <div class="add-listing-inner w-100">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Payment Plan</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="payment_plan" required>
                                                <option value="" selected disabled>Select Payment Plan</option>
                                                <option value="basic_listing">Basic Listing (6 Months) $49.95</option>
                                                 <option value="featured_listing">Featured Listing (6 Months) $74.95</option>
                                            </select>
                                            @error('payment_plan')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <p class="text-lead" style="margin-top: 2.5rem">
                                            Featured Listings are displayed at the top of the all search results, in a special section before the basic listings.
                                        </p>
                                        <p>
                                            We recommend the 'Featured Listing' plan in states that already have numerous listings (like Florida), and for Marinas who want to attract multiple customers.
                                        </p>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <label>Payment Type</label>
                                        <div class="field w-100 position-relative">
                                            <i class="fas fa-chart-line"></i>
                                            <select name="payment_method" >
                                                <option value="paypal" selected>Credit Card Or Paypal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <p class="text-lead" style="margin-top: 2.6rem">
                                            In the time period you choose, you may activate and inactivate your listing as many times as you like.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="thm-btn" type="submit" id="btn-submit"><i class="far fa-paper-plane"></i>Send Listing</button>
                        </form>
                    </div>
                        </div>


                </div>
            </div><!-- Add Listing Wrap -->
        </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        let list_type = null
        $('#list_type').on('change',function(){
           list_type = $('#list_type').val();
        });

        $('#btn-submit').on('click',function(){
          var foot_price =  $('#foot-price').val();
          var price =  $('#price').val();
            if (list_type != 'rent and sale') {
              if (foot_price != '' && price != '') {
                alert('Please fill in EITHER a "Flat Rate" or "By Foot" monthly rate.')
                return false;
               }
            }

            if (list_type === 'rent and sale') {
               if (foot_price === '' || price === '') {
                    alert('Please fill both "Flat Rate" and "Foot Rate"');
                    return false;
               }
            }

        });
    });
</script>
@endsection
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     