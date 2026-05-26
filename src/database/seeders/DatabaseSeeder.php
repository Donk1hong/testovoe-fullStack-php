<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints(); // Mysql требует null, для parent_id = 0. По этому отключаю проверку ключей в рамках текущей сессии.

        DB::table('prices')->delete();
        DB::table('products')->delete();
        DB::table('groups')->delete();

        $this->call([
           GroupSeeder::class,
           ProductSeeder::class,
           PriceSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints(); // Включил обратно после отработки сидеров (Это безопасно, так как мы не отключали проверку глобально для всей бд)
    }

}
