<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexHistory()
    {
        $bookings = booking::where('user_id', '=', Auth::user()->id)->get();

        if ($bookings->isEmpty()) {
            return view('/History/emptyHistory');
        } else {
            return view('/History/history', compact('bookings'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'trip_id' => 'required',
            'user_id' => 'required',          
        ]);

        Booking::create([
            'trip_id' => $request->trip_id,
            'user_id' => $request->user_id,
        ]);
        
        // $bookings = Booking::where('user_id', Auth::user()->id);
        // $bookings = booking::where('user_id', '=', Auth::user()->id)->get();
        $GuideTours = user::where('role', '=', 'tourguide')->get();

        foreach ($GuideTours as $GuideTour){
            if ( $GuideTour->name == $request->TourGuideName){
                $contactWA = $GuideTour->nohp;
            }
        }
        
        return view('/contactWA', compact('contactWA'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
