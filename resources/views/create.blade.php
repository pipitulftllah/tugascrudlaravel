@extends('layouts.base')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/create" method="post">
                    @csrf
 
                    
                        <div class="form-group">
                            <input type="text" id="nama" name="nip" class="form-control" placeholder="nip">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="nama" name="kota_asal" class="form-control" placeholder="kota_asal">
                           
                        </div>
                        <div class="form-group">
                            <input type="text" id="nama" name="st_asal" class="form-control" placeholder="st_asal">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" id="nama" name="ket_asal" class="form-control" placeholder="ket_asal">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="nama" name="kota_tujuan" class="form-control" placeholder="kota_tujuan">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" id="nama" name="st_pulang" class="form-control" placeholder="st_pulang">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="nama" name="ket_pulang" class="form-control" placeholder="ket_pulang">
                        </div>
                        <button type="submit" class="btn btn-warning">submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection