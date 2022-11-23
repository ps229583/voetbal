@extends('layouts.app')
@section('content')

<form action="{{ route('spelers.destroy', [$voetbal->spelerID]) }}" 
    method="POST">
    @csrf @method('DELETE')
    <div class="grid grid-cols-[auto_1fr] mx-2">
        <div class="mr-2 text-gray-600">Naam:</div>
        <div class="text-purple-700 w-5/6">{{ $voetbal->naam }}</div>

        <div class="mr-2 text-gray-600">Nationaliteit:</div>
        <div class="text-purple-700 w-5/6">{{ $voetbal->nationaliteit }}</div>

        
        <div class="mr-2 text-gray-600">Marketwaarde:</div>
        <div class="text-purple-700 w-5/6">{{ $voetbal->marketwaarde }}</div>

        
        <div class="mr-2 text-gray-600">SterkeBeen:</div>
        <div class="text-purple-700 w-5/6">{{ $voetbal->sterkebeen }}</div>

        <div></div>
        <div class="mt-20">
            <input type="submit" value="Delete" 
                class="btnGevaarlijkeActie">
            <a href="{{route('spelers.index')}}" class="btnVeiligeActie">Cancel</a>
        </div>
    </div>
</form>

@endsection
