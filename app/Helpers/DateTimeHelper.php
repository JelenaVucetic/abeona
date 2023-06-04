<?php

use Carbon\Carbon;

function getCurrentSeason($date)
{
    $month = $date->month;

    if ($month >= 3 && $month <= 5) {
        return 'spring';
    } elseif ($month >= 6 && $month <= 8) {
        return 'summer';
    } elseif ($month >= 9 && $month <= 11) {
        return 'autumn';
    } else {
        return 'winter';
    }
}

function getStringFromNumberOfDays($days)
{
    if ($days >= 0 && $days <= 3) {
        return '1-3';
    } elseif ($days >= 4 && $days <= 7) {
        return '4-7';
    } elseif ($days >= 8 && $days <= 15) {
        return '8-15';
    } elseif ($days >= 16 && $days <= 22) {
        return '16-22';
    } else {
        return '23+';
    }
}

function calculateSeasonDays($startDate, $endDate)
{
    $start = Carbon::parse($startDate);
    $end = Carbon::parse($endDate);
    $seasons = ['spring' => 0, 'summer' => 0, 'autumn' => 0, 'winter' => 0];

    for ($date = $start; $date->lte($end); $date->addDay()) {
        $season = getSeason($date);
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
                    if ($month == 3 && $day < 20) return 'winter';
                    if ($month == 6 && $day >= 21) return 'summer';
                    return $season;
                case 'summer':
                    if ($month == 6 && $day < 21) return 'spring';
                    if ($month == 9 && $day >= 22) return 'autumn';
                    return $season;
                case 'autumn':
                    if ($month == 9 && $day < 22) return 'summer';
                    if ($month == 12 && $day >= 21) return 'winter';
                    return $season;
                case 'winter':
                    if ($month == 12 && $day < 21) return 'autumn';
                    if ($month == 3 && $day >= 20) return 'spring';
                    return $season;
            }
        }
    }

    throw new \Exception("Invalid date: $date");
}
