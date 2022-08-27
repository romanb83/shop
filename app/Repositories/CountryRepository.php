<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository extends CoreRepository
{
    private Country $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    public function getAllCountries()
    {
        $result = $this->country
                ->get();

        return $result;
    }
}
