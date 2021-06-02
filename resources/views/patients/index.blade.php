@extends('patients.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <a href="index">Home</a> &nbsp;&nbsp;&nbsp;
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patients.create') }}"> Add New Patient</a>

            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

  @endif
    <table class="table table-bordered">
        <tr>
      <th>ID</th>
       <th>gender</th>
       <th>Firstname</th>
      <th>Lastname</th>
       <th>NID</th>
       <th>birthday</th>
       <th>sex</th>
       <th>country</th>
       <th>tel</th>
       <th>Email</th>
       <th>passcode</th>
       <th>Fname</th>
       <th>Mname</th>
       <th>na_id</th>
       <th>Tel</th>
       <th>relationship</th>
       <th>birthplace</th>
      <th width="280px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $patient->gender }}</td>
            <td>{{ $patient->FirstName }}</td>
            <td>{{ $patient->LastName }}</td>
            <td>{{ $patient->N_id }}</td>
            <td>{{ $patient->birthday }}</td>
            <td>{{ $patient->sex }}</td>
            <td>{{ $patient->country }}</td>
            <td>{{ $patient->city }}</td>
            <td>{{ $patient->tel }}</td>
            <td>{{ $patient->Email }}</td>
            <td>{{ $patient->pass }}</td>
            <td>{{ $patient->Fname }}</td>
            <td>{{ $patient->Mname }}</td>
            <td>{{ $patient->na_id }}</td>
            <td>{{ $patient->Telephone }}</td>
            <td>{{ $patient->relationship }}</td>
            <td>{{ $patient-> birthplace }}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                  <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Show</a>
                  <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  @csrf
    {!! $patients->links() !!}

@endsection
