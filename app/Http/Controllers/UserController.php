<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    const PATH_VIEW = 'user.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $listUsers = User::with('phongBan')->get();
        // dd($listUsers);

        $listUsers = DB::table('users')
                    ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
                    ->select('users.name','users.email', 'phongban.ten_donvi', 'users.id')
                    ->get();
        // dd($listUsers);

        return view(self::PATH_VIEW . __FUNCTION__,compact('listUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phongbans = DB::table('phongban')->get();
        // dd($phongbans);
        return view(self::PATH_VIEW . __FUNCTION__,compact('phongbans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        User::query()->create($data);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $phongbans = DB::table('phongban')->get();
        return view(self::PATH_VIEW . __FUNCTION__,compact('user','phongbans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
        $phongbans = DB::table('phongban')->get();
        return view(self::PATH_VIEW . __FUNCTION__,compact('user','phongbans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
