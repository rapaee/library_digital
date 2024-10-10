<?php

namespace Database\Seeders;

use App\Models\genre;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => Hash::make('admin123'), // Hashing password

        ]);
        
        genre::firstOrCreate(['genre' => 'Fiksi Ilmiah']);
        genre::firstOrCreate(['genre' => 'Fantasi']);
        genre::firstOrCreate(['genre' => 'Romance']);
        genre::firstOrCreate(['genre' => 'Horor']);
        genre::firstOrCreate(['genre' => 'Thriller']);
        genre::firstOrCreate(['genre' => 'Misteri']);
        genre::firstOrCreate(['genre' => 'Fiksi Historis']);
        genre::firstOrCreate(['genre' => 'Biografi']);
        genre::firstOrCreate(['genre' => 'Self-Help']);
        genre::firstOrCreate(['genre' => 'Sejarah']);
        genre::firstOrCreate(['genre' => 'Sains']);
        genre::firstOrCreate(['genre' => 'Agama']);
        genre::firstOrCreate(['genre' => 'Puis']);
        genre::firstOrCreate(['genre' => 'Drama']);
        genre::firstOrCreate(['genre' => 'Buku Anak']);


    }
}
