<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('todos')->truncate();
        
        // 初期データ用意（列名をキーとする連想配列）
        $todos = [
                  ['memo' => 'メモ', 
                   'title' => 'タイトル1',
                   'checked' => 1,
                   'deadline' => '2021-07-13',
                   'url' => 'URL',
                   'category_id' => '1'],
                  ['memo' => 'メモ1', 
                   'title' => 'タイトル2',
                   'checked' => 0,
                   'deadline' => '2021-07-20',
                   'url' => 'URL1',
                   'category_id' => '1'],
                 ];
        
        // 登録
        foreach($todos as $todo) {
          \App\Todo::create($todo);
        }
    }
}
