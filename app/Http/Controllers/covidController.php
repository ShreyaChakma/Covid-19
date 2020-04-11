<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class covidController extends Controller
{
    

 public function covid(){

    /**
     * =======================================
     *          Code for fetch total case
     *      total deaths and total recovered
     * =======================================
     */

    $api_url = 'https://corona.lmao.ninja/all';

    $data = file_get_contents($api_url);

    $obj = json_decode($data);

    $total_cases = $obj->cases;
    $total_deaths = $obj->deaths;
    $total_recovered = $obj->recovered;


    /**
     * ==========================
     *      Code for table
     * ==========================
     */

    $api_url_countries = 'https://corona.lmao.ninja/countries';

    $countries_data = json_decode(file_get_contents($api_url_countries));


    return view('covid_dashboard',compact('total_cases','total_deaths','total_recovered','countries_data'));


   

 }


 public function test_code(){

    $api_url = 'https://corona.lmao.ninja/all';
    $data = file_get_contents($api_url);

    $arr = json_decode($data);

    

    print_r($arr );
 }


 public function test_country(){
   $api_url_countries = 'https://corona.lmao.ninja/countries';
   $countries_data = json_decode(file_get_contents($api_url_countries));
    print_r( $countries_data);
 }


}
