@extends('layouts.base')


@section('content')

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">blank page</h1>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('dashboard.create') }}" class="btn btn-md btn-success mb-3">TAMBAH Data</a>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Status Asal</th>
                            <th scope="col">Keterangan Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Status Tujuan</th>
                            <th scope="col">Keterangan Tujuan</th>
                            <th scope="col">AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @forelse ($dinas_luar as $dinas)
                            <tr>
                                <td>{{ $dinas->nip }}</td>
                                <td>{!! $dinas->nama !!}</td>
                                <td>{!! $dinas->kota_asal !!}</td>
                                <td>{!! $dinas->st_asal !!}</td>
                                <td>{!! $dinas->ket_asal !!}</td>
                                <td>{!! $dinas->kota_tujuan !!}</td>
                                <td>{!! $dinas->st_pulang !!}</td>
                                <td>{!! $dinas->ket_pulang !!}</td>
                                
                            
                                <td class="text-center">
                                    <a href="{{ route('dashboard.edit',['dashboard'=> $dinas->kd_dl]) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dashboard.destroy',['dashboard'=> $dinas->kd_dl]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse
                        
                        </tbody>
                    </table>  
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection