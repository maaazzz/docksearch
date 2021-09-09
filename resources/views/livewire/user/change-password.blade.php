<div>
    <div class="add-listing-form-wrap w-100">
        <div class="add-listing-inner-wrap w-100">
            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
            <h3 class="mb-0">Change Password</h3>
            <div class="add-listing-inner w-100">
             <form>
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label>Old Password</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-key"></i>
                            <input type="password" wire:model.lazy="old_password" placeholder="Old Password">
                            @error('old_password') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>New Password</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-key"></i>
                            <input type="password" wire:model.lazy="password"  placeholder="New Password">
                            @error('password') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label>Confirm Password</label>
                        <div class="field w-100 position-relative">
                            <i class="fas fa-key"></i>
                            <input type="password" wire:model.lazy="password_confirmation" placeholder="Confirm Password">
                            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
             </form>
            </div>
        </div>
        <button class="thm-btn" wire:click.prevent="updatePassword"><i class="far fa-paper-plane"></i>Save
            Password</button>
    </div>
</div>
