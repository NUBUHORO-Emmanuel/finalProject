@extends('doctors.layout')

@section('content')
@include('header')
<a href="index">Home</a> &nbsp;&nbsp;&nbsp;
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show doctors</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>dooctor code</strong>
                {{ $doctor->doc_code}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>n_id:</strong>
                {{ $doctor->n_id}}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>FirstName :</strong>
                    {{ $doctor->FirstName }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>LastName:</strong>
                    {{ $doctor->LastName }}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        {{ $doctor->Gender }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>DateOfBirth:</strong>
                        {{ $doctor->DateOfBirth }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>PhoneNumber:</strong>
                            {{ $doctor->PhoneNumber }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fax:</strong>
                            {{ $doctor->Fax }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $doctor->Email }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Passcode:</strong>
                                {{ $doctor->Passcode }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>country:</strong>
                                    {{ $doctor->country }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>city:</strong>
                                    {{ $doctor->city }}
                                </div>
                            </div>
    </div>
@endsection
