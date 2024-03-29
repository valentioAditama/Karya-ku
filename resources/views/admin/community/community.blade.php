@extends('layouts.app-admin')

@section('content')

<!-- SideBar --><!-- End SideBar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Community</h4>
                        <p class="category">Last Update</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <form action="{{ route('admin.community.search') }}" method="get">
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
                                    <th scope="col">users</th>
                                    <th scope="col">name community</th>
                                    <th scope="col">Description Community</th>
                                    <th scope="col">status</th>
                                    <th scope="col">thumbnail Comunnity</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($getCommunityData as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->fullname}}</td>
                                    <td>{{ $data->name_community}}</td>
                                    <td>{{ $data->description}}</td>
                                    <td>{{ $data->status}}</td>
                                    <td>
                                        <a href="/storage/community/thumbnail/{{$data->path ? $data->path : '-' }}">{{ $data->path ? "see photo" : "-" }}</a>
                                    </td>
                                    <td>
                                        @if(Auth::user()->role == "admin")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_community{{$data->id}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        @elseif(Auth::user()->role == "superuser")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_community{{$data->id}}">
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
@include('components.admin.modal.status-community')

<!-- Notification -->
@include('components.notifications')

@endSection