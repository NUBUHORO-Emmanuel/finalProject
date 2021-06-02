@extends('patients.layout')

@section('content')
@include('header')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Patient</h2>
            </div>
            <div class="">
              <a href="/index">Home</a> &nbsp;&nbsp;&nbsp;
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

    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
           <table>
       <select name="gender" "{{ $patient->gender }}">
         <option value="Mr">MRS</option>
         <option value="Mrs">MS</option>
         </select>
       <input type="text"name="FirstName" value="{{ $patient->FirstName }}" placeholder="First name">
       <input type="text"name="LastName" value="{{ $patient->LastName }}" placeholder="Last name"> <br><br>
       National Id:
       <input type="text"name="N_id" value="{{ $patient->N_id }}"  placeholder="identity card"> <br><br>
       Birthday:
       <input type="date"id="birthday"name="birthday"value="{{ $patient->birthday }}" ><br><br>
       Sex ...&nbsp;
       <input type="radio"name="sex"value="male"value="{{ $patient->sex }}" >male
       <input type="radio"name="sex"value="Female">Female <br><br>
       </td>
       <td bgcolor="cyan">
       select country:
         <select name="country" value="{{ $patient->country }}" >
             <option value="RWANDA">RWANDA</option>
             <option value="BURUNDI">BURUNDI</option>
             <option value="USA">USA</option>
             <option value="UGANDA">UGANDA</option>
           </select><br><br>
       city:
       <input type="text"name="city" value="{{ $patient->city }}" > <br><br>
       Tel:
     </label><input type="text"name="tel" value="{{ $patient->tel }}" placeholder="+250" value="+250"> <br><br>
       Email :
       <input type="Email" id="email" name="Email" value="{{ $patient->Email }}" > <br><br>
       Passcode:
       <input type="text" name="pass" value="{{ $patient->pass }}" ><br><br>
         </p></p>
         </td>
         <td bgcolor="yellowgreen">
       father name
       <input type="text"name="Fname" value="{{ $patient->Fname }}" ><br><br>
       mother name
       <input type="text"name="Mname"value="{{ $patient->Mname }}" > <br><br>
       Next skin ID:
       <input type="text"name="na_id" value="{{ $patient->na_id }}" placeholder="identity card"> <br><br>
       Next skin tel:
       <input type="text"name="Telephone" placeholder="+250" value="+250" "{{ $patient->Telephone }}" > <br><br>
       next sik realitonship:
       <input type="text"name="relationship" value="{{ $patient->relationship }}" > <br><br>
       Next skin birth place:
       <input type="text"name="birthplace" value="{{ $patient->birthplace }}" > <br><br>
         </td>
         </tr>
       </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
@include('footer')
    </form>
@endsection
