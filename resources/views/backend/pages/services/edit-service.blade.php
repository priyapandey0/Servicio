@extends('backend.layout.app')
@section('title')
    <title>Edit Service</title>
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Services</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Services</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="float-start">
                            <h5 class="text-dark"> <b>Edit / Save</b>
                            </h5>
                        </div>
                        <div class="float-end">
                            <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf   
                                @method('PUT')
                                <a href="{{ route('service.index') }}" class="btn btn-danger btn-sm"><span>Back</span></a>
                                <button type="submit" class="btn btn-primary btn-sm"><span class="me-1"><i
                                class="fa-solid fa-floppy-disk"></i></span>Save</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="service_name" class="form-label">Service Name</label>
                            <input type="text" name="service_name" id="service_name" value="{{ $service->service_name }}"
                                class="form-control" placeholder="Service Name">
                            @error('service_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="editor" class="form-label">Service Detail</label>
                            <textarea name="service_detail" id="editor">{!! $service->service_detail !!}</textarea>
                            @error('service_detail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Show Price</label>
                            <input type="text" name="price" id="price" value="{{ $service->price }}"
                                class="form-control" placeholder="Show Price">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" row">
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 pt-3">
                                <img src="{{ $service->image }}" alt="No Image" height="60">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" class="form-control"
                                value="{{ $service->meta_title }}" placeholder="Meta Title">
                            @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                                value="{{ $service->meta_keywords }}" placeholder="Meta Keywords">
                            @error('meta_keywords')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" rows="5" class="form-control"
                                placeholder="Meta Description">{{ $service->meta_description }}</textarea>
                            @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="feature" class="form-label">Featured Services</label>
                            <select name="feature" id="feature" class="form-select">
                                @if($service->feature == 1)
                                <Option value="1">
                                    Yes
                                </Option>
                                <Option value="0">
                                    No
                                </Option>
                                @else
                                <Option value="0">
                                    No
                                </Option>
                                <Option value="1">
                                    Yes
                                </Option>
                                @endif
                            </select>
                            @error('feature')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                          <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                @if($service->status == 1)
                                <Option value="1">
                                    Enable
                                </Option>
                                <Option value="0">
                                    Disable
                                </Option>
                                @else
                                <Option value="0">
                                    Disable
                                </Option>
                                <Option value="1">
                                    Enable
                                </Option>
                                @endif
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
