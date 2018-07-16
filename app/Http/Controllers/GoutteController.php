<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Medicine;

class GoutteController extends Controller
{
    public function getCrawl()
    {
        $client = new Client();
        $alpha = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        foreach ($alpha as $alp) {
        $crawler = $client->request("GET", "https://www.medindia.net/doctors/drug_information/home.asp?alpha=$alp");

        $crawler->filter('h4 > a')->each(function ($node) {
          // print $node2->text().",";
          $medicine = new Medicine;
          $medicine->medicine_name = $node->text();
          $medicine->save();

        });

        // $client = new Client();
        //
        // $crawler = $client->request("GET", "https://www.medindia.net/doctors/drug_information/home.asp?alpha=Q");
        // $crawler->filter('ul.mi-list-group > li.list-item')->each(function ($node) {
        //
        // print $node->text().",";
        // $medicine = Medicine::get();
        //
        // $medicine->medicine_details = $node->text();
        //
        // $medicine->save();
        // dd($medicine->medicine_name);
        // });


      }


    }
}
