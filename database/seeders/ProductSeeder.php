<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            "id"=>"216",
            "name"=>"Samsung Laptop",
            "price"=>"45000",
            "category"=>"Electronics",
            "description"=>"Smart Phone with 6gb RAM and 128 gb Internal storage Laptop with 14inch screen intel i9 13th gen ",
            "gallery"=>"https://m.media-amazon.com/images/I/71B0Gu0Iz1L._AC_UF1000,1000_QL80_.jpg",  
            ] ,
            [
                "id"=>"209",
                "name"=>"L.G Washing Machine",
                "price"=>"15000",
                "category"=>"Electronics",
                "description"=>"Washing MAchine with 7.5 kg loading capacity",
                "gallery"=>"https://www.lg.com/content/dam/channel/wcms/in/images/washing-machines/thd09nwm_abmqeil_eail_in_c/gallery/THD09NWM-Washing-Machines-Front-View-450.jpg ",  
                ] ,
                [
                    "id"=>"215",
                    "name"=>"Hair Straightner",
                    "price"=>"1900",
                    "category"=>"Electronics",
                    "description"=>"Best Hair straightner for your hair ",
                    "gallery"=>"https://images-cdn.ubuy.co.in/63630a37761bb7074f311785-bcway-professional-hair-straightener.jpg",  
                    ]
        ]);
    }
}
