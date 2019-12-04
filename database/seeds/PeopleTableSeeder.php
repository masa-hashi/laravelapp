<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = ['name' => 'taro',
                  'mail' => 'taro@mail',
                  'age' => 12
                ];
        DB::table('people')->insert($param);

        $param = ['name' => 'hanamko',
                  'mail' => 'hanako@mail',
                  'age' => 13
                ];
        DB::table('people')->insert($param);

        $param = ['name' => 'ichiro',
                  'mail' => 'ichiro@mail',
                  'age' => 14
                ];
        DB::table('people')->insert($param);
    }
}
