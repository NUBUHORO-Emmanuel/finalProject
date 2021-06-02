
@extends('doctors.layout')

@section('content')
@include('header')
<a href="index">Home</a> &nbsp;&nbsp;&nbsp;
      <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>


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

<form action="{{ route('doctors.store') }}" method="POST">
    @csrf

    <fieldset>

         <legend> <font color="black" size="50%"><center>Doctor Information Form</center> </font></legend>
                   <table>
               <tr><th>Doctor Code </th><td> <input type = "text" name = "doc_code" size = "30" placeholder = "code Here" required></td></tr>
         <tr><th>National ID </th><td> <input type = "text" name = "n_id" size = "30" placeholder = "National ID Here" required></td></tr>
         <tr><th>Firstname </th><td> <input type = "text" name = "FirstName" size = "30" placeholder = "Fistname Here" required></td></tr>
<tr><th>Lastname </th><td> <input type = "text" name = "LastName" size = "30" placeholder = "Lastname Here" required></td></tr>
         <tr><th>Gender        </th><td> <input type = "radio" name = "Gender" Value = "Female" > Female
          <input type = "radio" name = "Gender" value  = "Male" required>Male</td></tr>
         <tr><th>Date of Birth </th><td> <input type = "date" name = "DateOfBirth" size = "30" required></td></tr>
         <tr><th>Phone Number  </th><td> <input type = "text" name = "PhoneNumber" size = "30" placeholder = "Phone Number Here" required></td></tr>
         <tr><th>Fax </th><td> <input type = "text" name = "Fax" size = "30" placeholder = "Fax" required></td></tr>

         <tr><th>Email </th><td> <input type = "text" name = "Email" size = "30" placeholder = "Email" required></td></tr>
         <tr><th>Passcode </th><td> <input type = "text" name = "Passcode" size = "30" placeholder = "passport code Here" required></td></tr>
<tr><th> Country </th>
<td>
 <select name="country">
   <option value="Rwanda">Rwanda</option>
   <option value="Burundi">Burundi</option>
   <option value="Kenya">Kenya</option>
   <option value="Ugana">Uganda</option>
 </select>
         <tr><th>city </th><td> <input type = "text" name = "city" size = "30" placeholder = "city Here" required></td></tr>
          </td>

         <tr> <th> <input type = "submit" class="btn btn-info " value = "save"></th><td>
                       <input type = "reset" class="btn btn-worning" value = "Clear"></td></tr>

         </table>
                  <tr
               </tr>

</form>
@endsection
