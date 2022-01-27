<?php

namespace Database\Seeders;

use App\Models\Ganga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 60 ; $i++) {
            Ganga::factory()->count(1)->create();
            File::copy(public_path('img/imagenPrueba.jpg'),public_path('img/'.$i.'-ganga-severa.jpg'));
        }
    }
}
