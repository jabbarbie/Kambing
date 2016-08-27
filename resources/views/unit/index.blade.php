@extends('layout.index',['deskripsi' => 'Daftar Unit Kendaraan yang masuk'])
@section('title','Unit Kendaraan')
@section('main')
<div class="box">
  <div class="box-header">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahUnit">Tambah</button>
  </div>
  <div class="box-body">
    <table id="tablenya" title="Unit" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Nopol</th>
        <th>Kendaraan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $d)
        <tr>
          <td> {{ $index+1 }} </td>
          <td> {{ $d->tertanggung }}</td>
          <td> {{ $d->nopol }}</td>
          <td> {{ $d->jenis }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>

</div>
@include('layout.modal',['judul' => 'Tambah Unit', 'form' => 'unit.form'])
@endsection
