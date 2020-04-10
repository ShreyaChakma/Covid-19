<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {

    $information = [

        [
            'name' => 'prappo',
            'address' => [
                'present' => [
                    'street' => '132/2',
                    'street-2' => 'East Rampura',
                    'city' => 'Dhaka'

                ],
                'permanent' => [
                    'street' => 'parbatipur',
                    'street-2' => 'Parbatipur',
                    'city' => 'Dinajpur'
                ]
            ],
            'education' => [
                'ssc' => '2012',
                'ssc_cgp' => '4.50',
                'board' => 'Dhaka',
                'hsc' => '2014',
                'hsc_cgp' => '4.98'
            ]
        ]
        
        ,


        [
            'name' => 'Shreya',
            'address' => [
                'present' => [
                    'street' => '132/2',
                    'street-2' => 'East Rampura',
                    'city' => 'Khagrachori'

                ],
                'permanent' => [
                    'street' => 'parbatipur',
                    'street-2' => 'Parbatipur',
                    'city' => 'Dinajpur'
                ]
            ],
            'education' => [
                'ssc' => '2012',
                'ssc_cgp' => '4.50',
                'board' => 'Chittagong',
                'hsc' => '2014',
                'hsc_cgp' => '4.98'
            ]
        ]

    ];

   $json = json_encode($information);

   $my_json = '
   [{"name":"prappo","address":{"present":{"street":"132\/2","street-2":"East Rampura","city":"Dhaka"},"permanent":{"street":"parbatipur","street-2":"Parbatipur","city":"Dinajpur"}},"education":{"ssc":"2012","ssc_cgp":"4.50","board":"Dhaka","hsc":"2014","hsc_cgp":"4.98"}},{"name":"Shreya","address":{"present":{"street":"132\/2","street-2":"East Rampura","city":"Khagrachori"},"permanent":{"street":"parbatipur","street-2":"Parbatipur","city":"Dinajpur"}},"education":{"ssc":"2012","ssc_cgp":"4.50","board":"Chittagong","hsc":"2014","hsc_cgp":"4.98"}}]
   ';

   $convert_array = json_decode($my_json,true);

   $information = $convert_array;
  
    return view('student_result',compact('information'));

    // $name = ['prappo','prince'];

   

    // foreach($information as $info){

    //     foreach($info as $key => $value){

    //         if($key == 'address'){
    //             echo $value['present']['city'];
    //         }

    //     }

    // }

    // foreach($information as $in){
    //     foreach($in as $key => $value){
    //         if($key == 'education'){
    //             echo $value['board'];
    //         }
    //     }
    // }

});

Route::get('/data',function(){

   $data = file_get_contents('https://corona.lmao.ninja/all');

   $arr = json_decode($data,true);
   return $arr['deaths'];
}); */


Route:: get('/','covidController@covid');

Route::get('/test','covidController@test_code');

Route::get('/country','covidController@test_country');