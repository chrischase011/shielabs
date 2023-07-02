@extends('layouts.base')

@section('body')
    @livewire('components.auth-navigation')
    <div class="flex justify-center items-center 2xs:p-10 xs:p-10 sm:p-10 p-20 my-5">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
