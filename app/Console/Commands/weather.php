<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\CityRecords;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
class weather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $city = City::get();
        foreach($city as $cities){
        $weather_records = $this->api($cities->lat,$cities->long);
       $weather_records = json_decode($weather_records);
        $data = [
        'city_id'=>$cities->name,
        'weather_condition'=>$weather_records->weather[0]->main,
        'temperature_celsius'=>$weather_records->main->temp,
        'feels_like_celsius'=>$weather_records->main->feels_like,
        'humidity'=>$weather_records->main->humidity,
        'wind_speed'=>$weather_records->wind->speed,
        // 'created_at'=>$weather_records->date->date

       ];
       CityRecords::create($data);
        // $datas= CityRecords::save($data)->get();
       print_r($data);
        
    }
  
        
    }
    
         public function api($lat,$long){
        //Get API ENDPOINT response 
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$long."&appid=4c7f1f68689243332f5672f3f5d973e0",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_TIMEOUT => 30000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        // Set Here Your Requesred Headers
        'Content-Type: application/json',
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
    }
}
