@extends('layouts.base')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/update/{{$id}}" method="post">
                            @csrf
                        
                        <div class="form-group">
                            <input type="text" id="nama" name="kota_tujuan" class="form-control" placeholder="kota tujuan">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" id="nama" name="st_pulang" class="form-control" placeholder="st_pulang">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="nama" name="ket_pulang" class="form-control" placeholder="ket_pulang">
                        </div>
                        <button type="submit" class="btn btn-warning">update</button>
                        </div>
                        </div>
                    </form>


                        @endsection