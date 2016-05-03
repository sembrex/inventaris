@extends('layouts.app')

@section('title', 'Asset Baru')

@section('content')
<div class="row">
  <div class="col-xs-12 col-md-8 col-md-offset-2">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Input Asset Baru</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        {!! Form::open(['route' => 'inventaris.baru', 'class' => 'form-vertical']) !!}

        @include('pages._form')

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-xs-12">
              <a href="{{ route('inventaris.index') }}" class="btn btn-default"><i class="fa fa-times"></i> Batal</a>
              {!! Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
            </div>
          </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection