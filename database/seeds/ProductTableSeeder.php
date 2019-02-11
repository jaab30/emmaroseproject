<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('products')->insert(
            [
            'name' => 'Coral Triangle Bloomer',
            
            'description' => 'This Bloomer will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Cute and Modern Handmade Bloomer. Bloomer Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The Bloomer is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',

            'tags' => 'bloomer baby toddler girl Coral floral Bloomer',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Triangle-One-Birthday-Bloomer-Outfit7.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Triangle-One-Birthday-Bloomer-Outfit8.jpg',
            'category' => 'bloomer',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Pink One Birthday Girl Shirt Onesie',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Cute and Modern Handmade Girl Shirt. Shirt Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The Shirt is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',

            'tags' => 'shirt shirts baby toddler girl Pink One Birthday Girl Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Pink1BirthdayOutfit9.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/PinkONEBirthdayOutfit2.jpg',
            'category' => 'girl_shirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        
        DB::table('products')->insert(
            [
            'name' => 'Red Love Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Cute and Modern Handmade Outfit for babies and Toddlers. Outfit Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The Outfit is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Red Love Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Love-Skirt-Outfit7.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Love-Skirt-Outfit9.jpg',
            'category' => 'outfit',
                'genre' => 'girl',
                'color' => 'red',
                'price' => '34.95',
                'review' => 'ABC'
                ]
            );
            DB::table('products')->insert(
                [
                'name' => 'Black Romeo Boy Shirt',
                
                'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',
    
                'summary' => 'Cute and Modern Handmade Boy Shirt / Onesie. Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The Boy Shirt / Onesie is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',
    
                'tags' => 'shirt shirts baby boy onesie onesies toddler boy Black Romeo Shirt',
    
                'picture' => 'http://www.emmarosebabyboutique.com/emmarose/BlackRomeoShirt.jpg',
                'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/BlackRomeoShirt.jpg',
                'category' => 'boy_shirt',
                'genre' => 'boy',
                'color' => 'gray',
                'price' => '19.95',
                'review' => 'ABC'
                ]
            );
       
            
            DB::table('products')->insert(
                [
                'name' => 'Mint Coral Gold Floral Black Stripe Skirt',

                'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

                'summary' => 'Cute and Modern Handmade Skirt. Skirt Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The skirt is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',

                'tags' => 'skirt skirts Toddler Newborn Baby Mint Coral Gold Floral Black Stripe Skirt',

                'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Mint-Coral-Gold-Floral-Black-Stripe-Skirt3.jpg',
                'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Mint-Coral-Gold-Floral-Black-Stripe-Skirt5.jpg',
                'category' => 'Skirt',
                'genre' => 'girl',
                'color' => 'coral',
                'price' => '19.95',
                'review' => 'ABC'
                ]
            );
           
        
        DB::table('products')->insert(
            [
            'name' => 'Buffalo Plaid Suspender Skirt Dress',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Cute and Modern Handmade Suspender Skirt. Suspender Skirt Sizes: 6M, 12M, 18M, 2T, 3T, 4T. The Suspended Skirt is made out of 100% high quality cotton fabric. All items are made to order and one of a kind',

            'tags' => 'Suspender Skirt Toddler Girl Dress Buffalo Plaid Suspender Skirt Dress',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Buffalo-Plaid-Suspender-Skirt-Dress6.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Buffalo-Plaid-Suspender-Skirt-Dress10.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
       


    }
}
