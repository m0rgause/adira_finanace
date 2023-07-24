<?php
define('web_name', 'ADIRA FINANCE');
define('api_produk', 'http://localhost:8080/');
define('api_login', 'http://localhost:8080/');

// get data from api using curl
function products()
{
    $curl = curl_init();
    $url = api_produk . '/produk/';
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

function product($id)
{
    $curl = curl_init();
    $url = api_produk . '/produk/' . $id;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}
