@extends('layouts.app-admin')

@section('content')

<!-- SideBar --><!-- End SideBar -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Users</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <div class="row">
              <form action="" method="post">
                <div class="col-md-3">
                  <input type="text" class="form-control" name="search" placeholder="search">
                </div>
                <div class="col-1">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
            <table class="table table-striped h5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Email</th>
                  <th scope="col">role</th>
                  <th scope="col">status</th>
                  <th scope="col">Role Job</th>
                  <th scope="col">Location</th>
                  <th scope="col">Image Profile</th>
                  <th scope="col">Image Banner</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($getDataUser as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->fullname }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->role }}</td>
                  <td>{{ $data->status }}</td>
                  <td>{{ $data->role_job ? $data->role_job : "-" }}</td>
                  <td>{{ $data->location ? $data->location : "-"}}</td>
                  <td>
                    <a href="/storage/user/profile/{{$data->image_profile ? $data->image_profile : '-' }}">{{ $data->image_profile ? "see photo" : "-" }}</a>
                  </td>
                  <td>
                    <a href="/storage/user/banner/{{ $data->image_banner ? $data->image_banner : '-' }}">{{ $data->image_banner ? "see photo" : "-" }}</a>
                  </td>
                  <td>
                    @if(Auth::user()->role == "admin")
                    <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_user{{$data->id}}">
                      <i class="fa-solid fa-eye"></i>
                    </a>
                    @else
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
@include('components.admin.modal.status-users')

<!-- Notification -->
@include('components.notifications')


@endSection