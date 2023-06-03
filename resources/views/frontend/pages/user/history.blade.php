@extends('frontend.include.template')
@section('title','Info Berita')
@section('content')

@include('frontend.include.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5 mt-5">
            {{-- <img src="{{ asset('assets/images/logo.png') }}" class="rounded mx-auto d-block" width="150" alt=""> --}}
        </div>
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($carts as $item)
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @if($item->status == 1)
                                        Sudah Pesan & Belum dibayar
                                    @else
                                        Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($item->jumlah_harga) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $item->id }}" class="btn btn-primary"><i class="fa fa-file-text-o"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection