<?php

use Illuminate\Database\Seeder;
use App\RestData;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new RestData;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdata = new RestData;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'MSN Japan',
            'url' => 'https://www.msn.com/ja-jp',
        ];
        $restdata = new RestData;
        $restdata->fill($param)->save();
    }
}
