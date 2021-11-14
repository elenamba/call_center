<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Call;
use Illuminate\Database\Seeder;


class ImportCsvFile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', ' 512M');
        $file = fopen(storage_path('app/public/file.csv'), 'r');

        fgets($file);

        while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {

            $user = User::firstOrCreate([
                'name' => $data[0]
            ]);

            $clients = $user->clients()->saveMany([

                new Client([
                    'name' => $data[1],
                    'client_type' => $data[2],
                ])
            ]);

            $clients[0]->call()->saveMany([
                new Call([
                    'date' => $data[3],
                    'duration' => $data[4],
                    'type_call' => $data[5],
                    'external_call_score' => $data[6],
                ])
            ]);
        }
    }
}
