@extends('layouts.master')



@section('content')
<div class="col-lg-6">
    <div class="card">
      <h4 class="card-title"><strong>Alternative</strong> thead</h4>

      <div class="card-body">
        <p><code class="code-bold">.thead-light</code> or <code class="code-bold">.thead-dark</code> applies to <em>thead</em></p>
        <table class="table">
          <thead class="thead-light">
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