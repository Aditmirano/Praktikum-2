@extends('Layout.master')

@section('content')
<body>

<div class="Container m-5"
<div class="row justify-content-end">
<div class="card-body">
  <h1><font color="black"> Dosen</font></h1>
  <div class="card border-dark">
    <div class="card-header">
      <table class="table bg-info" style="color: ivory">
  <span class="border">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIP</th>
    </body>
  </span>
      @foreach($dosens as $index => $dosen)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$dosen}}</td>
            <td>{{$nip[$index]}}</td>
          </tr> 
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
  </table>

  @endsection