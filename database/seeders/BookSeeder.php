<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Classe feita para abastecer o banco de dados de registros a fim de testar
 * o recurso de paginação.
 *
 * @package Database\Seeders
 */
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('books')->insert([
                'title' => sprintf('%s %s', Str::random(7), Str::random(7)),
                'description' =>sprintf('%s %s %s %s', Str::random(7), Str::random(7), Str::random(7), Str::random(7)),
                'author' => sprintf('%s %s', Str::random(7), Str::random(7)),
                'page_count' => rand(100, 552),
                'created_at' => new \DateTime()
            ]);
        }
    }
}
