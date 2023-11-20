@extends('layouts.master')
@section('content')

<div class="main-content">
    <div class='card'>
        <h4 class="card-title"><strong> Burası Meyve Ekleme Sayfası</strong></h4>
        <div class="card-body">
            <form action="{{route('site.postCreateMeyve')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input-normal">Meyve Adı</label>
                    <input type="text" class="form-control" id="input-normal">
                </div> <div class="form-group">
                    <label for="input-normal">Meyve Kategorisi</label>
                    <input type="text" class="form-control" id="input-normal">
                    </div>
                    <button class="btn btn-w-md btn-info" type="submit">
                        Meyve Ekle</button>
            </form>
        </div>
    </div>
</div>


@endsection
