<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;
use App\Services\BillProvider\IBillProvider;
use App\Services\BillProvider\Stripe;
use App\Services\BillProvider\Paystack;
use App\Services\BillProvider\Flutterwave;


class PaymentServiceProviderTest extends TestCase
{
    /**
     * returns type of processor
     * @test
     */
    public function get_processor_test()
    {
        $processors = [
            'paystack' => Paystack::class,
            'flutterwave' => Flutterwave::class,
            'stripe' => Stripe::class,
        ];

        $run = app()->make(Paystack::class);

        $this->assertEquals('paystack',$run->billUser());
    }
}
