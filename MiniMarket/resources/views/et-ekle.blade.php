@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="card">
        <h4 class="card-title"><strong> Burası Et Ekleme Sayfası</strong> </h4>
        <div class="card-body">
            <form action="{{route('site.postCreateEt')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-normal">Et Adı</label>
                    <input type="text" class="form-control" id="input-normal">
                  </div> <div class="form-group">
                    <label for="input-normal">Et Kategorisi</label>
                    <input type="text" class="form-control" id="input-normal">
                  </div>
                <button class="btn btn-w-md btn-info" type="submit">
                    Et Ekle
                </button>




            </form>

        </div>
    </div>
</div>




@endsection
