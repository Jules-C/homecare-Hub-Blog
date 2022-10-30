<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 12,
                'created_at' => '2022-10-30 12:54:41',
                'updated_at' => '2022-10-30 12:54:41',
                'post_id' => 2,
                'text' => 'first comment',
            ),
            1 => 
            array (
                'id' => 13,
                'created_at' => '2022-10-30 13:07:37',
                'updated_at' => '2022-10-30 13:07:37',
                'post_id' => 2,
                'text' => 'second comment',
            ),
            2 => 
            array (
                'id' => 14,
                'created_at' => '2022-10-30 13:46:38',
                'updated_at' => '2022-10-30 13:46:38',
                'post_id' => 3,
                'text' => 'first comment',
            ),
            3 => 
            array (
                'id' => 21,
                'created_at' => '2022-10-30 16:27:34',
                'updated_at' => '2022-10-30 16:27:34',
                'post_id' => 121,
                'text' => 'cd',
            ),
        ));
        
        
    }
}