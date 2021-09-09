<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\SiteSetting;
use Livewire\Component;
use Livewire\WithFileUploads;

class WebsiteSetting extends Component
{
    use WithFileUploads;
    public $data, $website_banner, $website_logo, $mobile_logo, $website_header, $footer_description, $contact_us_description, $contact_us_address, $contact_us_email, $contact_us_banner, $rent_list_left_image, $reviews_section_background_image, $find_dock_header, $find_dock_banner;
    public $paypal_secret_key, $paypal_public_key,$mode;
    public $home_ad,$dock_list_ad,$contact_ad,$footer_ad;

    public function mount()
    {
        $this->data = SiteSetting::first();
        if ($this->data) {
            $this->paypal_secret_key = $this->data->paypal_secret_key;
            $this->paypal_public_key = $this->data->paypal_public_key;
            $this->mode = $this->data->mode;
            $this->home_ad = $this->data->home_page_ad;
            $this->contact_ad = $this->data->contact_page_ad;
            $this->dock_list_ad = $this->data->dock_list_page_ad;
            $this->footer_ad = $this->data->footer_ad;
            $this->website_header = $this->data->website_header;
            $this->footer_description = $this->data->footer_description;
            $this->contact_us_email = $this->data->contact_us_email;
            $this->contact_us_address = $this->data->contact_us_address;
            $this->contact_us_description = $this->data->contact_us_description;
            $this->find_dock_header = $this->data->find_dock_header;
        }
    }
    public function submit()
    {
        $this->validate([
            'paypal_secret_key' => 'required',
            'paypal_public_key' => 'required',
            'contact_us_email' => 'required|email',
            'website_header' => 'required',
            'footer_description' => 'required',
            'contact_us_description' => 'required',
            'contact_us_address' => 'required',
            'find_dock_header' => 'required',
            'mode' => 'required',
        ]);
        //  website-banner
        $banner =   $this->data->website_banner;
        //website logo
        $logo = $this->data->website_logo;
        //website logo
        $mobile_logo = $this->data->mobile_logo;
        //  contact us banner
        $contact_banner = $this->data->contact_us_banner;
        //  rentlist left banner
        $rent_list_left_bg = $this->data->rent_list_left_image;

        //  reviews banner
        $reviews_section_bg = $this->data->reviews_section_background_image;
        //Find a dock banner
        $dock_banner = $this->data->find_dock_banner;

        SiteSetting::updateOrCreate([
            'id' => $this->data->id,
        ], [
            'paypal_secret_key' => $this->paypal_secret_key,
            'paypal_public_key' => $this->paypal_public_key,
            'mode' => $this->mode,
            'home_page_ad' => $this->home_ad,
            'dock_list_page_ad' => $this->dock_list_ad,
            'contact_page_ad' => $this->contact_ad,
            'footer_ad' => $this->footer_ad,
            'website_banner'        => $this->website_banner
                ? $this->website_banner->store('website', 'public')
                : $banner,
            'website_logo'          => $this->website_logo
                ? $this->website_logo->store('website', 'public')
                : $logo,
            'logo_for_mobile'       => $this->mobile_logo
                ? $this->mobile_logo->store('website', 'public')
                : $mobile_logo,
            'website_header'        => $this->website_header,
            'footer_description'    => $this->footer_description,
            'contact_us_description' => $this->contact_us_description,
            'contact_us_banner'     => $this->contact_us_banner
                ? $this->contact_us_banner->store('website', 'public')
                : $contact_banner,
            'rent_list_left_image'  => $this->rent_list_left_image
                ? $this->rent_list_left_image->store('website', 'public')
                : $rent_list_left_bg,
            'find_dock_header' => $this->find_dock_header,
            'find_dock_banner' => $this->find_dock_banner
                ? $this->find_dock_banner->store('website', 'public')
                : $dock_banner,
            'reviews_section_background_image' => $this->reviews_section_background_image
                ? $this->reviews_section_background_image->store('website', 'public')
                : $reviews_section_bg,
            'contact_us_address'    => $this->contact_us_address,
            'contact_us_email'      => $this->contact_us_email,
        ]);
        $this->dispatchBrowserEvent('alert', ['message' => 'Site Setting Updated Succesfully']);
    }
    public function render()
    {
        $settings = SiteSetting::first();
        return view('livewire.admin.setting.website-setting', compact('settings'));
    }
}
