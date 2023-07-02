@extends('layouts.base')

@section('body')
    @livewire('components.navigation')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
