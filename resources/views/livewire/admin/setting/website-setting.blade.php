<div>
    <div class="col-md-8 offset-md-2">
        <div class="card mb-4">
            <h6 class="card-header">
                Change Website Setting
            </h6>
            <div class="card-body">
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label">Paypal Secret Key( <span class="text-danger">Please double check your
                                API key's</span> )</label>
                        <input type="text" class="form-control" placeholder="Paypal Secret API Key"
                            wire:model.lazy="paypal_secret_key">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Paypal Client Key</label>
                        <input type="text" class="form-control" placeholder="Paypal Public API Key"
                            wire:model.lazy="paypal_public_key">
                    </div>
                    <div class="form-group" wire:ignore>
                        <label class="form-label">Payment Mode</label>
                        <select name="mode" class="form-control" wire:model='mode'>
                            <option value="sandbox" {{ $mode == 'sandbox' ? 'selected' : '' }}>Sandbox Mode</option>
                            <option value="live" {{ $mode == 'live' ? 'selected' : '' }}>Live Mode</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Home Page Amazon Ad</label>
                        <textarea wire:model.lazy="home_ad" cols="30" rows="7" class="form-control"
                                placeholder="Home Page Ad"></textarea>

                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Us Page Amazon Ad</label>
                        <textarea wire:model.lazy="contact_ad" cols="30" rows="7" class="form-control"
                        placeholder="Contact Us Page Amazon Ad"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Footer Amazon Ad</label>
                        <textarea wire:model.lazy="footer_ad" cols="30" rows="7" class="form-control"
                        placeholder="Footer Amazon Ad"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dock List Page Amazon Ad</label>
                        <textarea wire:model.lazy="dock_list_ad" cols="30" rows="7" class="form-control"
                        placeholder="Dock List Page Amazon Ad"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Website Banner</label>
                        <input type="file" class="form-control-file" wire:model="website_banner">
                        @if ($settings['website_banner'])
                            <img class="img-fluid mt-1" src="{{ url('storage/' . $settings['website_banner']) }}"
                                alt="" width="200" height="150">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Website Logo(logo must be png* 196 x 57)</label>
                        <input type="file" wire:model="website_logo" class="form-control-file">
                        @if ($settings['website_logo'])
                            <img class="img-fluid mt-1" src="{{ url('storage/' . $settings['website_logo']) }}" alt=""
                                width="200" height="150">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Mobile Logo(background must be black color)</label>
                        <input type="file" wire:model="mobile_logo" class="form-control-file">
                        @if ($settings['logo_for_mobile'])
                            <img class="img-fluid mt-1" src="{{ url('storage/' . $settings['website_logo']) }}" alt=""
                                width="200" height="150">
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">Banner Header</label>
                        <input type="text" class="form-control" placeholder="Banner Header"
                            wire:model.lazy="website_header">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Footer Description</label>
                        <textarea wire:model.lazy="footer_description" cols="30" rows="7" class="form-control"
                            placeholder="Footer Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Us Description</label>
                        <textarea wire:model.lazy="contact_us_description" cols="30" rows="7" class="form-control"
                            placeholder="Website Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Us Address</label>
                        <input type="text" class="form-control" placeholder="contact us address"
                            wire:model.lazy="contact_us_address">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Us Email</label>
                        <input type="text" class="form-control" placeholder="Contact Us Email"
                            wire:model.lazy="contact_us_email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Us Banner</label>
                        <input type="file" class="form-control-file" wire:model="contact_us_banner">
                        @if ($settings['contact_us_banner'])
                            <img class="img-fluid mt-1" src="{{ url('storage/' . $settings['contact_us_banner']) }}"
                                alt="" width="200" height="10">
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Rent List Background(<span class="text-danger">We dont recommend to
                                change this photo</span> )</label>
                        <input type="file" class="form-control-file" wire:model="rent_list_left_image">
                        @if ($settings['rent_list_left_image'])
                            <img class="img-fluid mt-1"
                                src="{{ url('storage/' . $settings['rent_list_left_image']) }}" alt="" width="200"
                                height="10">
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Reviews Section Background</label>
                        <input type="file" class="form-control-file" wire:model="reviews_section_background_image">
                        @if ($settings['reviews_section_background_image'])
                            <img class="img-fluid mt-1"
                                src="{{ url('storage/' . $settings['reviews_section_background_image']) }}" alt=""
                                width="200" height="10">
                        @endif
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Find Dock Section Header</label>
                        <input type="text" class="form-control" wire:model.lazy="find_dock_header">
                        @error('find_dock_header')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Find Dock Section Background</label>
                        <input type="file" class="form-control-file" wire:model="find_dock_banner">
                        @if ($settings['find_dock_banner'])
                            <img class="img-fluid mt-1" src="{{ url('storage/' . $settings['find_dock_banner']) }}"
                                alt="" width="200" height="10">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-info d-flex">Submit <div wire:loading wire:loading.delay
                            wire:target="submit" class="ml-3 mt-1 loader">Loading...</div></button>
                </form>
            </div>
        </div>
    </div>
</div>
