@extends('layouts.app')
@section('content')
<div>
    <div class="grid grid-cols-[auto_1fr] mx-2">
        <div class="mr-2 text-gray-400">ID</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->spelerID }}</div>
        
        <div class="mr-2 text-gray-400">Naam:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->naam }}</div>
        
        <div class="mr-2 text-gray-400">Nationaliteit:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->nationaliteit }}</div>

        <div class="mr-2 text-gray-400">Marketwaarde:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->marketwaarde }}</div>

        <div class="mr-2 text-gray-400">SterkeBeen:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->sterkebeen }}</div>
        
        <div class="mr-2 text-gray-400">Gemaakt op:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->created_at }}</div>
        
        <div class="mr-2 text-gray-400">Gewijzigd op:</div>
        <div class="text-purple-700 font-bold">{{ $voetbal->updated_at }}</div>
    </div>
    <br>
    <hr>
    <br>
    <a href="{{ route('spelers.index') }}" class="btnNeutraleActie">Index</a>
</div>
@endsection
