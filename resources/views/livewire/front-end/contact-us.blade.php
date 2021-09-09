<div>
    <div class="row">
        <div class="col-md-5 col-sm-12 col-lg-4">
            <div class="get-info w-100">
                <h2 class="mb-0">Get In Touch</h2>
                <p class="mb-0">{{ $site_setting->contact_us_description }}.</p>
                <ul class="get-info-list d-inline-block mb-0 list-unstyled w-100">
                    <li><i class="fas fa-map-marked-alt rounded-circle"></i>{{ $site_setting->contact_us_address }}</li>
                    {{-- <li><i class="fas fa-phone-volume rounded-circle"></i>+61 2 8236 9200 - Central Office</li> --}}
                    <li><i class="far fa-paper-plane rounded-circle"></i><a href="javascript:void(0);" title="">{{ $site_setting->contact_us_email }}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-lg-8">
            <div class="form-wrap w-100">
                <h2 class="mb-0">FeedBack</h2>
                <form class="w-100" wire:submit.prevent="submit" >
                    <div class="row">
                       <div class="col-md-12 col-sm-12 col-lg-12 mt-2">
                        <div class="form-group w-100">
                            <div class="response w-100">
                                @if (session()->has('success'))
                                <div class="alert alert-info">Your Message Is Send Successfully</div>
                                @endif
                            </div>
                        </div>
                    </div>

                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <input class="w-100 brd-rd5 mt-30 fname" type="text" wire:model="name" placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <input class="w-100 brd-rd5 mt-30 email" type="email" wire:model="email" placeholder="Email *">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 col-sm-6 col-lg-4">
                            <input class="w-100 brd-rd5 mt-30 subject" type="text" wire:model="subject" placeholder="Subject">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <textarea class="w-100 brd-rd5 mt-30 contact_message" wire:model="message" placeholder="Your Message"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button class="thm-btn mt-50 d-flex" id="submit"  type="submit" >SEND MESSAGE</button>
                            <div wire:loading.delay wire.loading.inline wire:target="submit">
                                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
