
@extends('illness.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>welcome TO Consultation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('illness.create') }}">go in consultation</a>
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
            <th>FName</th>
            <th>LName</th>
            <th>birthday</th>
            <th>illness</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($illness as $illnes)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $illnes->Fname }}</td>
            <td>{{ $illnes->Lname }}</td>
              <td>{{ $illnes->birthday }}</td>
                <td>{{ $illnes->illns }}</td>
            <td>
                <form action="{{ route('illness.destroy',$illnes->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('illness.show',$illnes->id) }}">Show</a>

                   <a class="btn btn-primary" href="{{ route('illness.edit',$illnes->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $illness->links() !!}

@endsection
