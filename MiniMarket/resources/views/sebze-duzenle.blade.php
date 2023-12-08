@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-body">

           <form action="{{route('site.postEditSebze')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input-normal">Normal input</label>
                <input type="text" class="form-control" id="input-normal"  name="categori_name" value="{{ $find->sebze_name}}">
                <input type="hidden" value="{{$find->id}}" name="id">
              </div>
              <button type="submit" class="btn btn-sm btn-info"> Ekle</button>
           </form>


        </div>
    </div>
</div>
@endsection
