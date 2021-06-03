@extends('consults.layout')

@section('content')
@include('header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> <a href="/index">Home</a>  <h2> welcome in consultation</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-success" href="{{ route('consults.create') }}"> Create New </a>
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
            <th>id</th>
            <th>p_id</th>
            <th>f Name</th>
            <th>Lname</th>
            <th>birth day</th>
            <th>illns</th>
            <th>medecine</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($consults as $consult)
        <tr>
            <td>{{ ++$i }}</td>
              <td>{{ $consult->p_id }}</td>
            <td>{{ $consult->Fname }}</td>
            <td>{{ $consult->Lname }}</td>
              <td>{{ $consult->birthday }}</td>
                <td>{{ $consult->illns }}</td>
                    <td>{{ $consult->medecine }}</td>

            <td>
                <form action="{{ route('consults.destroy',$consult->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('consults.show',$consult->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('consults.edit',$consult->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $consults->links() !!}

@endsection
