<?php

namespace App\Services;

use App\Contracts\Service;
use App\Models\Flight;
use App\Models\Rank;
use App\Models\Subfleet;

class FleetService extends Service
{
    /**
     * @param Subfleet $subfleet
     * @param Rank     $rank
     * @param array    $overrides
     *
     * @return Subfleet
     */
    public function addSubfleetToRank(Subfleet $subfleet, Rank $rank, array $overrides = [])
    {
        $subfleet->ranks()->syncWithoutDetaching([$rank->id]);

        if ($overrides) {
            $subfleet->ranks()->updateExistingPivot($rank->id, $overrides);
        }

        $subfleet->save();
        $subfleet->refresh();

        return $subfleet;
    }

    public function removeSubfleetFromRank(Subfleet $subfleet, Rank $rank)
    {
        $subfleet->ranks()->detach($rank->id);

        $subfleet->save();
        $subfleet->refresh();

        return $subfleet;
    }

    /**
     * Add the subfleet to a flight
     *
     * @param Subfleet $subfleet
     * @param Flight   $flight
     */
    public function addSubfleetToFlight(Subfleet $subfleet, Flight $flight)
    {
        $flight->subfleets()->syncWithoutDetaching([$subfleet->id]);
        $subfleet->save();
        $subfleet->refresh();
    }

    /**
     * Remove the subfleet from a flight
     *
     * @param Subfleet $subfleet
     * @param Flight   $flight
     */
    public function removeSubfleetFromFlight(Subfleet $subfleet, Flight $flight)
    {
        $flight->subfleets()->detach($subfleet->id);
    }
}
