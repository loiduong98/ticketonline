<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('trangchu', function ($view) {
            if(Session(cart))
            {
                $oldCard = Session::get('cart');
                $cart = new Cart($oldcard);
            }
            $view->with(['cart'=>Session::get('card'),'ticket_card'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);           
        });
    }
}
