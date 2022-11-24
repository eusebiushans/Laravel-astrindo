@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    <div class="col-md-7">
        <h1>Form Pendaftaran Mahasiswa</h1>
        <form action="" method="post" class="">
            <div class="mb-3 ">
                <label for="inputEmail" class="form-label"></label>
                <input type="email" name="email" class="form-control @error('name')is-invalid @enderror" id="" placeholder="name@example.com" required value="{{ old('') }}">
            </div>
            <div class="mb-3 ">
                <label for="inputNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="Nama" name="name" placeholder="nama lengkap" required>
            </div>
            <div class="mb-3 ">
                <label for="inputKelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="Kelamin" name="gender" placeholder="jenis kelamin" required>
            </div>
            <div class="mb-3 form-group">
                <label for="inputTanggal" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="Tanggal" name="tgllhr" placeholder="tanggal lahir" required>
            </div>
            <div class="mb-3 ">
                <label for="inputAgama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="Agama" name="agama" placeholder="agama" required>
            </div>
            <div class="mb-3 ">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="alamat" required>
            </div>
            <div class="mb-3 ">
                <label for="inputPendidikan" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="Pendidikan" name="pnddkn" placeholder="pendidikan terakhir" required>
            </div>
            <div class="mb-3 ">
                <label for="selectKampus" class="form-label">Lokasi Kampus</label>
                <select class="form-select" name="kampus" aria-label="Default select example">
                    <option selected>Pilih Kampus</option>
                    <option value="1">Universitas Tangerang</option>
                    <option value="2">Universitas Jakarta</option>
                    <option value="3">Universitas Bekasi</option>
                </select>
            </div>
            <div class="mb-3 ">
                <label for="selectProdi" class="form-label">Program Studi</label>
                <select class="form-select" name="prodi" aria-label="Default select example">
                    <option selected>Pilih Prodi</option>
                    <option value="1">Teknik Sipil</option>
                    <option value="2">Teknik Industri</option>
                    <option value="3">Teknik Informatika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formKTP" class="form-label">Upload KTP</label>
                <input class="form-control" type="file" id="formKTP" name="ktp">
            </div>
            <div class="mb-3">
                <label for="formIjazah" class="form-label">Upload Ijazah</label>
                <input class="form-control" type="file" id="formIjazah" name="ijazah">
            </div>
            <button type="submit" href="/profile" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
    
@endsection