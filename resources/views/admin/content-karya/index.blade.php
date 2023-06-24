@extends('layouts.app-admin')

@section('content')

<!-- SideBar --><!-- End SideBar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Content Karya</h4>
                        <p class="category">Last Update</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <form action="" method="post">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="search" placeholder="search">
                                </div>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Search</button> &nbsp;
                                </div>
                            </form>
                            <button class="btn btn-success btn-fill" data-toggle="modal" data-target="#modal-add">
                                <i class="fa-solid fa-add"></i> Add Data
                            </button>
                        </div>
                        <table class="table table-striped h5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Users</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image content</th>
                                    <th scope="col">Thumbnail content</th>
                                    <th scope="col">Video content</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($getDataContent as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->fullname}}</td>
                                    <td>{{ $data->title}}</td>
                                    <td>{{ $data->sub_title}}</td>
                                    <td>{{ $data->category}}</td>
                                    <td>{{ $data->description}}</td>
                                    <td>
                                        <a href="/storage/content/image/{{$data->path_image ? $data->path_image : '-' }}">{{ $data->path_image ? "see photo" : "-" }}</a>
                                    </td>
                                    <td>
                                        <a href="/storage/content/thumbnail/{{$data->path_thumbnail ? $data->path_thumbnail : '-' }}">{{ $data->path_thumbnail ? "see photo" : "-" }}</a>
                                    </td>
                                    <td>
                                        <a href="/storage/content/video/{{$data->path_video ? $data->path_video : '-' }}">{{ $data->path_video ? "see Video" : "-" }}</a>
                                    </td>
                                    <td>{{ $data->status}}</td>
                                    <td>
                                        @if(Auth::user()->role == "admin")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_content_karya{{$data->id}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        @elseif(Auth::user()->role == "superuser")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_content_karya{{$data->id}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a class="btn btn-primary btn-fill btn-sm" data-toggle="modal" data-target="#modal-edit{{$data->id}}">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-fill btn-sm" data-toggle="modal" data-target="#modal-delete{{$data->id}}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal admin status user -->
@include('components.admin.modal.status-content-karya')
<!-- Notification -->
@include('components.notifications')

@endSection