@extends('layouts.master')
@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-body">

           <form action="{{route('site.postEditEt')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input-normal">Normal input</label>
                <input type="text" class="form-control" id="input-normal" required  name="et_name" value="{{$find->et_name}}">
                <input type="hidden" name="id" value="{{$find->id}}">
              </div>
              <button type="submit" class="btn btn-sm btn-info"> Ekle</button>
           </form>


        </div>
    </div>
</div>
@endsection
