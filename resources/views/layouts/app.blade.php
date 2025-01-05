@extends('layouts.clean')

@section('childContent')
    
    @include('layouts.partials.header')

    @yield('content')

    @hasSection('footerLinks')
    <footer>
        @section('footerLinks')
            <a href="http://">Link 1</a>
            <a href="http://">Link 2</a>
        @show
    </footer>
    @endif
    
@endsection
