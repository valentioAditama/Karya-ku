@extends('layouts.app-admin')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Users</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Email</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($getUsersData as $dataUsers)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $dataUsers->fullname}}</td>
                  <td>{{ $dataUsers->email}}</td>
                  <td>{{ $dataUsers->status}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Laporan</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">users</th>
                  <th scope="col">comments</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($getLaporanData as $dataLaporan)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $dataLaporan->fullname}}</td>
                  <td>{{ $dataLaporan->comment}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Community</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">users</th>
                  <th scope="col">name community</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($getCommunityData as $dataCommunity)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $dataCommunity->fullname}}</td>
                  <td>{{ $dataCommunity->name_community}}</td>
                  <td>{{ $dataCommunity->status}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="header">
            <h4 class="title">Community Comments</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">users</th>
                  <th scope="col">comment</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($getCommentsData as $dataCommunity)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $dataCommunity->fullname}}</td>
                  <td>{{ $dataCommunity->comment}}</td>
                  <td>{{ $dataCommunity->status}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Contact Us</h4>
            <p class="category">Last Update</p>
          </div>
          <div class="content">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">users</th>
                  <th scope="col">subject</th>
                  <th scope="col">messages</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($getContactUsData as $dataContactUs)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $dataContactUs->fullname}}</td>
                  <td>{{ $dataContactUs->subject}}</td>
                  <td>{{ $dataContactUs->messages}}</td>
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
@endSection
<!-- Notification -->
@include('components.notifications')