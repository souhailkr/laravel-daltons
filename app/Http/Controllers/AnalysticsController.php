<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23/03/2019
 * Time: 16:30
 */

namespace App\Http\Controllers;

use GuzzleHttp;
use View;
use Charts;
use DB;
use App\User;
use Illuminate\Support\Facades\Schema;



class AnalysticsController extends Controller
{

    private $IP_ADRESS = 'http://localhost:3015/';
    //get Infos
    //..
    public function show(){

//
        $client = new GuzzleHttp\Client(['base_uri' =>'http://localhost:3000/user/showAll']);
        $response = $client->request('GET');
        $contents = $response->getBody()->getContents();
        $data = GuzzleHttp\json_decode($contents, true);

        $protanopia = 0 ;
        $deuteranopia = 0 ;
        $tritanopia = 0 ;




        $users = User::where(DB::raw("(DATE_FORMAT(createdAt,'%Y'))"),date('Y'))
            ->get();


//        $d = DB::table("users")
//            ->select("id","firstName","createdAt")
//            ->where(DB::raw("(DATE_FORMAT(createdAt,'%Y-%m'))"),date('m'))
//            ->get();

        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title("Monthly new Register Users")
            ->elementLabel("Total Users")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->dateColumn('createdAt')

            ->groupByMonth(date('Y'), true);

        foreach($data as $item) {


            if($item['TYPE_DALTONISME_USER']==="Protanopia")
            {
                $protanopia = ++$protanopia ;
            }
            if($item['TYPE_DALTONISME_USER']==="Deuteranopia")
            {
                $deuteranopia = ++$deuteranopia ;
            } if($item['TYPE_DALTONISME_USER']==="Tritanopia")
            {
                $tritanopia = ++$tritanopia ;
            }

        }
        $c = Charts::create('donut', 'highcharts')
            ->title('Colorblind users')
            ->labels(['Protanopia', 'Deuternaopia', 'Tritanopia'])
            ->values([$protanopia,$deuteranopia,$tritanopia])
            ->dimensions(1000,500)
            ->responsive(false);

        $users=count($data);



        $client2 = new GuzzleHttp\Client(['base_uri' =>'http://localhost:3000/user/showAll']);
        $response2 = $client2->request('GET');
        $contents2 = $response2->getBody()->getContents();
        $data2 = GuzzleHttp\json_decode($contents2, true);
        $pets=count($data2);


        //dd($contents);
        return View::make('analytics')->with('users', $users)->with('pets', $pets)->with('c', $c)->with('chart', $chart);
//        return Redirect::to('analytics');

    }

}