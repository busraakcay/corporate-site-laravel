<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $settings = [
            [
                'about_us_tr' => 'TR Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed imperdiet orci, quis egestas arcu. Aenean et nulla eget mauris euismod tincidunt. Nam in leo turpis. Nullam sit amet tempor nisi. Quisque quis semper nisi. Vestibulum consectetur mauris et neque sagittis luctus. Aenean feugiat quis augue sit amet ullamcorper. Etiam commodo lectus venenatis purus pretium, sed hendrerit ipsum tempor. Curabitur tincidunt nibh in tristique porttitor. Vivamus dapibus laoreet metus ut pulvinar.
            
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus in lectus nisi. Pellentesque mollis malesuada lacus ut vestibulum. In placerat sed libero ac dignissim. In non porta urna. Mauris fermentum id magna ut cursus. Maecenas venenatis et ipsum id iaculis. Ut sollicitudin pulvinar scelerisque. Sed leo orci, commodo vel tortor in, rutrum luctus urna. Sed et mattis nulla.
                
                Duis a sapien ac justo accumsan egestas. Cras fringilla, justo et pulvinar tempus, nibh odio fringilla erat, at accumsan lorem odio eu ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet feugiat vulputate. Pellentesque quis nibh arcu. Integer ut consectetur nibh. Nullam eget urna a mi rhoncus laoreet luctus et augue. Nullam tempor libero non semper volutpat. Nam congue, tellus ut eleifend placerat, urna dui aliquam metus, non vulputate felis velit quis leo. Vivamus tristique, sem vitae condimentum faucibus, est lectus vestibulum quam, quis maximus neque odio eu nibh. Ut ante turpis, vulputate vitae suscipit ac, efficitur ac risus. Maecenas at neque ut tortor porttitor tempor vel non massa. Aliquam venenatis nisi turpis, vel convallis libero venenatis in. Integer porta convallis diam, a viverra justo iaculis vel. Suspendisse dignissim bibendum elit at ornare. Vestibulum varius suscipit mauris.
                
                Vivamus rhoncus erat ac maximus suscipit. Vivamus semper velit a ipsum vehicula, nec semper arcu molestie. Duis dictum cursus mauris, tincidunt imperdiet erat sollicitudin et. Nulla ultricies tellus ut ex pharetra, a cursus nunc convallis. Sed non neque turpis. Sed augue lectus, commodo tincidunt diam ac, finibus commodo dui. Praesent ut dui mauris. Vivamus nec mauris mauris.',
                'about_us_en' => 'EN Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed imperdiet orci, quis egestas arcu. Aenean et nulla eget mauris euismod tincidunt. Nam in leo turpis. Nullam sit amet tempor nisi. Quisque quis semper nisi. Vestibulum consectetur mauris et neque sagittis luctus. Aenean feugiat quis augue sit amet ullamcorper. Etiam commodo lectus venenatis purus pretium, sed hendrerit ipsum tempor. Curabitur tincidunt nibh in tristique porttitor. Vivamus dapibus laoreet metus ut pulvinar.
            
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus in lectus nisi. Pellentesque mollis malesuada lacus ut vestibulum. In placerat sed libero ac dignissim. In non porta urna. Mauris fermentum id magna ut cursus. Maecenas venenatis et ipsum id iaculis. Ut sollicitudin pulvinar scelerisque. Sed leo orci, commodo vel tortor in, rutrum luctus urna. Sed et mattis nulla.
                
                Duis a sapien ac justo accumsan egestas. Cras fringilla, justo et pulvinar tempus, nibh odio fringilla erat, at accumsan lorem odio eu ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet feugiat vulputate. Pellentesque quis nibh arcu. Integer ut consectetur nibh. Nullam eget urna a mi rhoncus laoreet luctus et augue. Nullam tempor libero non semper volutpat. Nam congue, tellus ut eleifend placerat, urna dui aliquam metus, non vulputate felis velit quis leo. Vivamus tristique, sem vitae condimentum faucibus, est lectus vestibulum quam, quis maximus neque odio eu nibh. Ut ante turpis, vulputate vitae suscipit ac, efficitur ac risus. Maecenas at neque ut tortor porttitor tempor vel non massa. Aliquam venenatis nisi turpis, vel convallis libero venenatis in. Integer porta convallis diam, a viverra justo iaculis vel. Suspendisse dignissim bibendum elit at ornare. Vestibulum varius suscipit mauris.
                
                Vivamus rhoncus erat ac maximus suscipit. Vivamus semper velit a ipsum vehicula, nec semper arcu molestie. Duis dictum cursus mauris, tincidunt imperdiet erat sollicitudin et. Nulla ultricies tellus ut ex pharetra, a cursus nunc convallis. Sed non neque turpis. Sed augue lectus, commodo tincidunt diam ac, finibus commodo dui. Praesent ut dui mauris. Vivamus nec mauris mauris.',


                'seo_title_tr' => 'Merlyn Ayakkabı',
                'seo_keywords_tr' => 'ayakkabı',
                'seo_description_tr' => 'Yeni nesil rahat ayakkabılar',

                'seo_title_en' => 'Merlyn Shoe',
                'seo_keywords_en' => 'shoe',
                'seo_description_en' => 'New generation comfortable shoes',

                'company_address' => 'Selçuklu/Konya',
                'company_name' => 'Merlyn',
                'company_phone' => '555 555 55 55',
                'company_email' => 'info@merlyn.com',
                'logo' => 'merlyn-logos/png/merlyn-logo-orj.png',
            ],
        ];

        DB::table('settings')->insert($settings);
    }
}
