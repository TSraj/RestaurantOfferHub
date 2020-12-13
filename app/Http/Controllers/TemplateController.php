<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Offer;
use App\User;
use App\Reservation;

class TemplateController extends Controller
{
    public function index(){
        $restaurants = User::where('type', 'restaurant')->get();
    
        return view("Frontend.home", compact('restaurants'));
    }

    public function profile(){
        $current_offers = Offer::where('user_id', Auth::id())->get();
        $user = Auth::user();
        $messages = Reservation::where('user_id', $user->id)->get();
        return view('profile', compact('user', 'current_offers', 'messages'));
    }

    public function addOffer(Request $request) {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
            'price' => 'required'
        ]);
        $offer = new Offer();
        $offer->user_id = Auth::user()->id;
        $offer->name = $request->name;
        $offer->price = $request->price;
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

    public function reservation(Request $request) {
        $reservation = new Reservation();
        $reservation->user_id = $request->restaurant;
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->person_number = $request->person_number;
        $reservation->date = $request->date;
        $reservation->msg = $request->msg;
        $reservation->save();
        session()->flash('success', 'Send Reservation');
        return redirect()->back();
    }
}
