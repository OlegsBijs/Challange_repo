<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    /**
     * Display my account page
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('page.account');
    }

    /**
     * Login user in to the system
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('success')->with('success', 'Login successfull!');
        }
        return redirect('/')->with('error', 'Invalid email or password. Please try again.');
    }


    /**
     * Logout user from the system
     *
     */
    public function logout()
    {
        // implement logout functionality

        return redirect('/');
    }

    /**
     * Register user in the system
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        // implement register functionality
    }

    /**
     * Display a success message for logged-in users
     *
     */
    public function success()
    {
        // implement check if the user is authorized
        if (true) {
            return view('page.success')->with(['firstname' => 'John', 'lastname' => 'Smith']);
        }

        return redirect('/');
    }
}
