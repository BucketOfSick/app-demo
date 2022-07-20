@extends('layout')

@section('title', 'Gitaar index')

@section('content')

<div class="talk max-w-6xl mx-auto sm:px-6 lg:px-8">
    <h1 class="unitext">Guitaar Project</h1>
        <p class="unitext">Op deze pagina ben ik bezig geweest met een course om mijn kennis over Laravel te verbreden. <br>Met deze applicatie kan je gitaren toevoegen aan een database en editen.</p>
            <div class="btn"><a href="{{ route('guitars.create') }}">Toevoegen</a></div>
</div>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if (count($guitars) > 0) 

        @foreach ($guitars as $guitar)

            <div class="items">
                <h3>
                    <a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{$guitar['name']}}</a>
                </h3>
                <ul>
                    <li>
                        Made by: {{$guitar['brand']}}  
                    </li>
                    <li>
                        Year made: {{$guitar['year_made']}}  
                    </li>
                </ul>
            </div> 

        @endforeach

    @else
        <h2>There are no guitars to display</h2>

    @endif

</div>
@endsection
