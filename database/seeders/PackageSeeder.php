<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'رفود أساسي'
        ]);

        Package::create([
            'name' => 'رفود متقدم'
        ]);

        Package::create([
            'name' => 'رفود إحترافي'
        ]);
    }
}
