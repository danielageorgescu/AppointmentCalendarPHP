@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin:0 auto">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Taken</th>   
</tr> 
</thead>
<tbody>
    @foreach($appointments as $appointment)
    <tr>
    <th scope="row">{{$appointment->id}}</th>
    <td>{{$appointment->appointment_date}}</td>
    @if($appointment->taken)
    <td>you can't book this</td>
    @else
    <td>
<form>
<input type="submit" value="book" class="btn btn-primary"/>


</form>
</td>
    @endif
    </tr> 
    @endforeach
</tbody>
</tabel>







</div>

@endsection