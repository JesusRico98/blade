@extends('layout.landing')

@section('title', 'services')

@section('content')
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae assumenda sed cum debitis pariatur
            impedit in saepe aperiam necessitatibus aut, architecto modi, maiores aliquid provident perspiciatis iste quos id
            enim.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae assumenda sed cum debitis pariatur
            impedit in saepe aperiam necessitatibus aut, architecto modi, maiores aliquid provident perspiciatis iste quos id
            enim.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae assumenda sed cum debitis pariatur
            impedit in saepe aperiam necessitatibus aut, architecto modi, maiores aliquid provident perspiciatis iste quos id
            enim.')
    @endcomponent
@endsection
