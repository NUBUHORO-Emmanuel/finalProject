@extends('ills.layout')
@section('content')
@include('header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>illness</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ills.create') }}"> Create New</a>
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
            <th>N I D</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth'</th>
            <th>Illness</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ills as $ill)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ill->n_d }}</td>
            <td>{{ $ill->Fname }}</td>
            <td>{{ $ill->Lname }}</td>
            <td>{{ $ill->birthday }}</td>
            <td>{{ $ill->illns }}</td>
            <td>
                <form action="{{ route('ills.destroy',$ill->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('ills.show',$ill->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('ills.edit',$ill->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $ills->links() !!}
@endsection
