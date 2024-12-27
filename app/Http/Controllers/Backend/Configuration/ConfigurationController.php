<?php

namespace App\Http\Controllers\Backend\Configuration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configuration;
use Illuminate\Support\Facades\DB;

class ConfigurationController extends Controller
{
    public function configpage()
    {
        $configuration = Configuration::where('id', 1)->first();

        return view('backend.pages.configuration.configuration', ['configuration' => $configuration]);
    }

    public function updateRecord(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'logo_alternative_text' => 'required',
            'contact_email' => 'required',
            'sales_email' => 'required',
            'service_email' => 'required',
            'contact_number' => 'required|digits:10',
            'facebook_page_link' => 'required',
            'instagram_page_link' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ], [
            'required' => 'This field is required.',
        ]);

        $record = [
            'title' => $request->title,
            'logo_alternative_text'  => $request->logo_alternative_text,
            'contact_email' => $request->contact_email,
            'sales_email' =>  $request->sales_email,
            'service_email' =>  $request->service_email,
            'contact_number' =>  $request->contact_number,
            'facebook_page_link' => $request->facebook_page_link,
            'instagram_page_link' => $request->instagram_page_link,
            'meta_title' => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];

        DB::table('configuration')->update($record);
        return redirect()->back()->with('success', 'Save Successfully.');
    }


    public function updateLogo(Request $request) {
        $request->validate([
            'logo' => 'required',
        ], [
            'required' => 'This field is required.',
        ]);
        $logo = $request->file('logo');
        if ($logo && $logo->isValid()) {
            $path = $logo->getRealPath(); // Temporary file path
            $contents = file_get_contents($path);
            $image_base64 = "data:image/png;base64," . base64_encode($contents);
        }
        DB::table('configuration')->update(['logo' => $image_base64]);
        return redirect()->back()->with('success', 'Save Successfully.');
    }

    public function updateFavicon(Request $request) {
        $request->validate([
            'favicon' => 'required',
        ], [
            'required' => 'This field is required.',
        ]);
        $favicon = $request->file('favicon');
        if ($favicon && $favicon->isValid()) {
            $path = $favicon->getRealPath(); // Temporary file path
            $contents = file_get_contents($path);
            $image_base64 = "data:image/png;base64," . base64_encode($contents);
        }
        DB::table('configuration')->update(['favicon' => $image_base64]);
        return redirect()->back()->with('success', 'Save Successfully.');
    }
    
}
