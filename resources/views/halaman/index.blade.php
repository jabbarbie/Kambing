@extends('layout.index',['deskripsi' => 'Daftar Unit Kendaraan yang masuk'])
@section('title','Unit Kendaraan')
@section('main')
<div class="box">
  <div class="box-header">
      <h3 class="box-title"></h3>
      <div class="pull-left">
        <button class="btn btn-primary">Tambah</button>
      </div>
  </div>
  <div class="box-body">
    <table id="tablenya" class="table">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
      </tr>
    </tbody>
    </table>
  </div>

</div>
@endsection
@stack('oke')
