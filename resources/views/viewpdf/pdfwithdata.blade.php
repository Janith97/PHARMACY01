@extends('layout')
@section('content')
<div class="container">
<h1> <center>PDF with Data</center> </h1>
<div class="container">
<table class="table table-bordered">
<thead>
<tr><th>Brand</th><th>Logo</th></tr>
</thead>
<tbody>
@foreach ($data as $car)
<tr> <td> {{ $car['name']}}</td><td><img src="{{ $car['logo']}}" a
lt="" width="150px"></td></tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection