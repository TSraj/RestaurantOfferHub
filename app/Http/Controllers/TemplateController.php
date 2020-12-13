<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Offer;

class TemplateController extends Controller
{
    public function index(){
        
        return view("Frontend.home");
    }

    public function profile(){
        $current_offers = Offer::where('user_id', Auth::id())->get();
        $user = Auth::user();
        return view('profile', compact('user', 'current_offers'));
    }

    public function addOffer(Request $request) {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
        ]);
        $offer = new Offer();
        $offer->user_id = Auth::user()->id;
        $offer->name = $request->name;
        $path = '';
        if ($request->hasFile('img')) {
            $extension = $request->img->extension();
            $name = time().Auth::user()->id.'.'.$extension;
            $path = $request->img->storeAs('images', $name);
        }
        $offer->img = $path;
        $offer->save();

        session()->flash('success', 'Offer Added');
        return redirect()->back();
    }
}
