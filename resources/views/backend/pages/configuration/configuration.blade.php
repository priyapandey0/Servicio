@extends('backend.layout.app')
@section('title')
  <title>Configuration</title>
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Configuration</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Configuration</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="text-center text-dark"><b>Logo</b></h4>
                        <center>
                            <div class="col-md-4 mb-3">
                                <img src="{{ $configuration->logo }}" alt="No Image" style="height: 70px">
                            </div>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <center>
                                <div class="col-md-8 mb-3">
                                    <form action="{{ route('update-config-logo') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <input type="file" name="logo" id="logo" class="form-control">
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
         <div class="col-sm-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="text-center text-dark"><b>Favicon</b></h4>
                        <center>
                            <div class="col-md-4 mb-3">
                                <img src="{{ $configuration->favicon }}" alt="No Image" style="height: 70px">
                            </div>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <center>
                                <div class="col-md-8 mb-3">
                                    <form action="{{ route('update.config.favicon') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <input type="file" name="favicon" id="favicon" class="form-control">
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                        @error('favicon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="float-start">
                            <h5 class="text-dark"> <b>Save / Edit</b>
                            </h5>
                        </div>
                        <div class="float-end">
                            <form action="{{ route('update.config.record') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary"><span class="me-1">
                                        <i class="fa-solid fa-floppy-disk"></i></span>Save</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="" class="form-control"
                                value="{{ $configuration->title }}" placeholder="Title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Logo Alternative Text</label>
                            <input type="text" name="logo_alternative_text" id="" class="form-control"
                                value="{{ $configuration->logo_alternative_text }}" placeholder="Logo Alternative Text">
                            @error('logo_alternative_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <label for="sales_email" class="form-label">Sales Email</label>
                            <input type="email" name="sales_email" id="" class="form-control"
                                value="{{ $configuration->sales_email }}" placeholder="Sales Email">
                            @error('sales_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="service_email" class="form-label">Service Email</label>
                            <input type="email" name="service_email" id="" class="form-control"
                                value="{{ $configuration->service_email }}" placeholder="Service Email">
                            @error('service_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact_email" class="form-label">Contact Email</label>
                            <input type="email" name="contact_email" id="" class="form-control"
                                value="{{ $configuration->contact_email }}" placeholder="Contact Email">
                            @error('contact_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="number" name="contact_number" id="" class="form-control"
                                value="{{ $configuration->contact_number }}" placeholder="Contact Number">
                            @error('contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea type="text" name="contact_number" id="" class="form-control"
                                value="{{ $configuration->address }}" placeholder="Address">
                            </textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" id="" class="form-control"
                                value="{{ $configuration->meta_title }}" placeholder="Meta Title">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" id="" class="form-control"
                                value="{{ $configuration->meta_keywords }}" placeholder="Meta Keywords">
                            @error('meta_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea type="text" name="meta_description" id="" class="form-control"
                                value="{{ $configuration->meta_description }}" placeholder="Meta Description"
                                ></textarea>
                            @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="facebook_page_link" class="form-label">Facebook Page Link</label>
                            <input type="url" name="facebook_page_link" id="" class="form-control"
                                value="{{ $configuration->facebook_page_link }}" placeholder="Facebook Page Link">
                            @error('facebook_page_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="instagram_page_link" class="form-label">Instagram Page Link</label>
                            <input type="url" name="instagram_page_link" id="" class="form-control"
                                value="{{ $configuration->instagram_page_link }}" placeholder="Instagram Page Link">
                            @error('instagram_page_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
