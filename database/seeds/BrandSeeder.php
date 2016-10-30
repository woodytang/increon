<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'name'=>'KORLOFF',
                'desc'=>'From Saint Petersburg to Paris, the Korloff saga has always been closely entwined with the history of the biggest black diamond – the "Korloff Noir." This gem, weighing in at an exceptional 88 carats, was, for several generations, the prized possession of the Korloff Saponjnikoff family, part of the Russian nobility.',
                'name_en'=>'KORLOFF',
                'desc_en'=>'From Saint Petersburg to Paris, the Korloff saga has always been closely entwined with the history of the biggest black diamond – the "Korloff Noir." This gem, weighing in at an exceptional 88 carats, was, for several generations, the prized possession of the Korloff Saponjnikoff family, part of the Russian nobility.',
                'cover'=>'/img/brand1.jpg'
            ],
            [
                'name'=>'RINA LIMOR',
                'desc'=>'Inspired by the fine workmanship and creativity of Italian jewelry, Rina Limor\'\'s passion for innovative design is coupled with a stunning talent for creating collections that unequivocally resonate with the women of today - women, who themselves, want pieces that are versatile, stylish, and evoke an independent sense of elegance.',
                'name_en'=>'RINA LIMOR',
                'desc_en'=>'Inspired by the fine workmanship and creativity of Italian jewelry, Rina Limor\'\'s passion for innovative design is coupled with a stunning talent for creating collections that unequivocally resonate with the women of today - women, who themselves, want pieces that are versatile, stylish, and evoke an independent sense of elegance.',
                'cover'=>'/img/brand2.jpg'
            ],
            [
                'name'=>'ELIZABETH RAND',
                'desc'=>'What initially began as a relaxing hobby blossomed into a lucrative career for Elizabeth Rand.  Before starting her own company, Elizabeth Rand, Inc., she was an award winning packaging designer. She also designed and created her own jewelry, and then eventually did the same for her friends and family that fell in love with the pieces. Once she fully recognized her passion and talent in the art of fine jewelry, she set aside her former career and established her namesake brand in 1988.',
                'name_en'=>'ELIZABETH RAND',
                'desc_en'=>'What initially began as a relaxing hobby blossomed into a lucrative career for Elizabeth Rand.  Before starting her own company, Elizabeth Rand, Inc., she was an award winning packaging designer. She also designed and created her own jewelry, and then eventually did the same for her friends and family that fell in love with the pieces. Once she fully recognized her passion and talent in the art of fine jewelry, she set aside her former career and established her namesake brand in 1988.',
                'cover'=>'/img/brand3.jpg'
            ],
            [
                'name'=>'ARYA ESHA',
                'desc'=>'Arya Esha jewelry is crafted in recycled precious metals and uses ethically sourced gemstones as well as conflict and devastation free diamonds. Each jewel is handcrafted and one-of-a-kind.',
                'name_en'=>'ARYA ESHA',
                'desc_en'=>'Arya Esha jewelry is crafted in recycled precious metals and uses ethically sourced gemstones as well as conflict and devastation free diamonds. Each jewel is handcrafted and one-of-a-kind.',
                'cover'=>'/img/brand4.jpg'
            ],
        ];
        foreach($brands as $brand){
            \App\Models\Brand::create($brand);
        }



    }
}
