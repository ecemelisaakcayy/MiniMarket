@extends('layouts.master')

@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-6">
                        <h4 class="card-title"><strong>Kıyafetler</strong></h4>
                    </div>
                    <div class="col-sm-6">
                        <a  href ="{{route('site.getCreateKiyafet')}}" class="btn btn-w-md btn-bold btn-info" style="float: right">Kıyafet Ekle</a>

                    </div>
                  </div>

                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Kıyafet Adı</th>
                          <th>Eklenme Tarihi</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kiyafet as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>



                                {{$item->kiyafet_name}}</td>
                            <td>{{$item->created_at->format('d.m.Y')}}</td>
                            <td>
                                <div class="dropdown ">
                                    <a class="text-lighter" href="#" data-toggle="dropdown" aria-expanded="true"><i class="ti-more-alt rotate-90"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right " x-placement="bottom-end" style="position: absolute; will-change: top, left; top: 19px; left: -147px;">
                                      <a class="dropdown-item" href="{{route('site.getEditKiyafet',array('id'=>$item->id))}}"><i class="fa fa-fw fa-pencil"></i> Düzenle </a>
                                      <a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Sil</a>

                                    </div>
                                  </div>
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
<a href="{{route('site.getCreateKiyafet')}}" class=" btn btn-sm"> Git</a>
@endsection
