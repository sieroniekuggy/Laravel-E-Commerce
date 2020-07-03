@extends('layouts.main')

@section('content')
    <form method="POST" action="{{route('contact')}}">
        @csrf
            <div class="form-group">
                <label for=""></label>
                <textarea class="form-control" name="" id="" rows="1"></textarea>
             </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection