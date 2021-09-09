<div>
    <div class="add-listing-form-wrap w-100">
        @if (session()->has('success'))
            <div class="alert alert-success mt-2">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="add-listing-inner-wrap w-100">
            <h3 class="mb-0">Edit Profile</h3>
            <div class="add-listing-inner w-100">
                <div class="row mrg20">

                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>Title</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-user"></i>
                            <select  wire:model.lazy="title">
                                <option value="" selected disabled>Title</option>
                                <option value="Mr">Mr</option>
                                <option value="Mr's">Mr's</option>
                                <option value="Ms">Ms</option>
                            </select>
                            @error('last_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>First Name</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-user"></i>
                            <input type="text"   placeholder="First Name"
                            required="required" wire:model.lazy="first_name">
                            @error('first_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>Last Name</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-industry"></i>
                            <input type="text"  placeholder="Last Name"
                                        required="required" wire:model.lazy="last_name">
                                        @error('last_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label>Country</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-map-marker-alt"></i>
                            <select wire:model="country">
                                <option value="" selected disabled>Select Country</option>
                                <option value="US">US</option>
                                <option value="UK">UK</option>
                                <option value="Pak">Pakistan</option>
                            </select>
                            @error('country') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>Postal Code</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-phone"></i>
                            <input type="text"  wire:model.lazy="postal_code" placeholder="Postal Code" >
                            @error('postal_code') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>Date Of Birth</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-fax"></i>
                            <input type="date" wire:model="date_of_birth"  >
                            @error('date_of_birth') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="thm-btn" wire:click.prevent="updateProfile"><i class="far fa-paper-plane" ></i>Save
            Changes</button>
    </div>
</div>
