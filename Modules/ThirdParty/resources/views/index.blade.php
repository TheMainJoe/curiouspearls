@extends('thirdparty::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('thirdparty.name') !!}</p>
@endsection
