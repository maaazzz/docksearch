@extends('front-end.layouts.master')

@section('title', 'Dock Details')

@section('content')
<section>
    <div class="w-100 position-relative">
        <div class="feat-wrap2 w-100 position-relative">
            <div class="feat-caro2">
                <div class="feat-item"><div class="feat-img" style="background-image: url({{ asset('front-end') }}/assets/images/resources/dock-rental-banner.jpg);"></div></div>
            </div>
        </div><!-- Featured Wrap 2 -->
    </div>
</section>
<section>
    <div class="w-100 pb-120 gray-bg position-relative">
        <div class="container">
            <div class="event-detail-wrap2 w-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-8">
                        <div class="event-detail-inner2 bg-white w-100 overlap205">
                            <div class="event-detail-info2 w-100">
                                <h2 class="mb-0">{{ ucfirst($dock->name) }}</h2>
                                <span class="d-inline-block thm-clr">{{ date('Y-m-d',strtotime($dock->created_at)) }}</span><i class="d-inline-block">California</i>
                                <ul class="event-detail-list mb-0 list-unstyled w-100">
                                    <li>Location:<span>{{ ucfirst($dock->dock_address_one) }}, {{ ucfirst($dock->state) }}</span></li>
                                    <li>Phone:<span>{{ $dock->phone }}</span></li>
                                    <li>Website:<span>{{ $dock->website ?? 'Not Available' }}</span></li>
                                </ul>
                            </div>
                            <div class="event-detail-content-inner w-100">
                                <h3>About {{ ucfirst($dock->name) }}</h3>
                                <p class="mb-0"><span>{{ $dock->dock_description }}</p>
                            </div>


                            <div class="event-detail-content-inner w-100">
                                <h3>Dock Attributes</h3>
                                <ul class="location-add-list mb-0 list-unstyled d-flex flex-wrap">
                                    @foreach(explode(',', $dock->dock_attributes) as $attr)
                                    <li style="flex:10% 0 20%;"><span>{{ $attr }}</span></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="event-detail-content-inner w-100">
                                <h3>Pricing</h3>
                                @if(!empty($dock->price))
                                <h4>Foot Rate: ${{ $dock->price }}</h4>
                                @else
                                <h4>Monthly Rate: ${{ $dock->price_for_rent }}</h4>
                                @endif
                               <p>
                                Most listings charge by "Flat Rate" per month. Some listings may charge "By Foot" per month.
                               </p>
                            </div>
                            <div class="event-detail-content-inner w-100">
                                <h3>Boat Limitations</h3>
                                <ul class="location-add-list mb-0 list-unstyled d-flex flex-wrap">
                                    <li style="flex:0 0 50%;"><span>Max Length: {{ ucfirst($dock->max_length) }} ft</span></li>
                                    <li style="flex:0 0 50%;"><span>Max Beam(width): {{ucfirst( $dock->max_width) }} ft</span></li>
                                    <li style="flex:0 0 50%;"><span>Max Draw(depth): {{ucfirst( $dock->max_draw )}} ft </span></li>
                                    <li style="flex:0 0 50%;"><span>Max Clearance(height): {{ucfirst( $dock->max_height )}} ft </span></li>
                                </ul>
                            </div>
                            <div class="event-detail-content-inner w-100">
                                <h3>Others</h3>
                                <ul class="location-add-list mb-0 list-unstyled d-flex flex-wrap">
                                    <li style="flex:0 0 50%;"><span>Dock Type: {{ ucfirst($dock->dock_type) }}</span></li>
                                    <li style="flex:0 0 50%;"><span>Location Type: {{ucfirst( $dock->location_type) }}</span></li>
                                    <li style="flex:0 0 50%;"><span>Listing Type: {{ucfirst( $dock->list_type )}} </span></li>
                                </ul>
                            </div>
                            <div class="event-detail-content-inner w-100">
                                <h3>Location</h3>
                                <div class="listing-loc-map place-map" id="listing-loc-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.96868713375!2d-80.13188698497481!3d25.96906728354301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ad54b413a9d5%3A0x57d91ea5e0ed8f9e!2sWaterways%20Marina!5e0!3m2!1sen!2s!4v1614171097593!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <ul class="location-add-list mb-0 list-unstyled d-flex flex-wrap">
                                    <li><span><i class="rounded-circle fas fa-map-marker-alt"></i>{{ ucfirst($dock->dock_address_one) }}, {{ ucfirst($dock->dock_state) }}, {{ ucfirst($dock->dock_address_two) }}, {{ ucfirst($dock->dock_country) }}</span></li>

                                    <li><span><i class="rounded-circle fas fa-phone-alt"></i>{{ $dock->phone }}</span></li>
                                    <li><span><i class="rounded-circle far fa-envelope"></i>{{ $dock->email }}</span></li>
                                    <li><span><i class="rounded-circle fas fa-globe"></i>{{ !empty($dock->website) ? $dock->website : 'Not Available' }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="sidebar-wrap2 pt-140 w-100">
                            <div class="widget-box w-100">
                                <h3 class="thm-bg">Dock Owner</h3>
                                <div class="event-organizer w-100">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="event-organizer1">
                                            <div class="event-organizer-box w-100">
                                                <div class="event-organizer-info d-flex flex-wrap align-items-center w-100">
                                                    <div class="event-organizer-info-inner">
                                                        <h4 class="mb-0">{{ucfirst($dock->user->FullName)}}</h4>
                                                        <span class="thm-clr">Posted {{\Carbon\Carbon::parse($dock->created_at)->diffForHumans()}}</span>
                                                    </div>
                                                </div>
                                                <ul class="post-meta event-organizer-meta mb-0 list-unstyled w-100">
                                                    <li><i class="fas fa-map-marker-alt rounded-circle"></i> {{ ucfirst($dock->user->country )}}, {{ $dock->user->postal_code }}.</li>
                                                    <li><i class="far fa-envelope rounded-circle"></i>{{ $dock->user->email }}</li>
                                                    <li><i class="fas fa-phone rounded-circle"></i>{{ $dock->phone }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                          {{-- show ads here --}}
                        </div>
                    </div>
                </div>
            </div><!-- Event Detail Wrap 2 -->
        </div>
    </div>
</section>
@endsection
