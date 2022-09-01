<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('plantilla');
        //return redirect()->route('plantilla');
    }

    public function listarUsuarios(Request $request){
        $user=User::all();
        return view('user.index',compact('user'));
    }

    public function registrarUser($id){
        $us=User::findOrFail($id);
        event(new Registered($us));
        $user=User::all();
        session()->put('email_send','El email ha sido enviado!');
        return view("user.index",compact('user'))->with('email_send','El email ha sido enviado!');
    }
}
