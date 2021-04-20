@extends('layouts.master')
@section('title')
    <title>Cetak Laporan Data Peserta</title>
@endsection
@section('content')
    <div class="form-group container pt-5">
        <h2 align="center">Laporan Data Peserta</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.Reg</th>
                    <th scope="col">Nama</th>
                    <th scope="col">JK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Minat Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesertas as $peserta)
                    <tr>
                        <th scope="row">{{$peserta->id}}</th>
                        <td>{{$peserta->nama}}</td>
                        <td>{{$peserta->jk}}</td>
                        <td>{{$peserta->alamat}}</td>
                        <td>{{$peserta->agama}}</td>
                        <td>{{$peserta->asal_sekolah}}</td>
                        <td>{{$peserta->minat_jurusan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
    <script type="text/javascript">
        window.print();
    </script>   
@endsection