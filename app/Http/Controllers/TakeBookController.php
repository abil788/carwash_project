<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TakeBookController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.acc');
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('pages.services');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $name = $request->input('name');
        $no_hp = $request->input('no_hp');
        $car_type = $request->input('car_type');
        $time = $request->input('time');
        $message = $request->input('message');

        DB::table('takebooks')->insert([
            'name' => $name,
            'no_hp' => $no_hp,
            'car_type' => $car_type,
            'time' => $time,
            'message' => $message,
        ]);

        return redirect('/home');
    }

    public function index2()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $posts = DB::table('takebooks')
            ->select('id', 'name', 'no_hp', 'car_type', 'time', 'message', 'status', 'created_at')
            ->get();

        $view_data = [
            'posts' => $posts
        ];

        return view('admin.pages.acc', $view_data);
    }

   
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|boolean',
        ]);

        $takebook = DB::table('takebooks')->where('id', $id)->first();

        if ($takebook) {
            DB::table('takebooks')->where('id', $id)->update(['status' => $request->status]);

            return redirect()->back()->with('success', 'Status updated successfully!');
        }

        return redirect()->back()->with('error', 'Record not found!');
    }

    // Tambahan: Method untuk langsung mengubah status menjadi Done
    public function changeStatusToDone($id)
    {
        $takebook = DB::table('takebooks')->where('id', $id)->first();

        if ($takebook) {
            DB::table('takebooks')->where('id', $id)->update(['status' => 1]);

            return redirect()->back()->with('success', 'Status updated to Done!');
        }

        return redirect()->back()->with('error', 'Record not found!');
    }

    public function changeStatusToCanceled($id)
{
    $takebook = DB::table('takebooks')->where('id', $id)->first();

    if ($takebook) {
        DB::table('takebooks')->where('id', $id)->update(['status' => 2]);

        return redirect()->back()->with('success', 'Status updated to Canceled!');
    }

    return redirect()->back()->with('error', 'Record not found!');
}
}
