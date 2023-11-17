@extends('layouts.master')

@section('content')


<div class="col-lg-6">
    <div class="card">
      <h4 class="card-title"><strong>Burası Süt Ürünleri Sayfasıdır</strong></h4>

      <div class="card-body">
        <p><code class="code-bold">.table-bordered</code> applies to <em>.table</em></p>
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
