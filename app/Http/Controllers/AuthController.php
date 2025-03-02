<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

public function login(){
return view('authlogin'); }

public function doLogin(Request $request) {
$request->validate([
'email'=>'required | email',
'password'=> 'required|min:4' ]);
$credentials = ['email'=>$request->input('email'),
'password'=>$request->input('password') ];
if (Auth::attempt($credentials)) {
    $request->session()->regenerate();
    return redirect()->route('organisation'); 
}
// si on arrive ici ca veut dire qu' il ne s' est pas connecte' donc on le redirige quelques part
return to_route('authlogin')->withErrors( [
'email'=> ""
])->onlyInput('email'); }

public function logout(){
    Auth::logout();
    return redirect()->route('accueil');
}}