@extends('layouts.master')

@section('title', 'Home Page')

@section('utilities.css')

@endsection

@section('nav')
    @component("components.nav")@endcomponent
@endsection

@section('content')
    @component("components.main")@endcomponent
@endsection

@section('footer')
    @component("components.footer")@endcomponent
@endsection

@section('utilities.js')

@endsection