<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'artist' => 'Eminem',
            'title' => 'Stan',
        ]);

        Song::create([
            'artist' => 'A P Dhillon',
            'title' => 'With You',
        ]);
        Song::create([
            'artist' => 'Divyansh',
            'title' => 'song3',
        ]);
        Song::create([
            'artist' => 'Ansh',
            'title' => 'With',
        ]);
    }
}