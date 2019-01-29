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
            'name' => 'Suspender Skirt 1',
            
            'description' => 'This Floral tie back suspender skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl. ',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress,',

            'tags' => 'skirts skirt toddler',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/suspenderskirttest1.png',
            'category' => 'Suspender Skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Suspender Skirt 2',

            'description' => 'This Floral tie back suspender skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl. ',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress,',

            'tags' => 'skirts skirt toddler',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/suspenderskirttest2.png',
            'category' => 'Suspender Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Suspender Skirt 3',

            'description' => 'This Floral tie back suspender skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl. ',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress,',

            'tags' => 'skirts skirt toddler',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/suspenderskirttest3.png',
            'category' => 'Suspender Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Skirt',

            'description' => 'This Floral tie back suspender skirt skirts will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl. ',

            'summary' => 'Suspender Skirt, skirts Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress,',

            'tags' => 'skirts skirt toddler',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/skirttest1.png',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
    }
}
