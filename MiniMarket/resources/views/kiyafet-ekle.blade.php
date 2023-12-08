@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-body">
            <!--

                action > gideceğim adresi belirtirim
                method > göndereceğim methodu  belirtirim


            -->
           <form action="{{route('site.postCreateKiyafet')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input-normal">Normal input</label>
                <input type="text" class="form-control" id="input-normal" required  name="kiyafet_name">
              </div>
              <button type="submit" class="btn btn-sm btn-info"> Ekle</button>
           </form>


        </div>
    </div>
</div>
@endsection
