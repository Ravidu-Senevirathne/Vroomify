@extends('layouts.clean')

@section('childContent')
    <x-header-layout />
    @yield('content')
    <footer></footer>
@endsection
