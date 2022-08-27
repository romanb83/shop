<?php

namespace App\Http\Controllers;

use App\Repositories\CityRepository;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    private $regionRepository;
    private $cityRepository;

    public function __construct()
    {
        $this->regionRepository = app(RegionRepository::class);
        $this->cityRepository = app(CityRepository::class);
    }

    public function getRegions(Request $request)
    {
        $result = $this->regionRepository->getRegionsById($request->country);
        
        return $result;
    }

    public function getCities(Request $request)
    {
        $result = $this->cityRepository->getCityById($request->city);

        return $result;
    }
}
