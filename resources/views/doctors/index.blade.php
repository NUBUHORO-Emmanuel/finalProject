@extends('doctors.layout')

@section('content')
@include('header')
<h3><a href="http://127.0.0.1:8000/index">Home</a> &nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="{{ route('doctors.create') }}">Add New</a><h3>
<center><h2><i><b> Doctors Records</b></i></h2></center>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr bgcolor="blue">
      <th scope="col">ID</th>
      <th scope="col">DOCTOR COD</th>
      <th scope="col">NID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">GENDER</th>
      <th scope="col">D O B</th>
      <th scope="col">PHONE</th>
      <th scope="col">FAX</th>
      <th scope="col">Email</th>
      <th scope="col">COUNTRY</th>
      <th scope="col">CITY</th>
      <th width="280px">Action</th>
        </tr>
        @foreach ($doctors as $doctor)
        <tr>
                     <td bgcolor="yellow">{{ ++$i }}</td>
                     <td>{{ $doctor->doc_code}}</td>
                     <td>{{ $doctor->n_id }}</td>
                     <td>{{ $doctor->FirstName }}</td>
                     <td>{{ $doctor->LastName }}</td>
                     <td>{{ $doctor->Gender}}</td>
                     <td>{{ $doctor->DateOfBirth}}</td>
                     <td>{{ $doctor->PhoneNumber}}</td>
                     <td>{{ $doctor->Fax}}</td>
                     <td>{{ $doctor->Email}}</td>
                     <td>{{ $doctor->Passcode}}</td>
                     <td>{{ $doctor->country}}</td>
                     <td>{{ $doctor->city}}</td>
            <td>
                <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('doctors.show',$doctor->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $doctors->links() !!}
@endsection
