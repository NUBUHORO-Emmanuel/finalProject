@extends('consults.layout')

@section('content')
@include('header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit </h2>
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

    <form action="{{ route('consults.update',$consult->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="fname">First name:</label>
                patient id <input type="text" id="p_id" name="p_id" value="{{ $consult->p_id }}" size="4" >
                <input type="text" id="fname" name="fname"value="{{ $consult->Fname }}" size="50"><br><br>

                <label for="Lname">Last name:</label>
                <input type="text" id="Lname" name="Lname" value="{{ $consult->Lname }}" size="50"><br><br>
                <label for="birthday">date of birth:</label>
                <input type="date" id="birthday" name="birthday" value="{{ $consult->birthday }}" size="50"><br><br>

                felling of patient(Illness):<br>
                <textarea wrap="virtual" name="illns" value="{{ $consult->ILLNS }}"
                rows=5 cols=60
                maxlength=500></textarea><br>


                RESULT FOR YOUR CONSULTATION (consulted):<br>
                <textarea wrap="virtual" name="ill" value="{{ $consult-> }}"
                rows=5 cols=60
                maxlength=500></textarea><br>
                MEDICINE NEEDED (medecine):<br>
                <textarea wrap="virtual" name="medecine"value="{{ $consult->medecine }}"
                rows=5 cols=60
                maxlength=500></textarea><br>
                <p>
                doctor id <input type="text" id="doc_id" name="doc_id" size="4"><br><br>
                <input type="submit" value="Submit">
                <input type="reset" value="clear">

    </form>
@endsection
