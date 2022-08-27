<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CountryRepository;
use App\Repositories\CityRepository;
use App\Repositories\RegionRepository;

class HomeController extends Controller
{
    private $countryRepository;
    private $regionRepository;
    private $cityRepository;

    public function __construct()
    {
        $this->countryRepository = app(CountryRepository::class);
        $this->regionRepository = app(RegionRepository::class);
        $this->cityRepository = app(CityRepository::class);
    }

    public function show()
    {
        $allCountries = $this->countryRepository->getAllCountries();
        // $region = $this->regionRepository->getRegionsById(1);
        // // dd($region);
        // $city = $this->cityRepository->getCityById(1000001);
        // dd($city);
        
        return view('welcome', compact('allCountries')); 
    }

    public function search(Request $request)
    {
        dd(__METHOD__);
    }
}
