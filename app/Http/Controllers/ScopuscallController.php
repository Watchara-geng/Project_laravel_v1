<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Paper;
use App\Models\Teacher;
use Illuminate\Support\Facades\Http;
class ScopuscallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        foreach($data as $name) {

            $fname = substr($name['fname'],0,1);
            $lname = $name['lname'];
            $id    = $name['id'];

            $url = Http::get('https://api.elsevier.com/content/search/scopus?', [
                'query' => "AUTHOR-NAME("."$lname".","."$fname".")",
                'apikey'=> '6ab3c2a01c29f0e36b00c8fa1d013f83',
            ])->json();

            //$check=$url["search-results"]["entry"];
            $content=$url["search-results"]["entry"];
            //print(response()->json($content));
            if(isset($url['search-results'])==true){
                print_r('a');
                break;
                //continue;
            }else{

            $links=$url["search-results"]["link"];
            //print_r($links);
            do {
                $ref='prev';
                foreach($links as $link){
                    if($link['@ref'] =='next'){
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
                if (Paper::where('paper_name', '=', $item['dc:title'])->first()==null){
                    $paper = new Paper;
                    $paper->paper_name = $item['dc:title'];
                    $paper->paper_type = $item['prism:pageRange'];
                    $paper->save();
                    //$user = User::findOrFail($id);
                    $paper->teacher()->sync($id);
                }

                else{
                    $paper = Paper::where('paper_name', '=', $item['dc:title'])->first();
                    $paperid=$paper->id;
                    $user = User::find($id);

                    $hasTask = $user->paper()->where('paper_id', $paperid)->exists();
                    if ($hasTask!=$paperid){
                        /*$user = new User;
                        $paper = Paper::find($paperid);
                        $$user->paper()->sync($paper);*/
                        $paper = Paper::find($paperid);
                        $paper->teacher()->attach($id);
                    }
                    else{
                        continue;
                    }
                }

            }
        }
    }
    return 'succes';

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$item = User::with('Paper')->findOrFail($id);
        return $item;*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
