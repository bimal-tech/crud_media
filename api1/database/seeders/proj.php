<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\project;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Http\Events\RequestHandled;

class proj extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        project::query()->insert([
            'name'=> Str::random(10),
                ]);
        
    }
}
