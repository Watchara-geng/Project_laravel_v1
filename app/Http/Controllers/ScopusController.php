<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScopusController extends Controller
{
    function callapi(){

        //$response= Http::get('https://api.elsevier.com/content/search/scopus?query=orcid(0000-0001-7579-2485)&apikey=8c233a51930aa900046a5311f814ca29')->json();
        //return $response["search-results"]["entry"];
        $data=Researchers::all();
        foreach($data as $name) {

            $fname = substr($name['Fname'],0,1);
            $lname = $name['Lname'];

            $url = Http::get('https://api.elsevier.com/content/search/scopus?', [
                'query' => "AUTHOR-NAME("."$lname".","."$fname".")",
                'apikey'=> '6ab3c2a01c29f0e36b00c8fa1d013f83',
            ])->json();

            $content=$url["search-results"]["entry"];
            $links=$url["search-results"]["link"];
            //print_r($links);
            do {
                print_r($lname.$fname);
                echo "<br>";
                $ref='prev';
                foreach($links as $link){
                    if($link['@ref'] =='next'){
                        /*print_r($link['@href']);
                        echo "<br>";
                        print_r($link['@ref']);
                        echo "<br>";*/
                        $link2 = $link['@href'];
                        $link2 = Http::get("$link2")->json();
                        $links=$link2["search-results"]["link"];
                        $nextcontent=$link2["search-results"]["entry"];
                        foreach($nextcontent as $item) {
                            array_push($content,$item);
                        }
                    }
                }
            }while ($ref != 'prev');

            foreach($content as $item) {
                if(array_key_exists('error', $item)){
                    continue;
                }else{
                    print_r($item['dc:identifier']);
                    print_r($item['dc:title']);
                    print_r($item['prism:url']);
                    print_r($item['dc:creator']);
                    print_r($item['prism:coverDate']);
                    print_r($item['prism:publicationName']);
                    print_r($item['prism:volume']);
                    print_r($item['prism:issueIdentifier']);
                    print_r($item['prism:pageRange']);
                    print_r($item['citedby-count']);
                    print_r($item['prism:doi']);
                }
                echo "<br>";
            }

            /*if($links['@ref'] =='next'){
                $ref = $links['@href'];
                print_r($ref);
            }*/
        }
            /*do {
                $ref = 'prev';
                if($links['@ref'] =='next'){
                    $ref = $links['@ref'];

                    $url2 = $links['@href'];
                    $url2 = Http::get("$url2")->json();
                    $links=$url2["search-results"]["link"][2];
                }
              } while ($ref != 'prev');*/


            /*foreach($links as $link){
                //ในการหาจะต้องใช้ link
                if($link['@ref'] == 'next'){
                    $url = $link['@href'];
                    $url = Http::get("$url")->json();
                    $nextcontent=$url["search-results"]["entry"];

                    foreach($nextcontent as $item) {
                        array_push($content,$item);
                    }
                }
            }*/

            //ในการเอาไปลงฐานข้อมูลจะใช้ entry
            /*foreach($content as $item) {
                    $teacher = new Teacher;
                    $teacher->Title = $item['dc:title'];
                    $teacher->Page = $item['prism:pageRange'];
                    $teacher->save();
            }*/

        //$test=$response["search-results"]["link"][0]["@ref"];
        //$test=$response["search-results"]["link"];
        //$url = "";
        /*do {
            $ref = 'prev';
            foreach($links as $link) {
                if($link['@ref'] == 'next'){
                    $ref = $link['@ref'];
                    $url = $link['@href'];
                    $url = Http::get("$url")->json();
                    $links=$url["search-results"]["link"];
                }
            }
            print_r($ref);
          } while ($ref != 'prev');*/

        //return $test;
    }
}
