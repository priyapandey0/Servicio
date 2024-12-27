<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::get();
        return view('backend.pages.banner.banners', [
            'banners' => $banner,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.banner.create-banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'banner' => 'required',
            'link' => 'required',
            'status' => 'required'
        ], [
            'required' => 'This field is required.',
        ]);
        $banner = $request->file('banner');
        if ($banner && $banner->isValid()) {
            $path = $banner->getRealPath();
            $contents = file_get_contents($path);
            $base64 = "data:image/png;base64," . base64_encode($contents);
        }

        $record = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'banner' => $base64,
            'status' => $request->status,
            'link' => $request->link,
        ];

        Banner::insert($record);
        return redirect()->back()->with('success', 'New banner successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner = Banner::find($id);
        return view('backend.pages.banner.single-banner');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        return view('backend.pages.banner.edit-banner', [
            'banner' => $banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $abc = Banner::find($id);
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'banner' => 'required',
            'status' => 'required|',
            'link' => 'required',


        ], [
            'required' => 'This field is required.',
        ]);


        $banner = $request->file('banner');
        if ($banner && $banner->isValid()) {
            $path = $banner->getRealPath(); // Temporary file path
            $contents = file_get_contents($path);
            $image_base64 = "data:image/png;base64," . base64_encode($contents);
        } else {
            $image_base64 = $abc->banner;
        }
        // Retrieve the service by ID

        if (!$abc) {
            return redirect()->back()->with('error', 'Service not found');
        }

        // Update the service details
        $abc->title = $request->title;
        $abc->subtitle = $request->subtitle;
        $abc->banner = $image_base64;
        $abc->status = $request->status;
        $abc->link = $request->link;

        // Save the updated data
        $abc->save(); // Use save() for updating

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Banner::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Banner delete successfully.');
    }
}
