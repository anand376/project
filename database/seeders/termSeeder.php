<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\term;

class termSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 5; $i++){
            $data = term::create([
                "name" => 'term'.$i,

            ]);
        }
    }
}
