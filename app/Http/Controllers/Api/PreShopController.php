<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as DB;
use Auth;
use App\User;




class PreShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

/**
     select all shops that belong to the authenticated user
     */

        $userId=Auth::guard('api')->id();

        $shops = User::find($userId)->shops->toArray();
     return response()->json( $shops, 200);

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

/**
     insert  shop which has been selected
     */
     $user_id = $request->input('user_id');
     $shop_id= $request->input('shop_id');



     $query= DB::table('shop_user')->insert([
        'shop_id' => $shop_id,
    'user_id' => $user_id, //pass your userID here
]);


     return response()->json( $query, 201);


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

     DB::table('shop_user')->where('shop_id', '=', $id)->delete();
     return response()->json( "it has been deleted", 204);



 }



}
