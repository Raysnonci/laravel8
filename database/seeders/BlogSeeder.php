<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'First Post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sapiente nam deserunt dicta laudantium accusamus eos quod aperiam pariatur culpa, obcaecati neque ratione mollitia sunt natus aliquam! Accusantium et ipsam optio ad doloribus sapiente est deserunt quod hic, fugiat labore?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque dolorum quo architecto voluptatibus ipsam autem eum, sunt asperiores atque earum at in tenetur. Eum a illum rem, minus, unde eos ullam est totam sapiente ipsa fuga quo quidem? Reprehenderit enim eius veritatis! Vitae quos sapiente ex, quisquam, amet suscipit ullam, minima quas consequuntur eos labore consectetur. Pariatur facere nemo expedita. Dolores consectetur, rerum recusandae fuga reprehenderit unde quasi asperiores, porro modi explicabo dolorum tenetur non inventore exercitationem nam itaque? Pariatur quae maxime nihil blanditiis, repellat debitis odio eius eaque eligendi officia in explicabo aliquid sed illo quos laudantium. Commodi?'
        ]);
        Blog::create([
            'title' => 'Second Post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sapiente nam deserunt dicta laudantium accusamus eos quod aperiam pariatur culpa, obcaecati neque ratione mollitia sunt natus aliquam! Accusantium et ipsam optio ad doloribus sapiente est deserunt quod hic, fugiat labore?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque dolorum quo architecto voluptatibus ipsam autem eum, sunt asperiores atque earum at in tenetur. Eum a illum rem, minus, unde eos ullam est totam sapiente ipsa fuga quo quidem? Reprehenderit enim eius veritatis! Vitae quos sapiente ex, quisquam, amet suscipit ullam, minima quas consequuntur eos labore consectetur. Pariatur facere nemo expedita. Dolores consectetur, rerum recusandae fuga reprehenderit unde quasi asperiores, porro modi explicabo dolorum tenetur non inventore exercitationem nam itaque? Pariatur quae maxime nihil blanditiis, repellat debitis odio eius eaque eligendi officia in explicabo aliquid sed illo quos laudantium. Commodi?'
        ]);
        Blog::create([
            'title' => 'Third Post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sapiente nam deserunt dicta laudantium accusamus eos quod aperiam pariatur culpa, obcaecati neque ratione mollitia sunt natus aliquam! Accusantium et ipsam optio ad doloribus sapiente est deserunt quod hic, fugiat labore?',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque dolorum quo architecto voluptatibus ipsam autem eum, sunt asperiores atque earum at in tenetur. Eum a illum rem, minus, unde eos ullam est totam sapiente ipsa fuga quo quidem? Reprehenderit enim eius veritatis! Vitae quos sapiente ex, quisquam, amet suscipit ullam, minima quas consequuntur eos labore consectetur.</p><p>Pariatur facere nemo expedita. Dolores consectetur, rerum recusandae fuga reprehenderit unde quasi asperiores, porro modi explicabo dolorum tenetur non inventore exercitationem nam itaque? Pariatur quae maxime nihil blanditiis, repellat debitis odio eius eaque eligendi officia in explicabo aliquid sed illo quos laudantium. Commodi?</p>'
        ]);
    }
}
