@extends('layouts.app')

@section('menu')

@endsection

@section('content')
<div>
    <h1 class="text-5xl">Voetballers</h1>
    <br>
    <hr>
</div>

<div>
    <div class="grid grid-cols-3">
        <div class="indexHeader">Naam</div>
        <div class="indexHeader">Nationaliteit</div>
        <div class="indexHeader">Marketwaarde</div>
        <div class="indexHeader">SterkeBeen</div>
        <div></div>

        @foreach ($voetbals as $voetbal)
        <a class="indexRegelElement" href="{{ route('spelers.show', [$voetbal->spelerID]) }}">
            {{ $voetbal->naam }}
        </a>
 

        <div class="indexRegelElement">{{ $voetbal->nationaliteit }}</div>
        <div>
            <a href="{{ route('spelers.show', [$voetbal->spelerID]) }}" title="nationaliteit" class="indexCommando">
            </a>

            <div class="indexRegelElement">{{ $voetbal->marketwaarde }}</div>
            <a href="{{ route('spelers.show', [$voetbal->spelerID]) }}" title="marketwaarde" class="indexCommando">
            </a>

            <div class="indexRegelElement">{{ $voetbal->sterkebeen }}</div>
            <a href="{{ route('spelers.show', [$voetbal->spelerID]) }}" title="sterkebeen" class="indexCommando">Details
            </a>

            <a href="{{ route('spelers.edit', [$voetbal->spelerID]) }}" title="Edit" class="indexCommando">Edit
            </a>

            <a href="{{ route('spelers.delete', [$voetbal->spelerID]) }}" title="Delete" class="indexCommando">Delete
            </a>


            <form method="POST" action="{{ route('spelers.destroy', [$voetbal->spelerID]) }}" class="inline">
                @csrf @method('DELETE')
                <input type="submit" value="Destroy" class="indexCommando">
            </form>
        </div>
        <hr>
        <hr>
        <div></div>
        @endforeach
    </div>
</div>
@endsection