<?php

namespace App\Http\Controllers;

use App\Models\Daskboard;
use App\Models\City;
use App\Models\CityRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaskboardController extends Controller
{
    public function index(){
       // $pages = CityRecords::orderBy('created_at','desc')->paginate(5);
        // $pages = DB::table('city_records')->paginate(10);
    
        $city_records = CityRecords::get();
        $city = City::get();
        // dd($city);
        //dd($city_records);
       //return view('dashboard', compact('city_records'));
       return view("dashboard")->with("city_records",$city_records)->with("city",$city);
    }

    public function edit( $id)
        {//dd($id);
        $daskboard = CityRecords::find($id);
        //dd($daskboard);
        return view('edit',compact('daskboard'));
        }

    public function update(Request $request, $id){
        $request->validate([
            'city_id'=>'required',
            'weather_condition'=>'required',
            'temperature_celsius'=>'required',
            'feels_like_celsius'=>'required',
            'humidity'=>'required',
            'wind_speed'=>'required'
           
        ]);

        $cityRecords = CityRecords::findorFail($request->id);
        $cityRecords->city_id = $request->city_id;
        $cityRecords->weather_condition = $request->weather_condition;
        $cityRecords->temperature_celsius = $request->temperature_celsius;
        $cityRecords->feels_like_celsius = $request->feels_like_celsius;
        $cityRecords->humidity = $request->humidity;
        $cityRecords->wind_speed = $request->wind_speed;
        $cityRecords->save();
        return redirect()->route('user.dashboard')->with('status','successfully');

    }

    public function destroy(CityRecords $daskboard, $id)
        {
            $daskboard = CityRecords::where('id', $id)->delete();
        return redirect()->route('user.dashboard')
        ->with('success',' deleted successfully');
        }

        public function dashboard(){
            return view('dashboard');
        //     $city_records = CityRecords::get();
        //     //dd($city_records);
        //    return view('dashboard', compact('city_records'));
        }

        // public function search(Request $request){
        
          
        //     $search = $request->input('search');
        //     //dd($search);
            
        //     $city = CityRecords::where('city_id', 'LIKE', '%' . $search . '%')
        //         //  ->orWhere('id', 'LIKE', "%{$search}%")
        //         ->get();
        //         //dd($city);
        
        //     return view('dashboard', compact('city'));
        // }
    
}
