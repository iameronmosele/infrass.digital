<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ChargeUserService;

class ChargeUserAccountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'charge-account:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process accounts for users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param ChargeUserService $chargeUserService
     * @return int
     */
    public function handle(ChargeUserService $chargeUserService)
    {
        $chargeUserService->loop();
    }
}
