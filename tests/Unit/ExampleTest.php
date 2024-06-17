<?php

namespace Tests\Unit;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_booking_process()
    {
        $startTimeString = "17/06/2024 12:00";
        $endTimeString = "20/06/2024 13:00";
        $startTime = Carbon::createFromFormat('d/m/Y H:i', $startTimeString);
        $endTime = Carbon::createFromFormat('d/m/Y H:i', $endTimeString);

        $result = $this->calculateSeasonDays($startTime, $endTime);
        dump($result);

        $differenceInHours = $startTime->diffInHours($endTime);
        dump($differenceInHours);
    }

    function calculateSeasonDays($startDate, $endDate)
    {
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);
        $seasons = ['spring' => 0, 'summer' => 0, 'autumn' => 0, 'winter' => 0];

        $totalHours = $start->diffInHours($end);
        $totalDays = ceil($totalHours / 24);  // Calculate the number of days to charge

        for ($i = 0; $i < $totalDays; $i++) {
            $currentDate = $start->copy()->addDays($i);
            $season = $this->getSeason($currentDate);
            $seasons[$season]++;
        }

        return $seasons;
    }

    function getSeason($date) {
        $seasons = [
            'winter' => [12, 1, 2],
            'spring' => [3, 4, 5],
            'summer' => [6, 7, 8],
            'autumn' => [9, 10, 11],
        ];

        $month = $date->month;
        $day = $date->day;

        foreach ($seasons as $season => $months) {
            if (in_array($month, $months)) {
                switch ($season) {
                    case 'spring':
                        if ($month == 3 && $day < 15) return 'winter';
                        if ($month == 6 && $day >= 15) return 'summer';
                        return $season;
                    case 'summer':
                        if ($month == 6 && $day < 16) return 'spring';
                        if ($month == 9 && $day >= 15) return 'autumn';
                        return $season;
                    case 'autumn':
                        if ($month == 9 && $day < 16) return 'summer';
                        if ($month == 11 && $day >= 15) return 'winter';
                        return $season;
                    case 'winter':
                        if ($month == 11 && $day < 16) return 'autumn';
                        if ($month == 3 && $day >= 15) return 'spring';
                        return $season;
                }
            }
        }

        throw new \Exception("Invalid date: $date");
    }
}
