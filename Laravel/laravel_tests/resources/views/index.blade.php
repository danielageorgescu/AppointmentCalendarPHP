@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin:0 auto">
    <div class="row mt-5">
        <div class="text-center mb-3 mx-5">
            <div class="card" style="width: 28rem">
            <img/>
            <div class="card-body">
                <div class="card-title">{{ $key}}</div>
                <div class ="card-text">content</div>

        <form method="post" action="{{ route('showAppointments')}}">
            @csrf
            <input type="submit" value="show appointments" class="btn btn-primary"/>
        </form>

</div>

</div>
</div>
</div>
</div>

@endsection