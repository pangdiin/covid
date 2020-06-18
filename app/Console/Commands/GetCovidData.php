<?php

namespace App\Console\Commands;

use App\CovidObservation;
use Carbon\Carbon;
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
        $jsonData = file_get_contents("convertcsv.json");

        $data = json_decode($jsonData, true);

        foreach ($data as $key => $value) {
            $this->save($value);
        }
    }

    private function save($data)
    {
        $covid = new CovidObservation();
        $covid->sno                 = $data['SNo'];
        $covid->observation_date    = Carbon::parse($data['ObservationDate'])->format('Y-m-d');
        $covid->province_state      = $data['Province/State'];
        $covid->country_region      = $data['Country/Region'];
        $covid->confirmed           = $data['Confirmed'];
        $covid->deaths              = $data['Deaths'];
        $covid->recovered           = $data['Recovered'];
        $covid->updated_at          = $data['Last Update'];
        $covid->save();
    }
}
