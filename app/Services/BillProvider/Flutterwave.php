<?php


namespace App\Services\BillProvider;


class Flutterwave implements IBillProvider
{
    public function billUser()
    {
        return 'flutterwave';
    }
}
