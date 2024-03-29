@extends('layout')

@section('title', 'Gitaar toevoegen')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="forms form unitext p-6 border-1" method="POST" action="{{ route('guitars.store') }}">
    @csrf 
    <div>
        <label class="text-sm" for="name">Guitar Name</label>
        <input class="text-lg border-1" type="text" id="name" value="{{ old('name') }}" name="name">
        @error('name')
            <div class="form-error">
               {{ $message }} 
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand">Brand</label>
        <input class="text-lg border-1" type="text" id="brand" value="{{ old('brand') }}" name="brand">
        @error('brand')
            <div class="form-error">
               {{ $message }} 
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="year_made">Year Made</label>
        <input class="text-lg border-1" type="text" id="year_made" value="{{ old('year_made') }}" name="year_made">
        @error('year_made')
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
