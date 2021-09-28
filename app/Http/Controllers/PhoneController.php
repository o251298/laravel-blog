<?php

namespace App\Http\Controllers;

use App\Number;
use App\Owner;
use App\Phone;
use App\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ==================================
        //              ОДИН К ОДНОМУ       |
        // ==================================

        //        $users = User::all();
        //        foreach ($users as $user){
        //            dump($user->username);
        //            dump($user->phone);
        //        }

        // ==================================
        //  ОДИН К ОДНОМУ ОБРАТНОЕ ОТНОШЕНИЕ|
        // ==================================

        //       $phones = Phone::all();
        //       foreach ($phones as $phone){
        //           dump($phone->phone);
        //           dump($phone->user);
        //       }

        // ==================================
        //          ОДИН КО МНОГИМ          |
        // ==================================

        //        $phone = Phone::findOrFail(5);
        //        dump($phone->phone);
        //        foreach ($numbers as $number){
        //            dump($number->number);
        //        }

        // ==================================
        // ОДИН КО МНОГИМ ОБРАТНОЕ ОТНОШЕНИЕ|
        // ==================================

        //        $number = Number::findOrFail(2);
        //        dump($number->number);
        //        dd($number->phone);
        //

        // ==================================
        //          МНОГИЕ КО МНОГИМ        |
        // ==================================

        //    $users = User::find(6);
        //    foreach ($users->role as $user){
        //        dump($user->role_name);
        //    }

        // ==================================
        //   ОДИН ЧЕРЕЗ ОТНОШЕНИЯ           |
        // ==================================

        //    $users = User::all();
        //    foreach ($users as $user){
        //        dump($user->username);
        //        dump($user->phoneOwner);
        //    }


        // ==================================
        //   МНОГИЕ ЧЕРЕЗ ОТНОШЕНИЯ         |
        // ==================================

        //    $users = User::all();
        //    foreach ($users as $user){
        //        dump($user->username);
        //        dump($user->phoneOwners);
        //    }




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
