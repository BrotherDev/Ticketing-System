<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();
        $roles = Auth::user();

        if ($roles->role == 'user') {
            $tickets = Auth::user()->role == 'user' ? Ticket::all() : Auth::user()->tickets;
            return view('frontend.dashboard.user', compact('users', 'tickets'));

        } elseif ($roles->role == 'agent') {

            $tickets = Auth::user()->role == 'agent' ? Ticket::all() : Auth::user()->tickets;
            return view('frontend.dashboard.agent' , compact('users', 'tickets'));

        } elseif ($roles->role == 'moderator') {
            
            $tickets = Auth::user()->role == 'moderator' ? Ticket::paginate(10) : Auth::user()->tickets()->paginate(10); 
            $agents = User::where('role', 'agent')->get();
            return view('frontend.dashboard.moderator' , compact('users', 'tickets', 'agents'));

        } else {

            return redirect()->route('login');
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
