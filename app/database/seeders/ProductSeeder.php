<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=>'Apple MackBookPro',
                'details'=>'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description'=>'M2 ProまたはM2 Maxの驚異的なパワー、内蔵。MacBook Proが、
かつてないほどパワフルなのに電力効率に優れたマシンに進化しました。
電源につながなくても並外れたパフォーマンスを発揮。バッテリー駆動時間は
さらに長くなりました。美しいLiquid Retina XDRディスプレイと、必要なポートも
すべて搭載。これ以上のプロ向けノートブックは、ほかにありません。',
                'brand'=>'Apple',
                'price'=>2499,
                'shipping_cost'=>'25',
                'image_path'=>'storage/product.png'
            ],
            [
                'name'=>'Samsung Galaxy Book Pro',
                'details'=>'13.3 inch, 8GB, DDR4 SDRAM, 256GB',
                'description'=>'
スマホの薄型PCパワー。最軽量の Galaxy Book は、強力な Intel ®第 11 世代 Core™ プロセッサ、Intel ® Evo™ 認証、高度な AMOLED 画面を提供し、最新の Wi-Fi チップを搭載しています。重要なプロジェクトを完了したり、巨大なファイルをすばやくダウンロードしたり、鮮やかな色で映画を見たりできます。移植性と生産性の完璧な組み合わせを発見してください。',
                'brand'=>'Samsung',
                'price'=>'1099',
                'shipping_cost'=>15,
                'image_path'=>'storage/product_2.png'
            ],
            [
                'name'=>'DELL Alienware x14',
                'details'=>'14.0 inch, 16GB, DDR5 ,NVIDIA® GeForce RTX™ 3060 6GB GDDR6, 512GB',
                'description'=>'この世界最薄の14インチ ゲーミングノートパソコンには、Type-C充電ポート、14インチ ゲーミングPCとして世界最高レベルのWHrバッテリーや独自のAlienware Cryo-tech™冷却テクノロジーを搭載。ゲームプレイだけでなく仕事や勉強を長時間可能にします。',
                'brand'=>'DELL',
                'price'=>'2205',
                'shipping_cost'=>'25',
                'image_path'=>'storage/product_3.png'
            ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}