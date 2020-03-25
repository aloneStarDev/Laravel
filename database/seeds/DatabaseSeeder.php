<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,1)->create([
            'username'=>'master',
            'password'=>Hash::make('1399'),
            'rollId'=>0,
        ]);
        $this->call([TariffSeeder::class]);
    }
}
