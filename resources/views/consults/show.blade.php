@extends('consults.layout')

@section('content')
@include('header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('consults.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>P_ID:</strong>
                {{ $consult->p_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fname:</strong>
                {{ $consult->fname }}
            </div>
        </div
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LName:</strong>
                {{ $consult->Lname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>birthday:</strong>
                {{ $consult->birthday }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>illness:</strong>
                {{ $consult->illns }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>medecine:</strong>
                {{ $consult->medecine }}
            </div>
        </div>
    </div>
@endsection
