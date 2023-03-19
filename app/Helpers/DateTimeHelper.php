<?php


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
