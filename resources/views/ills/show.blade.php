@extends('ills.layout')
@section('content')
@include('header')
  <div class="row">
  <div class="col-lg-12 margin-tb">
  <div class="pull-left">
                <h2> Show record</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ills.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
      <strong>n id :</strong>
                {{ $ill->n_d }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $ill->Fname }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
      <strong>last name:</strong>
                {{ $ill->Lname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date of birth:</strong>
                {{ $ill->birthday }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
      <strong>Illness:</strong>
                {{ $ill->illns }}
            </div>
        </div>
    </div>
@include('footer')
@endsection
