<?php


namespace App\Services\BillProvider;


class Paystack implements IBillProvider
{
    public function billUser()
    {
        return 'paystack';
    }
}
