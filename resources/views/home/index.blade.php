@extends('layouts.base')
@section('title','Index Page')
@section('content')
    <h1>Index Page <?php echo $id; ?></h1>
    <h1>Index Page 2 {{$id}} </h1>
@endsection
