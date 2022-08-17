@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin:0 auto">
    <div class="row mt-5">
        @foreach($departments as $department)

        <div class="text-center mb-3 mx-5">
            <div class="card" style="width: 28rem">
            <img/>
            <div class="card-body">
                <div class="card-title">{{$department->name}}</div>
                

        <form method="post" action="{{ route('showAppointments')}}" class="mt-2">
            @csrf
            <input type="text" action="{{$department->id}}" style="display:none"/>
            <input type="submit" value="show appointments" class="btn btn-primary"/>
        </form>

</div>

</div>
</div>
@endforeach
</div>
</div>

@endsection