@extends('backend.layout.app')
@section('title')
    <title>Banners</title>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Banners</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Banners</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <div class="input-group  mb-3">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0 me-2" type="checkbox" value="Select All">Select All
                                </div>
                            </div>
                        </div>
                        <div class="float-end">
                            <button type="submit" class="btn btn-danger btn-sm">Del Selected</button>
                            <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm"><span class="me-1"><i
                                        class="fa-solid fa-plus"></i></span>Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th> Subtitle</th>
                                    <th>Banner</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($banners->isNotEmpty())
                                    <?php
                                    $id = 1;
                                    ?>
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <td>
                                                <span>{{ $id }}</span>
                                                <input type="checkbox" name="" id="">
                                            </td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->subtitle }}</td>
                                            <td><img src="{{ $banner->banner }}" alt="" height="50"></td>
                                            <td>{{ $banner->link }}</td>
                                            <td>{{ $banner->status }}</td>
                                            <td>
                                                <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('banner.edit', $banner->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm "
                                                        onclick="return confirm('Are you sure u want to delete?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                        $id++;
                                        ?>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
