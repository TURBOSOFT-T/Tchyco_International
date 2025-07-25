<?php

return [
    // 'account_id' => env('ZOOM_ACCOUNT_ID'),
    //  'api_key' => env('ZOOM_CLIENT_KEY'),
    // 'api_secret' => env('ZOOM_CLIENT_SECRET'),
    'account_id' => env('ZOOM_ACCOUNT_ID'),
    'client_id' => env('ZOOM_CLIENT_ID'),
    'client_secret' => env('ZOOM_CLIENT_SECRET'),
    'cache_token' => env('ZOOM_CACHE_TOKEN', true),
    'base_url' => 'https://api.zoom.us/v2/',
    'token_life' => 60 * 60 * 24 * 7, // In seconds, default 1 week
    //'authentication_method' => 'jwt', // Only jwt compatible at present but will add OAuth2
    'authentication_method' => 'Oauth', // Only Oauth compatible at present
    'max_api_calls_per_request' => '10' // how many times can we hit the api to return results for an all() request
  //  $zoom = new MacsiDigital\Zoom\Zoom();

//$zoom->users->list();
];