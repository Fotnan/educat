<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('admin.users.index', compact('users'));
    }

    public function privet(){
        $users=User::where('personal_code','<>',0)->select('id','name','personal_code','created_at','email','email_verified_at', 'first_name', 'last_name', 'phone')->get();

        return view('admin.users.privet', compact('users'));
    }

    public function firm(){
        $users=User::where('company','<>',null)->select('id','name','company','created_at','email','email_verified_at', 'payer_name', 'payer_address', 'manager_first', 'manager_last', 'manager_mail','manager_phone')->get();

        return view('admin.users.firm', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
