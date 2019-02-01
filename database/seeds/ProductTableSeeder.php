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
            'name' => 'Coral Floral Bloomer',
            
            'description' => 'This Bloomer will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'bloomer baby toddler girl Coral floral Bloomer',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-One-Birthday-Bloomer-Outfit10.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-One-Birthday-Bloomer-Outfit12.jpg',
            'category' => 'bloomer',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Coral Triangle Bloomer',
            
            'description' => 'This Bloomer will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

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
            'name' => 'Llama Bloomer',
            
            'description' => 'This Bloomer will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'bloomer baby toddler girl Llama Bloomer',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Llama-One-Birthday-Bloomer-Outfit9.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Llama-One-Birthday-Bloomer-Outfit10.jpg',
            'category' => 'bloomer',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Navy Blue & Pink Bloomer',
            
            'description' => 'This Bloomer will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'bloomer baby toddler girl Navy Blue Pink Bloomer',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Navy-Blue-Pink-One-Birthday-Bloomert-Outfit5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Navy-Blue-Pink-One-Birthday-Bloomert-Outfit6.jpg',
            'category' => 'bloomer',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black Hunk Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Black Hunk Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/BlackHunkShirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/BlackHunkShirt4.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black Romeo Boy Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

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
            'name' => 'Blue Bunny Hop Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Blue Bunny Hop Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Blue-Bunny-Hop-Shirt5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Blue-Bunny-Hop-Shirt2.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Buffalo Plaid Romeo Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Buffalo Plaid Romeo Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/BuffaloPlaidRomeoShirt.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/BuffaloPlaidRomeoShirt.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'gray',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Green Easter Bunny Name Boy Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Green Easter Bunny Name Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Name-Shirt.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Name-Shirt.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'green',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold One Year Old Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Mint Coral Gold One Year Boy Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Skirt-Outfit1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Skirt-Outfit3.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold Three Years Old Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Mint Coral Gold Three Years Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Three-Shirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Three-Shirt1.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold Two Years Old Boy Shirt  Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Mint Coral Gold Two Years Old Boy Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Two-Skirt-Outfit5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Two-Skirt-Outfit6.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Valentine Boy Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Red Valentine Boy Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedBorderSkirtValentineOutfit7.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/RedBorderSkirtValentineOutfit8.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Hunk Boy Shirt Onesie',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Red Hunk Boy Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedHunkShirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Customer-Hunk-Shirt1.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Romeo Boy Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Red Romeo Boy Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedRomeoShirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/RedRomeoShirt1.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Hunk Gray Boy Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Red Hunk Gray Boy Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedHUNKonGrayShirt-2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/RedHUNKonGrayShirt-2.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'gray',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Romeo & Gray Shirt',
            
            'description' => 'This Boy Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby boy onesie onesies toddler boy Red Romeo & Gray Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedRomeoShirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/RedRomeoShirt1.jpg',
            'category' => 'boy_shirt',
            'genre' => 'boy',
            'color' => 'gray',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Coral Two Birthday Shirt',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby toddler girl Coral Two Birthday Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Two-Birthday-Shirt.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Two-Birthday-Shirt2.jpg',
            'category' => 'girl_shirt',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Spring Owl Girl Shirt',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby toddler girl Spring Owl Girl Shirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set3.jpg',
            'category' => 'girl_shirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'White Red Love Valentine Outfit',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby toddler girl White Red Love Valentine Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/WhiteRedLoveValentineOutfit.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/WhiteRedLoveValentineOutfit.jpg',
            'category' => 'girl_shirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Pink One Birthday Girl Shirt Onesie',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

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
            'name' => 'Pink Bunny Hop Girl Shirt Onesie',
            
            'description' => 'This Girl Shirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'shirt shirts baby toddler girl Pink Bunny Hop Girl Shirt Onesie',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Bunny-Hop-Shirt2jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Bunny-Hop-Shirt5.jpg',
            'category' => 'girl_shirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Red Hearts Valentines Day Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Red Hearts Valentines Day Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit2.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black Love Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Black Love Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Black-Love-Outfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Black-Love-Outfit1.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'black',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Buffalo Plaid Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Buffalo Plaid Skirt outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/BuffaloPlaidskirtSet7.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/BuffaloPlaidSkirtSet5.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'black',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Coral Floral Border Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Coral Floral Border Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-Border-Skirt-Outfit3.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-Border-Skirt-Outfit5.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Coral Floral Two Birthday Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Coral Floral Two Birthday Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/CoralFloralTwoBirthdayOutfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-Border-Skirt-Outfit5.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Coral Floral One Birthday Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Coral Floral One Birthday Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-One-Birthday-Skirt-Outfit6.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-One-Birthday-Skirt-Outfit2.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Geo Print Heart Initial Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Geo Print Heart Initial Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/GeoPrintHeartInitialOutfit1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/GeoPrintHeartInitialOutfit2',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Green Easter Bunny Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Green Easter Bunny Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Outfit-2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Outfit-1.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'green',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Bouquet High Waisted Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Heart Bouquet High Waisted Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit2.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Bouquet Red Border Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Heart Bouquet Red Border Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Red-Border-Skirt-Outfit5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Red-Border-Skirt-Outfit5.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold Two Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Mint Coral Gold Two Skirt Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Two-Skirt-Outfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Skirt-Outfit10.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Pink Triangle Two Birthday Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Pink Triangle Two Birthday Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGoldTriangleTwoBirthdayOutfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGoldTriangleTwoBirthdayOutfit4.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Pink 1 Birthday Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Pink 1 Birthday Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Pink1BirthdayOutfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Pink1BirthdayOutfit4.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Pink Easter Bunny Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Pink Easter Bunny Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Easter-Bunny-Outfit-7.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Easter-Bunny-Outfit-10.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Purple Polka Dot Easter Bunny Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Purple Polka Dot Easter Bunny Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Purple-Polka-Dot-Easter-Bunny-Outfit2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Purple-Polka-Dot-Easter-Bunny-Outfit4.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Rainbow Easter Bunny Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Rainbow Easter Bunny Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Rainbow-Easter-Bunny-Outfit5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Rainbow-Easter-Bunny-Outfit2.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Border Skirt Valentine Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Shirt Red Border Skirt Valentine Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/RedBorderSkirtValentineOutfit6.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/RedBorderSkirtValentineOutfit4.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Love Skirt Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

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
            'name' => 'Spring Owl Skirt and Shirt Set',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Spring Owl Skirt and Shirt Set',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set6.jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Yellow Easter Bunny Outfit',
            
            'description' => 'This outfit will make a perfect gift for the sweet little girl in your life.  Each heart fabric applique is hand cut and then sewn around the edge with matching thread.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Red Hearts, Valentines Day Outfit Baby Girl, Pink Valentines Skirt, Toddler Skirt, Baby Girl Pink Skirt, Newborn Valentines, Baby Love Shirt',

            'tags' => 'Baby Girl Toddler Skirt Baby Girl Newborn Yellow Easter Bunny Outfit',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Easter-Bunny-Outfit-7jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Easter-Bunny-Outfit-7jpg',
            'category' => 'outfit',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Red High Waist Button Valentines Skirt',
            
            'description' => 'This red faux button skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl',

            'summary' => 'Red Valentines Outfit Toddler Girl Red Faux Button Toddler Skirts Toddler Red Dress Valentines Skirt Baby Red Dress High Waisted Skirt',

            'tags' => 'Red Valentines Outfit Toddler Girl Red Faux Button Toddler Skirts Toddler Red Dress Valentines Skirt Baby Red Dress High Waisted Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Red-High-Waist-Button-Skirt3.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Red-High-Waist-Button-Skirt3.jpg',
            'category' => 'skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Bouquet Red Border Skirt',

            'description' => 'This floral skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.  ',

            'summary' => 'Pink Red Valentines Day skirt Baby Girl Pink Toddler Skirts Pink Red skirt Pink Valentines Skirt Valentine Dress Baby Girl Pink Skirt',

            'tags' => 'Pink Red Valentines Day skirt Baby Girl Pink Toddler Skirts Pink Red skirt Pink Valentines Skirt Valentine Dress Baby Girl Pink Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Red-Border-Skirt-Outfit6.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Red-Border-Skirt-Outfit6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Bouquet High Waisted Skirt',

            'description' => 'This Heart Bouquet High Waisted skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl.',

            'summary' => 'Pink Valentines Day Outfit Toddler Girl Red Hearts Newborn Valentines Skirt Pink Valentines Dress Baby Girl Pink Skirt Heart Skirt',

            'tags' => 'Pink Valentines Day Outfit Toddler Girl Red Hearts Newborn Valentines Skirt Pink Valentines Dress Baby Girl Pink Skirt Heart Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit8',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-High-Waisted-Skirt-Outfit8',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );

        DB::table('products')->insert(
            [
            'name' => 'Gold Chevron High Waist Skirt',

            'description' => 'This Heart Bouquet Red Border skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'Pink Valentines Outfit, Toddler Red Hearts Outfit, Newborn Valentines, Pink Toddler Skirts, Baby Girl Pink Skirt, Newborn Valentines Outfit',

            'tags' => 'skirt skirts Toddler Newborn Baby Gold Chevron High Waist Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Gold-Chevron-High-Waist-Skirt3.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Gold-Chevron-High-Waist-Skirt3.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'gold',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Birds Blue Floral Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'blue Valentines Outfit Toddler Red Hearts Outfit Newborn Valentines Pink Toddler Skirts Baby Girl Pink Skirt Newborn Valentines Outfit',

            'tags' => 'blue skirt skirts Toddler Newborn Baby Girl',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Birds-Blue-Floral-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Birds-Blue-Floral-Skirt6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black and White Stripe Skirt with Gold Dots',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'blue Valentines Outfit Toddler Red Hearts Outfit Newborn Valentines Pink Toddler Skirts Baby Girl Pink Skirt Newborn Valentines Outfit',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Black and White Stripe Skirt with Gold Dots',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Black-and-White-Stripe-Skirt-with-Gold-Dots2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/BlackandWhiteStripeSkirtwithGoldDots3.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'black',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Buffalo Plaid Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Black and White Stripe Skirt with Gold Dots',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Buffalo Plaid Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Buffalo-Plaid-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Buffalo-Plaid-Skirt7.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'black',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Dinosaur Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Buffalo Plaid Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Dinosaur-Skirt-Outfit1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Dinosaur-Skirt-Outfit4.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Geo Print Heart Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Geo Print Heart',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/GeoPrintHeartInitialOutfit10.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/GeoPrintHeartInitialOutfit9.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Green Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Green Easter Bunny',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Outfit-10.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Green-Easter-Bunny-Outfit-7.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'green',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Conversation Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Heart Conversation Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Conversation-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Conversation-Skirt6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Light Pink Polka Dot Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Light Pink Polka Dot Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Light-Pink-Polka-Dot-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Light-Pink-Polka-Dot-Skirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Light Pink Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Girl Light Pink Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Light-Pink-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Light-Pink-Skirt4.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mermaid Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Mermaid Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MermaidSkirt10.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MermaidSkirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold Floral Black Stripe Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

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
            'name' => 'Micheal Miller Unicorn Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Micheal Miller Unicorn Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MichealMillerUnicornSkirtSet1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MichealMillerUnicornSkirtSet3.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Floral Skirt Blue Border with White Dots',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Floral Skirt Blue Border with White Dots',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Mint-Coral-Gold-Floral-Skirt-Mint-Border-2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Mint-Coral-Gold-Floral-Skirt-Mint-Border-6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Coral Gold Floral Skirt Pink Border',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Mint Coral Gold Floral Skirt Pink Border',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Skirt-Outfit5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGold-Skirt-Outfit6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Triangle Print Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Triangle Print Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGoldTrianglePrintSkirt4.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/MintCoralGoldTriangleTwoBirthdayOutfit8.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Navy Mustard Burgundy Floral Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Navy Mustard Burgundy Floral Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Navy-Mustard-Burgundy-Floral-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Navy-Mustard-Burgundy-Floral-Skirt5.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Green High Waisted Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Green High Waisted Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Green-High-Waisted-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Green-High-Waisted-Skirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'green',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mustard Floral High Waist Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Mustard Floral High Waist Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Mustard-Floral-High-Waist-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Mustard-Floral-High-Waist-Skirt1.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Peppa Pig Border Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Peppa Pig Border Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Peppa-Pig-Border-Skirt3A.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Peppa-Pig-Border-Skirt2A.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Pink Llama Cactus Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Pink Llama Cactus Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Llama-Cactus-Skirt2A.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Pink-Llama-Cactus-Skirt2A.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Plaid High Waisted Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Plaid High Waisted Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Plaid-High-Waisedt-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Plaid-High-Waisedt-Skirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Puppies Riding Bicycles Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Puppies Riding Bicycles Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Puppies-Riding-Bicycles-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Puppy-Dog-Print-Skirt7.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Purple Polka Dot Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Purple Polka Dot Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Purple-Polka-Dot-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Purple-Polka-Dot-Skirt3A.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Rainbow Easter Bunny Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Rainbow Easter Bunny Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Rainbow-Easter-Bunny-Outfit8.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Rainbow-Easter-Bunny-Outfit8.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'purple',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Floral High Waisted Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Red Floral High Waisted Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Floral-High-Waisted-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Floral-High-Waisted-Skirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Spring Easter Skirts Set of 4',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Spring Easter Skirts Set of 4',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Easter-Skirts1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Easter-Skirts2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '34.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Spring Owl Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Spring Owl Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set14.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Spring-Owl-Skirt-and-Shirt-Set16.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black Aztec Arrow Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Black Aztec Arrow Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-Aztec-Arrow-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-Aztec-Arrow-Skirt5.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'black',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black White Stripe Skirt with Pink Border',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Black White Stripe Skirt with Pink Border',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-White-Stripe-Skirt-with-Pink-Border1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-White-Stripe-Skirt-with-Pink-Border4.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Black White Stripe Skirt with Red Border',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Black White Stripe Skirt with Red Border',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-White-Stripe-Skirt-with-Red-Border2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/SWBlack-White-Stripe-Skirt-with-Red-Border5.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Tribal Fox Woodland Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Tribal Fox Woodland Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Tribal-Fox-Woodland-Skirt6.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Tribal-Fox-Woodland-Skirt6.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'White Floral High Waisted Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby White Floral High Waisted Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/White-Floral-High-Waisted-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/White-Floral-High-Waisted-Skirt2.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'white',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Yellow Easter Bunny Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Yellow Easter Bunny Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Easter-Bunny-Outfit-2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Easter-Bunny-Outfit-5.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Yellow Polka Dot Skirt',

            'description' => 'This skirt will make a perfect gift for the sweet little girl in your life.  The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth.  All skirt seams are serged and top stitched for a professional long lasting finish. This skirt outfit is so pretty and is a must have for you little girl. ',

            'summary' => 'skirt skirts Toddler Newborn Baby Girl Dinosaur Skirt',

            'tags' => 'skirt skirts Toddler Newborn Baby Yellow Polka Dot Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Polka-Dot-Skirt2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Yellow-Polka-Dot-Skirt4.jpg',
            'category' => 'Skirt',
            'genre' => 'girl',
            'color' => 'yellow',
            'price' => '19.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Buffalo Plaid Suspender Skirt Dress',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

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
        DB::table('products')->insert(
            [
            'name' => 'Coral Floral Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Coral Floral Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-Suspender-Skirt4.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Floral-Suspender-Skirt10.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Coral Peach Blush Dot Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Coral Peach Blush Dot Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Peach-Blush-Dot-Suspender-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Coral-Peach-Blush-Dot-Suspender-Skirt5.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'coral',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Heart Bouquet Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Heart Bouquet Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Suspender-Skirt1.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Heart-Bouquet-Suspender-Skirt3.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Mint Dot Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Mint Dot Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/blue_suspended_skirt.png',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Mint-Dot-Suspender-Skirt1.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'blue',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Black White Plaid Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Red Black White Plaid Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Black-White-Plaid-Suspender-Skirt-2.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Black-White-Plaid-Suspender-Skirt-7.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        DB::table('products')->insert(
            [
            'name' => 'Red Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Red Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Suspender-Skirt5.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Red-Suspender-Skirt9.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'red',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );
        
        DB::table('products')->insert(
            [
            'name' => 'Peppa Pig Suspender Skirt',
            
            'description' => 'This Suspender Skirt will make a perfect gift for the sweet little girl in your life. The skirt is made out of 100% high quality cotton fabric and has an elastic waistband for added comfort that provides extra stretch for growth. There are 2 straps sewn onto the front of the skirt. In the back of the skirt there are two loops for the straps to go through in order to tie into a bow. All skirt seams are serged and top stitched for a professional long lasting finish. This skirt is so pretty and is a must have for your little girl.',

            'summary' => 'Suspender Skirt, Pink Valentines Outfit Toddler Girl, Toddler Red Heart Outfit, Toddler Pink Dress, Pink Suspender Dress, Newborn Valentines',

            'tags' => 'Suspender Skirt Toddler Girl Dress Peppa Pig Suspender Skirt',

            'picture' => 'http://www.emmarosebabyboutique.com/emmarose/Peppa-Pig-Suspender-Skirt8A.jpg',
            'picture2' => 'http://www.emmarosebabyboutique.com/emmarose/Peppa-Pig-Suspender-Skirt12.jpg',
            'category' => 'suspended skirt',
            'genre' => 'girl',
            'color' => 'pink',
            'price' => '24.95',
            'review' => 'ABC'
            ]
        );


    }
}
