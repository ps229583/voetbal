@extends('layouts.app')

@section('content')
 <form action="{{ route('spelers.update', [$voetbal->spelerID]) }}" 
          method="POST" class="m-2">
        @csrf @method('PATCH')
   <div class="grid grid-cols-[auto_1fr] mx-2">
     <label for="name" class="mr-2">Naam:</label>
     <div>
         <input type="text" name="naam" id="naam" 
             value="{{ $voetbal->naam }}" class="w-full">
         @error('naam')
         <div class="text-red-600">{{ $message }}</div>
         @enderror
     </div>

     <label for="nationaliteit" class="mr-2 mt-2">Nationaliteit:</label>
     <div class="mt-2">
         <input type="text" name="nationaliteit" 
             id="description" value="{{ $voetbal->nationaliteit }}"
             class="w-full">
         @error('nationaliteit')
         <div>{{ $message }}</div>
         @enderror
     </div>

     
     <label for="marketwaarde" class="mr-2 mt-2">Marketwaarde:</label>
     <div class="mt-2">
         <input type="text" name="marketwaarde" 
             id="marketwaarde" value="{{ $voetbal->marketwaarde }}"
             class="w-full">
         @error('marketwaarde')
         <div>{{ $message }}</div>
         @enderror
     </div>

     
     <label for="sterkebeen" class="mr-2 mt-2">SterkeBeen:</label>
     <div class="mt-2">
         <input type="text" name="sterkebeen" 
             id="sterkebeen" value="{{ $voetbal->sterkebeen }}"
             class="w-full">
         @error('sterkebeen')
         <div>{{ $message }}</div>
         @enderror
     </div>
            
     <div></div>
     <div class="mt-20">
         <input type="submit" value="Save" class="btnVeiligeActie">
         <a href="{{ route('demonstraties.index') }}" class="btnNeutraleActie">Ga terug</a>
     </div>
   </div>
 </form>
@endsection
