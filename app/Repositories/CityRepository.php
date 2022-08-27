<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository extends CoreRepository
{
    private City $city;

    public function __construct(City $city)
    {
        return $this->city = $city;
    }

    public function getAllCities()
    {
        $result = $this->city
                ->get();

        return $result;
    }

    public function getCityById($id)
    {
        $result = $this->city
                ->where('region_id', $id)
                ->get();

        return $result;
    }
}