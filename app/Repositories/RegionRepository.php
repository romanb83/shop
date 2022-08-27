<?php

namespace App\Repositories;

use App\Models\Region;

class RegionRepository extends CoreRepository
{
    private Region $region;

    public function __construct(Region $region)
    {
        return $this->region = $region;
    }

    public function getAllRegions()
    {
        $result = $this->region
                ->get();

        return $result;

    }

    public function getRegionsById($id)
    {
        $result = $this->region
                ->where('country_id', $id)
                ->get();

        return $result;
    }
}