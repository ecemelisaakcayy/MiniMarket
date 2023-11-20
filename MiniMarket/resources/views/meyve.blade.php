@extends('layouts.master')



@section('content')

<div class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title"><strong>Burası Meyve Ürünleri Sayfasıdır</strong></h4>
                </div>
                <div class="col-md-6">
                    <a href="{{route('site.getCreateMeyve')}}" class="btn btn-w-md btn-bold btn-primary" style="float: right;"> Meyve Ekle</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
