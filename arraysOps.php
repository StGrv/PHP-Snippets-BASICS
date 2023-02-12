<?php

$city = [
    'name' => 'Frankfurt',
    'country' => 'Germany',
    'population' => 785000,
    'latitude' => 50.110924,
    'longtitude' => 8.682127
];

$cities = [
    [
        'name' => 'Frankfurt',
        'country' => 'Germany',
        'population' => 785000,
        'latitude' => 50.110924,
        'longtitude' => 8.682127
    ],

    [
        'name' => 'Sorrento',
        'country' => 'Italy',
        'population' => 7850,
        'latitude' => 50.12,
        'longtitude' => 8.683
    ]
];

$numbers = [10, 10, 10, 20, 20, 30, 30, 40, 50];

// array_keys
$keys = array_keys($city);

// array_values
$values = array_values($city);

// in_array
$inArray = in_array('Frankfurt', $city);

// array_key_exists
$arrKeyExists = array_key_exists('longtitude', $city);

// array_search
$arrSearch = array_search('Germany', $city);

// array_count_values
$arrCountValues = array_count_values($numbers);

// array_sum
$arrCountValues = array_sum($numbers);

// array_unique
$arrUnique = array_unique($numbers);

// array_column
$arrColumn = array_column($cities, 'country');

// array_unshift
array_unshift($arrColumn, 200, 30000, 55555555);

// array_slice
$arrSlice = array_slice($city, 3, 1);

// range
$arrRange = range(0, 23);

// array_map
$arrMap = array_map(function ($item) {
    return $item ** 2;
}, $numbers);

// array_filter
$arrFilter = array_filter($city, function ($item) {
    return in_array($item, ['name', 'town', 'country']);
}, ARRAY_FILTER_USE_KEY);

// compact
$name = 'Frankfurt';
$country = 'Germany';
$population = 777777;
$latitude = 50.111;
$longtitude = 20.222;

$arrCompact = compact('name', 'country', 'population', 'latitude', 'longtitude');