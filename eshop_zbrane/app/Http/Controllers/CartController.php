<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knife;

class CartController extends Controller
{
    // Přidat nůž do košíku
    public function addToCart($id)
    {
        $knife = Knife::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $knife->name,
                'price' => $knife->price,
                'quantity' => 1,
                'image' => $knife->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Nůž byl přidán do košíku!');
    }

    // Zobrazení košíku
    public function viewCart()
    {
        return view('cart'); // Mějte tuto metodu, která vrátí zobrazení košíku
    }

    // Odstranit položku z košíku
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Položka byla odstraněna z košíku.');
    }
}
