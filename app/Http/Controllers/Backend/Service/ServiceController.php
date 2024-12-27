<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $service = Service::get();
        return view('backend.pages.services.services', [
            'services' => $service,
        ]);
    }

    public function create()
    {
        return view('backend.pages.services.create-service');
    }


    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'service_detail' => 'required',
            'status' => 'required',
            'feature' => 'required',
            'price' => 'required',
            'image' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required'

        ], [
            'required' => 'This field is required.',
        ]);


        $image = $request->file('image');
        if ($image && $image->isValid()) {
            $path = $image->getRealPath(); // Temporary file path
            $contents = file_get_contents($path);
            $image_base64 = "data:image/png;base64," . base64_encode($contents);
        }
        $abc = new Service();
        $abc->service_name = $request->service_name;
        $abc->service_detail = $request->service_detail;
        $abc->status = $request->status;
        $abc->feature = $request->feature;
        $abc->price = $request->price;
        $abc->image = $image_base64;
        $abc->meta_title = $request->meta_title;
        $abc->meta_keywords = $request->meta_keywords;
        $abc->meta_description = $request->meta_description;

        if ($abc->save()) {
            return redirect()->back()->with('success', 'Data Save successfully');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('backend.pages.services.edit-service', [
            'service' => $service
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $abc = Service::find($id);
        $request->validate([
            'service_name' => 'required',
            'service_detail' => 'required',
            'status' => 'required',
            'feature' => 'required',
            'price' => 'required|',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required'

        ], [
            'required' => 'This field is required.',
        ]);


        $image = $request->file('image');
        if ($image && $image->isValid()) {
            $path = $image->getRealPath(); // Temporary file path
            $contents = file_get_contents($path);
            $image_base64 = "data:image/png;base64," . base64_encode($contents);
        }else{
            $image_base64 = $abc->image;
        }
        // Retrieve the service by ID

        if (!$abc) {
            return redirect()->back()->with('error', 'Service not found');
        }

        // Update the service details
        $abc->service_name = $request->service_name;
        $abc->service_detail = $request->service_detail;
        $abc->status = $request->status;
        $abc->feature = $request->feature;
        $abc->price = $request->price;
        $abc->image = $image_base64;
        $abc->meta_title = $request->meta_title;
        $abc->meta_keywords = $request->meta_keywords;
        $abc->meta_description = $request->meta_description;

        // Save the updated data
        $abc->save(); // Use save() for updating

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    Service::find($id)->delete();
    return redirect()->back()->with('Success', 'This messages delete successfully!!');
    }
}
