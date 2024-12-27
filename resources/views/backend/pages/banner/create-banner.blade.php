@extends('backend.layout.app')
@section('title')
    <title>Create Banner</title>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Banner</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="float-start">
                            <h5 class="text-dark"> <b>Add New</b>
                            </h5>
                        </div>
                        <div class="float-end">
                            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <a href="{{ route('banner.index') }}" class="btn btn-danger btn-sm"><span>Back</span></a>
                                <button type="submit" class="btn btn-primary btn-sm"><span class="me-1"><i
                                            class="fa-solid fa-floppy-disk"></i></span>Save</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="title" class="form-label">Banner Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control"
                                placeholder="Banner Title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Banner Subtitle</label>
                            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}" class="form-control"
                                placeholder="Banner subtitle">
                            @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="banner" class="form-label">Banner Image</label>
                            <input type="file" name="banner" id="banner" class="form-control">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                          <div class="mb-3">
                            <label for="banner_link" class="form-label">Banner Link</label>
                            <input type="url" name="link" id="banner_link" class="form-control" placeholder="Banner Link">
                            @error('link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <Option value="">
                                    ---Select Status---
                                </Option>
                                <Option value="1">
                                    Enable
                                </Option>
                                <Option value="0">
                                    Disable
                                </Option>
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
