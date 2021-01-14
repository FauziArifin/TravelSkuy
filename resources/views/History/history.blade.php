@extends('layout/mainUmum')


@section('title', 'History')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>
    <div class='container' style="width:70%;">
        <h4 class="mt-3" style='text-align: center;'>History</h4>
    
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col" style="width: 30%;">Trip Name</th>
                    <th scope="col" style="width: 25%;">Tour Guide</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->Trip->nama}}</td>
                    <td>{{ $booking->Trip->TourGuideName }}</td>
                    <td>{{ date('F j, Y',strtotime($booking->Trip->StartDate)) }}</td>
                    <td>{{ date('F j, Y',strtotime($booking->Trip->EndDate)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection