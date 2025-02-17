<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = trip::all()->take(3);
        return view('index', compact('trips'));
    }

    public function indexTourGuide()
    {
        $trips = trip::where('TourGuideName', '=', Auth::user()->name)->get();
        return view('Guider/indexGuider', compact('trips'));
    }


    public function list()
    {
        $trips = trip::all();

        return view('travelList', compact('trips'));
    }
    public function listTripGuider()
    {
        $trips = trip::where('TourGuideName', '=', Auth::user()->name)->get();
        return view('Guider/TravelListGuider', compact('trips'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $GuideTours = user::where('role', '=', 'tourguide')->get();
        return view('create', compact('GuideTours'));
    }

    public function createTripGuider()
    {   
        // $GuideTours = user::where('name', '=', Auth::user()->name)->get();
        $GuideTourName = Auth::user()->name;
        return view('/Guider/CreateTripGuider', compact('GuideTourName'));
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
            'image' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'nama' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'minimal' => 'required',
            'maksimal' => 'required',
            'description' => 'required',
        ]);


        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

        $request->image->move(public_path('img'), $imgName);

        // Product::create($request->all());
        Trip::create([
            'nama' => $request->nama,
            'StartDate' => $request->startDate,
            'EndDate' => $request->endDate,
            'minimal' => $request->minimal,
            'maksimal' => $request->maksimal,
            'description' => $request->description,
            'TourGuideName' => $request->TourGuideName,
            'img_path' => $imgName,
            'price' => $request->price,
        ]);

        return redirect('/TravelList')->with('status', 'Trip Plan Berhasil ditambahkan');
    }

    public function storeGuider(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'nama' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'minimal' => 'required',
            'maksimal' => 'required',
            'description' => 'required',
        ]);


        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

        $request->image->move(public_path('img'), $imgName);

        // Product::create($request->all());
        Trip::create([
            'nama' => $request->nama,
            'StartDate' => $request->startDate,
            'EndDate' => $request->endDate,
            'minimal' => $request->minimal,
            'maksimal' => $request->maksimal,
            'description' => $request->description,
            'TourGuideName' => $request->TourGuideName,
            'img_path' => $imgName,
            'price' => $request->price,
        ]);

        return redirect('/TravelListGuider')->with('status', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
