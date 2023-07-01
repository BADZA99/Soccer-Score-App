<?php

function initiateAPI(){
    $url= "https://api.soccersapi.com/v2.2/fixtures/?user=pndiaye999&token=d3a3a946de61601e4435f133c7d48e3b&t=schedule&d=2021-08-13&league_id=1609";
    // init call
    $curl=curl_init($url);

    // options GET request
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);

    // send request
    $result=curl_exec($curl);

    // close connection
    curl_close($curl);

    return $result;
}

function convertIntoArray(){
    $result=initiateAPI();
    $resultArray=json_decode($result,true);
    return $resultArray;
}


?>