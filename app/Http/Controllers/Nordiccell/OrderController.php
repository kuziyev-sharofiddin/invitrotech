<?php

namespace App\Http\Controllers\Nordiccell;

use App\Http\Controllers\Controller;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cancelOrder($order)
    {
        $order = $this->repository->getById($order);
        $order->delivery_status='You canceled the order';
        $order->save();
        return $order;
    }

    public function cashOrder($order){
        $user = Auth::user()->id;
        $carts = $this->cartRepository->getUserId($user);
        foreach($carts as $cart){
            $order = $this->repository->getById($order);
            $order->user_id = $cart->user_id;
            $order->product_title = $cart->product_title;
            $order->price = $cart->price;
            $order->quantity = $cart->quantity;
            $order->image = $cart->image;
            $order->product_id = $cart->product_id;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $cart->id;
            $cartId = $this->cartRepository->getById($cart_id);
            $cartId->delete();
        }
        return $order;
    }

    public function order() {
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.pages.order', compact('parentCategories'));
    }
}
