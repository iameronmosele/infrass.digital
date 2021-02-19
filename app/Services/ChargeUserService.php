<?php


namespace App\Services;

use App\Mail\NotifyUserAccountMail;
use App\Models\User;
use App\Services\BillProvider\Flutterwave;
use App\Services\BillProvider\Paystack;
use App\Services\BillProvider\Stripe;
use App\Services\BillProviderService;
use Illuminate\Support\Facades\Mail;

class ChargeUserService
{
    public function loop()
    {
        foreach (User::where('billing_status', 0)->cursor() as $user) {
            $user->billed_by = app(BillProviderService::class)->paymentprocessor($user->billing_provider);
            $user->save();

            //create
            Mail::to($user->email)->send(new NotifyUserAccountMail());
        }
    }

}
