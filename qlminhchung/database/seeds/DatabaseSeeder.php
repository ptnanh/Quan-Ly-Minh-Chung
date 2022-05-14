<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MinhchungcsgdTableSeeder::class);
        $this->call(MinhchungctdtTableSeeder::class);
        $this->call(TieuchuancsgdTableSeeder::class);
        $this->call(TieuchuanctdtTableSeeder::class);
        $this->call(TieuchicsgdTableSeeder::class);
        $this->call(TieuchictdtTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

    }
}
