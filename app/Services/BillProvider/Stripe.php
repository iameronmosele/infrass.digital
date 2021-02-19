<?php


namespace App\Services\BillProvider;


class Stripe implements IBillProvider
{
    public function billUser()
    {
        return 'stripe';
    }
}
