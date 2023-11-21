@extends('layouts.master')

@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-6">
                        <h4 class="card-title"><strong>Tüm Kategoriler</strong></h4>
                    </div>
                    <div class="col-sm-6">
                        <a  href ="{{route('site.getCreateCategori')}}" class="btn btn-w-md btn-bold btn-info" style="float: right">Kategori Ekle</a>

                    </div>
                  </div>

                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Kategori Adı</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categori as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->categori_name}}</td>
                            <td>Düzenlenecek</td>
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
<a href="{{route('site.getCreateCategori')}}" class=" btn btn-sm"> Git</a>
@endsection
