<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class accController extends Controller
{

public function edit(string $id)
    {
        // if(!Auth::check()) {
        //     return redirect('login');
        // }
        $post = DB::table('takebooks')
        ->select('status')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('admin/pages/accEdit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // if(!Auth::check()) {
        //     return redirect('login');
        // }

        $status = $request->input('status');
        DB::table('takebooks') 
        ->where('id', $id)
        ->update([
            'status' => $status
        ]);
        return redirect("/acc");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('users')
        ->where('id', $id)
        ->delete();

    return redirect("/acc");
    }

}