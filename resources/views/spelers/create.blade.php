@extends('layouts.app')

@section('content')
    <form action="{{ route('demonstraties.store') }}" method="POST" class="m-2">
        @csrf
        <div class="grid grid-cols-[auto_1fr] mx-2">
            <label for="naam" class="mr-2 text-gray-600">Naam:</label>
            <div>
                <input type="text" name="naam" id="naam" 
                    placeholder="naam" 
                    value="{{ old('naam') }}"
                    class="text-purple-700 w-5/6">
                @error('naam')
                <div class="text-red-600">{{$message}}</div>
                @enderror
            </div>

            <label for="nationaliteit" class="mr-2 text-gray-600">Nationaliteit:</label>
            <div>
                <input type="text" name="nationaliteit" id="nationaliteit" 
                    placeholder="nationaliteit"  
                    value="{{ old('nationaliteit') }}"
                    class="text-purple-700 w-5/6 mt-2">
                @error('nationaliteit')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <label for="marketwaarde" class="mr-2 text-gray-600">Marketwaarde:</label>
            <div>
                <input type="text" name="marketwaarde" id="marketwaarde" 
                    placeholder="marketwaarde"  
                    value="{{ old('marketwaarde') }}"
                    class="text-purple-700 w-5/6 mt-2">
                @error('marketwaarde')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <label for="sterkebeen" class="mr-2 text-gray-600">SterkeBeen:</label>
            <div>
                <input type="text" name="sterkebeen" id="sterkebeen" 
                    placeholder="sterkebeen"  
                    value="{{ old('sterkebeen') }}"
                    class="text-purple-700 w-5/6 mt-2">
                @error('sterkebeen')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div></div>
            <div class="mt-20">
                <input type="submit" value="Create" class="btnVeiligeActie">
                <a href="{{ route('spelers.index') }}" 
                   class="btnNeutraleActie">Cancel</a>
            </div>
        </div>
    </form>
@endsection
