@extends('layout.master')

@section('content')


  <div class="Container m-5"
  <div class="row justify-content-center ">
    <div class="card border-danger">
      <div class="card-header">
        <h1><font color="black"> Matkul</font></h1>
        <table class="table bg-info" style="color: ivory">  
  <span class="border-bottom">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">SKS</th>
      </tr>
    </thead>
  </span>
    <tbody>
    
      @foreach($matkuls as $index => $matkul)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$matkul}}</td>
            <td>{{$sks[$index]}}</td>
          </tr> 
        </div>
        </div>
          @endforeach

          @endsection