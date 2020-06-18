<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetCovidData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the list of covid data from the json file';

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
        //
    }
}
