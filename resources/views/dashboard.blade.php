@extends('layouts.base')

@section('content')

<a href="/create" class="btn btn-primary">+tambah data</a>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">kode dinas</th>
      <th scope="col">nip</th>
      <th scope="col">nama</th>
      <th scope="col">kota asal</th>
      <th scope="col">status asal</th>
      <th scope="col">ket asal</th>
      <th scope="col">kota tujuan</th>
      <th scope="col">status pulang</th>
      <th scope="col">ket pulang</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach(DB::table('tbl_dinas_luar')->get() as $item)
    <tr>
        </div>
   
</div>

</div>
      <th scope="row">{{$item->kd_dl}} </th>
      <td>{{$item->nip}}</td>
      <td>{{$item->nama}}</td>
      <td>{{$item->kota_asal}}</td>
      <td>{{$item->st_asal}}</td>
      <td>{{$item->ket_asal}}</td>
      <td>{{$item->kota_tujuan}}</td>
      <td>{{$item->st_pulang}}</td>
      <td>{{$item->ket_pulang}}</td>
    <td>
           <a href="/update/{{$item->kd_dl}}" class="btn btn-dark">update</a>
<a href="/delete/{{$item->kd_dl}}" class="btn btn-danger">delete</a></td>
  
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection