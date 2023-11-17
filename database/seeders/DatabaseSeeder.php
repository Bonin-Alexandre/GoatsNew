<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $u = new User;
        $u->name = 'BoninA';
        $u->email = 'alexandre.bonin01@gmail.com';
        $u->password = Hash::make('AlexDev23');
        $u->save();

        $u = new User;
        $u->name = 'CoucouA';
        $u->email = 'alexandre.coucou01@gmail.com';
        $u->password = Hash::make('CoucouDev23');
        $u->save();

        $this->call([
            GoatSeeder::class,
        ]);
    }
}
