@extends('doctors.layout')
@section('content')
@include('header')
<a href="/index">Home</a> &nbsp;&nbsp;&nbsp;
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
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

    <form action="{{ route('doctors.update',$doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
<fieldset>

<legend> <font color="black" size="50%"><center> Edit Doctor Information</center> </font></legend>

        <table>
    <tr><th>Doctor Code </th><td>
       <input type = "text" name = "doc_code" size = "30" value="{{ $doctor->doc_code }}" class="form-control" placeholder = "code Here" required></td></tr>
<tr><th>National ID </th><td>
  <input type = "text" name = "n_id" size = "30" value="{{ $doctor->n_id }}" class="form-control" placeholder = "National ID Here" required></td></tr>
<tr><th>Firstname </th><td>
  <input type = "text" name = "FirstName" size = "30" value="{{ $doctor->FirstName }}" class="form-control" placeholder = "Fistname Here" required></td></tr>
<tr><th>Lastname </th><td>
   <input type = "text" name = "LastName" size = "30" value="{{ $doctor->LastName }}" class="form-control" placeholder = "Lastname Here" required></td></tr>
<tr><th>Gender</th><td>
  <input type = "radio" name = "Gender" Value = "Female" "{{ $doctor->Female }}" class="form-control" > Female
  <input type = "radio" name = "Gender" value  = "Male" "{{ $doctor->Male }}" class="form-control" required>Male</td></tr>
<tr><th>Date of Birth </th><td>
  <input type = "date" name = "DateOfBirth" size = "30" value="{{ $doctor->DateOfBirth }}" class="form-control" required></td></tr>
<tr><th>Phone Number </th><td>
  <input type = "text" name = "PhoneNumber" size = "30" value="{{ $doctor->PhoneNumber }}" class="form-control" placeholder = "Phone Number Here" required></td></tr>
<tr><th>Fax </th><td>
  <input type = "text" name = "Fax" size = "30" value="{{ $doctor->Fax }}" class="form-control" placeholder = "Fax" required></td></tr>

<tr><th>Email </th><td>
  <input type = "text" name = "Email" size = "30" value="{{ $doctor->Email }}" class="form-control" placeholder = "Email" required></td></tr>
<tr><th>Passcode </th><td>
  <input type = "text" name = "Passcode" size = "30" value="{{ $doctor->Passcode }}" class="form-control" placeholder = "passport code Here" required></td></tr>
<tr><th> Country</th>

<td>
<select name="country" "{{ $doctor->country }}" class="form-control">
<option value="Rwanda">Rwanda</option>
<option value="Burundi">Burundi</option>
<option value="Kenya">Kenya</option>
<option value="Ugana">Uganda</option>
</select>

<tr><th>city </th><td>
   <input type = "text" name = "city" size = "30" value="{{ $doctor->city }}" class="form-control" placeholder = "cityHere" required></td></tr>
</td>




<tr> <th> <input type = "submit" class="btn btn-info " value = "save"></th><td>
            <input type = "reset" class="btn btn-worning" value = "Clear"></td></tr>

</table>
       <tr>

    </tr>


        </div>

    </form>
@endsection
