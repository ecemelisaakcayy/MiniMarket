@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="card">
        <h4 class="card-title"><strong> Burası Sebze Ekleme Sayfası</strong> </h4>
        <div class="card-body">
            <form action="{{route('site.postCreateSut')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-normal">Süt Adı</label>
                    <input type="text" class="form-control" id="input-normal">
                  </div> <div class="form-group">
                    <label for="input-normal">Süt Kategorisi</label>
                    <input type="text" class="form-control" id="input-normal">
                  </div>
                <button class="btn btn-w-md btn-info" type="submit">
                    Süt Ekle
                </button>




            </form>

        </div>
    </div>
</div>




@endsection
