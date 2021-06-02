@extends('ills.layout')
@section('content')
@include('header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Record</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ills.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ills.update',$ill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>N i d:</strong>
                   <input type="text" name="n_d" value="{{ $ill->n_d }}"class="form-control">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>first name:</strong>
                   <textarea class="form-control" style="height:150px" name="Fname"value="{{ $ill->Fname }}" placeholder="first name"></textarea>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>last name:</strong>
                   <textarea class="form-control" style="height:150px" name="Lname" value="{{ $ill->Lname }}" placeholder="last name"></textarea>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>date of birth:</strong>
                   <textarea class="form-control" style="height:150px" name="birthday"value="{{ $ill->birthday }}" placeholder="date of birth"></textarea>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>add your felling:</strong>
                   <textarea class="form-control" style="height:150px" name="illns" value="{{ $ill->illns }}"placeholder="your illness"></textarea>
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </div>
    </form>
    @include('footer')
@endsection
