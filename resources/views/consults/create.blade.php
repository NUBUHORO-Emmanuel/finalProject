@extends('consults.layout')

@section('content')
@include('header')
<style media="screen">
  body{
    background-color: #ffe6e6;
  }
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2> <a href="/index">Home</a> </h2>  <h2>Add</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('consults.index') }}"> Back</a>
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

<form action="{{ route('consults.store') }}" method="POST">
    @csrf

    <label for="fname">First name:</label>
            <input type="text" id="fname" name="Fname" size="50"><br><br>

            <label for="Lname">Last name:</label>
            <input type="text" id="Lname" name="Lname" size="50"><br><br>
            <label for="birthday">date of birth:</label>
            <input type="date" id="birthday" name="birthday" size="50"><br><br>

            felling of patient(Illness):<br>
            <textarea wrap="virtual" name="illns"
            rows=5 cols=60
            maxlength=500></textarea><br>

            RESULT FOR YOUR CONSULTATION (consulted) MEDICINE NEEDED (medecine):<br>
            <textarea wrap="virtual" name="medecine"
            rows=5 cols=60
            maxlength=500></textarea><br>
            <p>
            patient id <input type="text" id="p_id" name="p_id" size="4" >
            doctor id <input type="text" id="doc_id" name="doc_id" size="4"><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="clear">

</form>
@endsection
