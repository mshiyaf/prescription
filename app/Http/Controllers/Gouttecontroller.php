<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Medicine;
class Gouttecontroller extends Controller
{ public function crawl(){

  $client = new Client();
  $alpha=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
  foreach ($alpha as $alp) {
  $crawler = $client->request("GET", "https://www.medindia.net/doctors/drug_information/home.asp?alpha=$alp");
  $crawler->filter('h4 > a')->each(function ($node) {
    print $node->text().",";
    $medicine = new Medicine;
    $medicine->medicine_name=$node->text();
    $medicine->save();

});
}
}
}
