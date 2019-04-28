<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arr = ['HTC1','HTC4','HTC2','HTC3'];
    public function run()
    {
        /*DB::table('games')->insert([
           'title' => 'Samsung Galaxy S9',
           'body' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
           'cover_image' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
           'price' => 698.88
        ]);
 
        DB::table('games')->insert([
            'title' => 'Apple iPhone X',
            'body' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'cover_image' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
            'price' => 983.00
        ]);
 
        DB::table('games')->insert([
            'title' => 'Google Pixel 2 XL',
            'body' => 'New condition
• No returns, but backed by eBay Money back guarantee',
            'cover_image' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
            'price' => 675.00
        ]);
 
        DB::table('games')->insert([
            'title' => 'LG V10 H900',
            'body' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'cover_image' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'price' => 159.99,
            'user_id'=>1
        ]);
 
        DB::table('games')->insert([
            'title' => 'Huawei Elate',
            'body' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'cover_image' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
            'price' => 68.00
        ]);
 */
        
            
            foreach($this->arr as $s){
                DB::table('games')->insert([
                    'title' => $s,
                    'body' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
                    'cover_image' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
                    'price' => 129.99,
                    'user_id'=>1,
                    'category'=>'FPS'
                ]);
            }
        
        //
    }
}
