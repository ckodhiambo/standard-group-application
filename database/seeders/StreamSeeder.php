<?php

namespace Database\Seeders;

use App\Models\Stream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stream::firstorcreate([
            'stream_name' => 1
        ]);
        Stream::firstorcreate([
            'stream_name' => 2
        ]);
        Stream::firstorcreate([
            'stream_name' => 3
        ]);
        Stream::firstorcreate([
            'stream_name' => 4
        ]);
        Stream::firstorcreate([
            'stream_name' => 5
        ]);
        Stream::firstorcreate([
            'stream_name' => 6
        ]);
    }
}
