<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'action',
            'description' => 'Nunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'rpg',
            'description' => 'Sed in lacinia enim. Etiam vehicula neque quis ipsum dapibus, at ultrices tortor tempor. In quis euismod diam. Ut venenatis at nisi quis ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed iaculis sem in pulvinar varius. Aliquam vestibulum risus vel nunc egestas, aliquet mattis diam facilisis. Aliquam vel ante ut diam iaculis pharetra. Proin quis varius tellus, sit amet porta libero. In egestas maximus mauris, vitae hendrerit tellus iaculis sed. Ut vitae nisl euismod, consequat est at, rutrum augue. ',
            'created_at' => '2020-03-27'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'strategy',
            'description' => 'Vestibulum malesuada dapibus egestas. Sed vestibulum ultricies augue. Donec ultricies, nisi vitae euismod commodo, enim ligula rutrum quam, nec molestie ante dolor nec purus. Fusce quis tellus vel odio elementum pellentesque a sit amet enim. In at condimentum risus. Phasellus viverra fermentum dapibus. Donec id ex eros. Curabitur id lorem augue. Cras a interdum orci. Nunc vehicula convallis ligula, at vestibulum enim accumsan eu. Sed vel semper massa. Donec eu nibh feugiat, malesuada est in, auctor sem. Donec tristique dui neque, sed tincidunt nisi bibendum eget. Pellentesque lobortis sagittis est luctus sagittis. ',
            'created_at' => '2020-03-27'
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'quest',
            'description' => 'Mauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'online',
            'description' => 'Sed in lacinia enim. Etiam vehicula neque quis ipsum dapibus, at ultrices tortor tempor. In quis euismod diam. Ut venenatis at nisi quis ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed iaculis sem in pulvinar varius. Aliquam vestibulum risus vel nunc egestas, aliquet mattis diam facilisis. Aliquam vel ante ut diam iaculis pharetra. Proin quis varius tellus, sit amet porta libero. In egestas maximus mauris, vitae hendrerit tellus iaculis sed. Ut vitae nisl euismod, consequat est at, rutrum augue.',
            'created_at' => '2020-03-27'
        ]);
    }
}
