<?php


namespace App\Services;


use App\Services\BillProvider\Flutterwave;
use App\Services\BillProvider\Paystack;
use App\Services\BillProvider\Stripe;

class BillProviderService
{
    public function paymentprocessor($service)
    {
        $processors = [
            'paystack' => Paystack::class,
            'flutterwave' => Flutterwave::class,
            'stripe' => Stripe::class,
        ];

        $run = app()->make($processors[$service]);

        return $run->billUser();
    }
}
