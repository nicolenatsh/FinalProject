<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        
        $this->middleware('auth');
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	Alert::success('Profil Berhasil Diperbarui', '');
    	return redirect('profile');
    }
}
