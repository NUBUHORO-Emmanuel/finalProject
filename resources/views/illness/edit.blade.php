@extends('illness.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Records</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('illness.index') }}"> Back</a>
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

    <form action="{{ route('illness.update',$illnes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
       <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" value="{{ $illnes->Fname }}"><br><br>

        <label for="Lname">Last name:</label>
        <input type="text" id="Lname" name="Lname" value="{{ $illnes->Lname }}" ><br><br>
        <label for="bithday">date of birth:</label>
        <input type="date" id="bithday" name="bithday" value="{{ $illnes->bithday }}"><br><br>

        Enter Your fellings(Illness):<br>
        <textarea wrap="virtual" name="illness" rows=5 cols=60 maxlength=500 value="{{ $illnes->illness }}"></textarea><br>
        <input type="submit" value="Submit">
        <input type="reset" value="clear">
      </form>
    </fieldset>
   </center>
</p>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
