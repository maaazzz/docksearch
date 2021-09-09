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
