<?php

use Illuminate\Database\Seeder;

class AppartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('appartments')->truncate();
        \Illuminate\Support\Facades\DB::table('appartments')->insert([
            [
                'name'=>'Chung cư cao cấp T3 Timecity',
                'address'=>'T3 Timecity',
                'price'=>'20000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thiconggonoithat.com/wp-content/uploads/2015/07/noi-that-chung-cu-hien-dai-03.jpg'
            ],[
                'name'=>'Chung cư cao cấp T4 Timecity',
                'address'=>'T4 Timecity',
                'price'=>'21000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 60m2',
                'images'=>'http://thiconggonoithat.com/wp-content/uploads/2015/07/noi-that-chung-cu-hien-dai-01.jpg'
            ],[
                'name'=>'Chung cư cao cấp T5 Timecity',
                'address'=>'T5 Timecity',
                'price'=>'22000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 50m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-can-ho-chung-cu-anh-tuan-tai-chung-cu-azuza-da-nang-2.jpg'
            ], [
                'name'=>'Chung cư cao cấp T6 Timecity',
                'address'=>'T6 Timecity',
                'price'=>'23000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%20gamuda%201(1).jpg'
            ],[
                'name'=>'Chung cư cao cấp T7 Timecity',
                'address'=>'T7 Timecity',
                'price'=>'24000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%20tai%20eco%20life%20cho%20chu%20thuyet%202.jpg'
            ],[
                'name'=>'Chung cư cao cấp T8 Timecity',
                'address'=>'T8 Timecity',
                'price'=>'25000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-noi-that-chung-cu-vicoland-hai-chau-da-nang-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T9 Timecity',
                'address'=>'T9 Timecity',
                'price'=>'22000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-noi-that-chung-cu-sang-trong-dang-cap-son-tra-ocean-view-da-nang-2.jpg'
            ],[
                'name'=>'Chung cư cao cấp T2 Timecity',
                'address'=>'T2 Timecity',
                'price'=>'30000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-chung-cu-muong-thanh-son-tra-da-nang-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T1 Timecity',
                'address'=>'T1 Timecity',
                'price'=>'28000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%20anh%20tuan%20sai%20gon%201.jpg'
            ],[
                'name'=>'Chung cư cao cấp T10 Timecity',
                'address'=>'T10 Timecity',
                'price'=>'29000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-can-ho-chung-cu-an-trung-da-nang-2(1).jpg'
            ],

            [
                'name'=>'Chung cư cao cấp T11 Timecity',
                'address'=>'T11 Timecity',
                'price'=>'20000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-can-ho-chung-cu-dep-gia-dinh-anh-hoa-tai-chung-cu-an-binh-city-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T12 Timecity',
                'address'=>'T12 Timecity',
                'price'=>'21000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 60m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet-ke-noi-that-chung-c%C6%B0-70,1m2-hiyori-garden-tower-da-nang-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T13 Timecity',
                'address'=>'T13 Timecity',
                'price'=>'22000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 50m2',
                'images'=>'http://thietkehoanggia.com/uploaded/Thiet-ke-noi-that-chung-cu-anh-tung-azura-da-nang-1.jpg'
            ], [
                'name'=>'Chung cư cao cấp T14 Timecity',
                'address'=>'T14 Timecity',
                'price'=>'23000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%2090m2%20chi%20mui%20da%20nang%201.jpg'
            ],[
                'name'=>'Chung cư cao cấp T15 Timecity',
                'address'=>'T15 Timecity',
                'price'=>'24000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20c%C6%B0%2040m2%20tien%20nghi%20va%20sang%20trong%201.jpg'
            ],[
                'name'=>'Chung cư cao cấp T16 Timecity',
                'address'=>'T16 Timecity',
                'price'=>'25000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%2085m2%20F_Home%20da%20nang%201.jpg'
            ],[
                'name'=>'Chung cư cao cấp T17 Timecity',
                'address'=>'T17 Timecity',
                'price'=>'22000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/an-tuong-trong-thiet-ke-noi-that-chung-cu-nest-home-da-nang-1-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T18 Timecity',
                'address'=>'T18 Timecity',
                'price'=>'30000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/an-tuong-trong-thiet-ke-noi-that-chung-cu-nest-home-da-nang-3-1.jpg'
            ],[
                'name'=>'Chung cư cao cấp T19 Timecity',
                'address'=>'T19 Timecity',
                'price'=>'28000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20vicoland%20son%20tra%20da%20nang%202.jpg'
            ],[
                'name'=>'Chung cư cao cấp T20 Timecity',
                'address'=>'T20 Timecity',
                'price'=>'29000000',
                'information'=>'abcxyz',
                'detail'=>'Nhà rộng 40m2',
                'images'=>'http://thietkehoanggia.com/uploaded/thiet%20ke%20noi%20that%20chung%20cu%20ocean%20view%201.jpg'
            ]
            ]);
    }
}
