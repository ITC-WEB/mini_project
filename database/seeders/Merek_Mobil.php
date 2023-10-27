<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Merek;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Merek_Mobil extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Merek::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Honda'],
            ['name' => 'Toyota'],
            ['name' => 'Suzuki'],
            ['name' => 'Daihatsu'],
        ];

        foreach ($data as $value) {
            Merek::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
