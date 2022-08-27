@extends('layouts.layout')

@section('title', 'Главная')
@section('content')

<div>
    <form method="POST" action="" id="search-form">
        @csrf
        <div>
            <select name="country" id="country">
                @foreach ($allCountries as $country)
                <option value="{{ $country->id }}">{{ $country->country_ru }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="region" id="region">
                <option value="">Выберите регион</option>
                {{-- @foreach ($regions as $region)
                <option value="{{ $region->id }}">{{ $region->region_ru }}</option>
                @endforeach --}}
            </select>
        </div>
        <div>
            <select name="city" id="city">
                <option value="">Выберите Город</option>
            </select>
        </div>
        <button class="btn" type="submit">Искать</button>
    </form>
</div>

@endsection