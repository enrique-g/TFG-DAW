<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
//100% casero, lo encontré y es muy útil
class ClearAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache, route, view and create a cache file for faster configuration loading';

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
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        echo Artisan::output();

        Artisan::call('route:clear');
        echo Artisan::output();

        Artisan::call('view:clear');
        echo Artisan::output();

        Artisan::call('config:cache');
        echo Artisan::output();

        return;
    }
}
