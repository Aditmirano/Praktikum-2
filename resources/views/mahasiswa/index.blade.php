@extends('layout.master')

@section('content')


<div class="Container m-4"
<div class="row justify-content-center ">
    <div class="card border-danger">
        <div class="card-header">
          <h1><font color="black"> Mata Kuliah</font></h1>
<table class="table bg-info" style="color: azure">
    <span class="border">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
      </tr>
    </thead>
    </span>
    
      @foreach($mahasiswas as $index => $mahasiswa)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$mahasiswa}}</td>
            <td>{{$nim[$index]}}</td>
          </tr> 
          </Div>
          @endforeach
    </tbody>
  </table>
  @endsection