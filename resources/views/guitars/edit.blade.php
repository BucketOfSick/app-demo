@extends('layout')

@section('title', 'Gitaar aanpassen')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form forms unitext p-6 border-1" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label class="text-sm" for="name">Guitar Name</label>
        <input class="text-lg border-1" type="text" id="name" value="{{ $guitar->name }}" name="name">
        @error('guitar-name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand">Brand</label>
        <input class="text-lg border-1" type="text" id="brand" name="brand"  value="{{ $guitar->brand }}">
        @error('brand')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="year_made">Year Made</label>
        <input class="text-lg border-1" type="text" id="year_made" name="year_made" value="{{ $guitar->year_made }}">
        @error('year')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <button class=" border-1" type="submit">Submit</button>
    </div>
</form>
        
</div>
@endsection