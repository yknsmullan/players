<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 30)->create();

        // $param = [
        //     'name' => 'smith',
        //     'email' => 'smith@gmail.com',
        //     'password' => 'smith1010',
        // ];
        // DB::table('users')->insert($param);

        // $param = [
        //     'name' => 'taylor',
        //     'email' => 'taylor@gmail.com',
        //     'password' => 'taylor1111',
        // ];
        // DB::table('users')->insert($param);

        // $param = [
        //     'name' => 'johnson',
        //     'email' => 'johnson@gmail.com',
        //     'password' => 'johnson777',
        // ];
        // DB::table('users')->insert($param);

        
        // DB::table('users')->insert(
        //     [
        //         ['password' => 1, 'name' => 'クーペ', 'email' => 'C'],
        //         ['password' => 2, 'name' => 'ハッチバック', 'email' => 'D'],
        //         ['password' => 3, 'name' => 'ミニバン', 'email' => 'M'],
        //         ['password' => 4, 'name' => 'その他', 'email' => 'N'],
        //         ['password' => 5, 'name' => 'オープン', 'email' => 'O'],
        //         ['password' => 6, 'name' => 'ピックアップトラック', 'email' => 'P'],
        //         ['password' => 7, 'name' => 'セダン', 'email' => 'S'],
        //         ['password' => 8, 'name' => 'トラック', 'email' => 'T'],
        //         ['password' => 9, 'name' => 'ステーションワゴン', 'email' => 'W'],
        //         ['password' => 10, 'name' => 'クロカン・SUV', 'email' => 'X'],
        //     ]
        // );
    }
}
