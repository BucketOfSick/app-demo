@extends('layout')

@section('title', 'Show gitaar')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="items">
        <h3>
            {{$guitar['name']}}
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

</div>
@endsection
