@extends('patients.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Patient</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
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

<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <table>
<select name="gender" >
  <option value="Mr">MRS</option>
  <option value="Mrs">MS</option>
  </select>
<input type="text"name="FirstName" placeholder="First name">
<input type="text"name="LastName" placeholder="Last name"> <br><br>
National Id:
<input type="text"name="N_id" placeholder="identity card"> <br><br>
Birthday:
<input type="date"id="birthday"name="birthday"><br><br>
Sex ...&nbsp;
<input type="radio"name="sex"value="male">male
<input type="radio"name="sex"value="femal">Female <br><br>
</td>
<td bgcolor="cyan">
select country:
  <select name="country">
    	<option value="RWANDA">RWANDA</option>
    	<option value="BURUNDI">BURUNDI</option>
    	<option value="USA">USA</option>
    	<option value="UGANDA">UGANDA</option>
    </select><br><br>
city:
<input type="text"name="city"> <br><br>
Tel:
</label><input type="text"name="tel"placeholder="+250" value="+250"> <br><br>
Email :
<input type="Email" id="email" name="Email"> <br><br>
Passcode:
<input type="text" name="pass"><br><br>
  </p></p>
  </td>
  <td bgcolor="yellowgreen">
father name
<input type="text"name="Fname"><br><br>
mother name
<input type="text"name="Mname"> <br><br>
Next skin ID:
<input type="text"name="na_id" placeholder="identity card"> <br><br>
Next skin tel:
<input type="text"name="Telephone" placeholder="+250" value="+250"> <br><br>
next sik realitonship:
<input type="text"name="relationship"> <br><br>
Next skin birth place:
<input type="text"name="birthplace"> <br><br>
  </td>
  </tr>
</table>
  <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
