@extends('layouts.main')
@section('title',$title)
@section('content')

<main>
    <table class="shopview">
        <tr>
        <td class="shopview1"><b>Code</b></td>
        <td class="shopview2"><span class="blue">::</span></td>
        <td class="shopview3"><span> {{ $product->code }}</span></td>
    </tr>
    <tr>
        <td class="shopview1"><b>Name</b></td>
        <td class="shopview2"><span class="blue">::</span></td>
        <td class="shopview3"><em>{{ $product->name }}</em></td>
    </tr>
    <tr>
        <td class="shopview1"><b>Price</b></td>
        <td class="shopview2"><span class="blue">::</span></td>
        <td class="shopviewspe"><span>{{ number_format((double)$product->price, 2) }}</span></td>
    </tr>
    </table>
    <pre class="productdes">{{ $product->description }}</pre>

</main>

@endsection