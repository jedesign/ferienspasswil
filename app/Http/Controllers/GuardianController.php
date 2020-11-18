<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'guardian' => auth()->user()->guardian,
        ]);
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
}
