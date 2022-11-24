@extends('layouts.main')

@section('container')
<h1>DATA MAHASISWA</h1>

<div class="card-tools">
    <a href="{{ route('crud') }}" class=""btn btn-success>Tambah Data</a>
</div>
<div> 
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>Kampus</th>
            <th>Prodi</th>
            <th>KTP</th>
            <th>Ijazah</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>
@endsection