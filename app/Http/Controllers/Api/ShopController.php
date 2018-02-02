<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
 use Illuminate\Support\Facades\DB as DB;
  use Auth;
use Response;





class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user =Auth::guard('api')->id();
    
             

$shop=Shop::all();
foreach($shop as $s)
{
$lat=$s->lat;
$lng=$s->lng;
$id=$s->id;


    $radius=10;
            

            $s=DB::select('SELECT  name,city,picture,email,lat,lng ,type ,( 6371 * acos( cos( radians(' .$lat. ') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) + sin( radians('.$lat.') ) * sin( radians( lat ) ) ) )  AS distance , shops.id
                    FROM shops LEFT JOIN  shop_user ON shops.id=shop_user.shop_id AND shop_user.user_id ='.$user.' where(shop_user.shop_id is NULL) HAVING distance <10  ORDER BY distance limit 15');
               



                                    


 return $s;
}




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
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
