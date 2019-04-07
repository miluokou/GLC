<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class GlcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=GlcTableSeeder
     * @return void
     */
    public function run()
    {
        $file = fopen('../glc1.csv', 'r');
        while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
//            print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
            $goods_list[] = $data;
        }
        $dateTime = date('Y-m-d H:i:s', time());
        unset($goods_list[0]);

        foreach ($goods_list as $key => $arr) {
            if (count($arr) == 3) {
                DB::table('glc')->insert([
                    'massToChargeRatio' => $arr[0],
                    'absoluteIntensity' => $arr[1],
                    'relativeIntensity' => null,
                    'type' => 'glc1',
                    'created_at' => $dateTime,
                    'deleted_at' => $dateTime,
                ]);
            }

        }
        Log::info('数据导入数据库结束');
        fclose($file);

    }
}
