@extends('illness.layout')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show result</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('illness.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FName:</strong>
                {{ $illnes->fname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lname:</strong>
                {{ $illnes->Lname }}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>birthday:</strong>
                    {{ $illnes->bithday }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>fellings:</strong>
                    {{ $illnes->illness }}
                </div>
            </div>
    </div>
      @csrf
@endsection
