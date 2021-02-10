@extends('layouts.main')
@section('title',$title)
@section('content')

<main >
    <table class="shopview">
        <tr>
            <td class="shopview1"> <b>Code</b> </td> 
            <td class="shopview2"> <span class="blue">::</span> </td>
            <td class="shopview3"> {{ $shop->code }} </td>
        </tr>
        <tr>
            <td class="shopview1"><b>Name</b> </td> 
            <td class="shopview2"> <span class="blue">::</span> </td>
            <td class="shopview3"> <em>{{ $shop->name }}</em> </td>
        </tr>
        <tr>
            <td class="shopview1"><b>Owner</b> </td>
            <td class="shopview2"> <span class="blue">::</span> </td>
            <td class="shopview3">{{ $shop->owner }} </td>
        </tr>
        <tr>
            <td class="shopview1"><b>Location</b> </td>
            <td class="shopview2"> <span class="blue">::</span> </td>
            <td class="shopview3"> {{ $shop->latitude }}, {{ $shop->longitude }} </td>
        </tr>
        <tr>
            <td class="shopview1"><b>Address</b> </td>
            <td class="shopview2"> <span class="blue">::</span> </td>
            <td class="shopviewspe"> {{ $shop->address }} </td>
        </tr>
    </table>
</main>

@endsection