@extends('layout')

@section('content')
    <h2>Košík</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <table>
            <thead>
                <tr>
                    
                    <th>Název</th>
                    <th>Cena</th>
                    <th>Množství</th>
                    <th>Celková cena</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['price'] }} CZK</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['price'] * $details['quantity'] }} CZK</td>
                        <td>
                            <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger">Odstranit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <strong>Celková cena: </strong>
            {{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }} CZK
        </div>
    @else
        <p>Košík je prázdný.</p>
    @endif
@endsection
