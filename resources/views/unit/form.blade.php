<div class="form-group has-feedback {{ $errors->has('tertanggung') ? ' has-error' : '' }}">
  {!! Form::hidden('_token', csrf_token()) !!}
  {!! Form::label('tertanggung', 'Nama Tertanggung' , ['class' => 'control-label']) !!}
  {!! Form::text('tertanggung', null , ['class' => 'form-control','placeholder' => 'Nama pemilik kendaraan atau orang yang menjadi tertanggung','autofocus']) !!}
  @if ($errors->has('tertanggung'))<span class="help-block"> {{ $errors->first('tertanggung') }}</span>@endif
</div>
<div class="form-group {{ $errors->has('nopol') ? ' has-error' : '' }}">
  {!! Form::label('nopol', 'Nomor Polisi' , ['class' => 'control-label']) !!}
  {!! Form::text('nopol', null , ['class' => 'form-control','placeholder' => 'Misal : KH 1234 AL']) !!}
  @if ($errors->has('nopol'))<span class="help-block"> {{ $errors->first('nopol') }}</span>@endif
</div>
<div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
  {!! Form::label('merk', 'Merk Kendaraan' , ['class' => 'control-label']) !!}
  {!! Form::text('merk', null , ['class' => 'form-control','placeholder' => 'Misal : Toyota']) !!}
  @if ($errors->has('merk'))<span class="help-block"> {{ $errors->first('merk') }}</span>@endif

</div>
<div class="form-group {{ $errors->has('tipe') ? ' has-error' : '' }}">
  {!! Form::label('tipe', 'Tipe Kendaraan' , ['class' => 'control-label']) !!}
  {!! Form::text('tipe', null , ['class' => 'form-control','placeholder' => 'Misal : Avanza']) !!}
  @if ($errors->has('tipe'))<span class="help-block"> {{ $errors->first('tipe') }}</span>@endif

</div>
<div class="form-group  {{ $errors->has('tahun') ? ' has-error' : '' }}">
  {!! Form::label('tahun', 'Tahun' , ['class' => 'control-label']) !!}
  {!! Form::text('tahun', null , ['class' => 'form-control','placeholder' => 'Misal : 2010']) !!}
  @if ($errors->has('tahun'))<span class="help-block"> {{ $errors->first('tahun') }}</span>@endif

</div>
<div class="form-group">
  {!! Form::label('norangka', 'Nomor Rangka' , ['class' => 'control-label']) !!}
  {!! Form::text('norangka', null , ['class' => 'form-control','placeholder' => 'Misal : MHKVKVVKKVKV']) !!}
</div>
<div class="form-group">
  {!! Form::label('nomesin', 'Nomor Mesin' , ['class' => 'control-label']) !!}
  {!! Form::text('nomesin', null , ['class' => 'form-control','placeholder' => 'Misal : KH 1234 AL']) !!}
</div>
<div class="form-group">
  {!! Form::label('warna', 'Warna' , ['class' => 'control-label']) !!}
  {!! Form::text('warna', null , ['class' => 'form-control','placeholder' => 'Misal : Hitam -> Berguna untuk mencetak SK ganti warna ']) !!}
</div>
<div class="form-group">
  {!! Form::label('model', 'Nomor Model' , ['class' => 'control-label']) !!}
  {!! Form::text('model', null , ['class' => 'form-control','placeholder' => 'Berguna untuk mencari code part dalam EPC']) !!}
</div>
</div>
<div class="modal-footer">
  <div class="form-group pull-left">
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Reset', ['class'=>'btn btn-danger']) !!}
  </div>
  <div class="form-group pull-right">

  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
