@extends('layouts.main')
@section('title', 'eMaha - Form Student')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Form Data Student</strong>
        </div>
        <div class="card-body">
            <form action="/student/save" method="post">
                @csrf   

                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="Text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Pria">
                    <label>Pria</label>
                    <br>
                    <input type="radio" name="gender" class="form-check-input" value="Wanita">
                    <label>Wanita</label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control">
                        <option value="0" selected>Pilih Program Studi</option>
                        <option value="Sistem Infromasi" selected>Sistem Infromasi</option>
                        <option value="Informatika" selected>Informatika</option>
                        <option value="Ilmu Komputer" selected>Ilmu Komputer</option>
                        <option value="Sistem Komputer" selected>Sistem Komputer</option>    
                    </select>
                </div>
                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                    <label>Artificial Intellegent</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS">
                    <label>Database Engineer</label>
                </div>
                
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection 