<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'id' => 1,
            'name' => 'The Witcher 3',
            'category_id' => 1,
            'price' => 400,
            'image' => 'game-1.jpg',
            'description' => 'In ultricies libero leo, eget malesuada nisi mollis a. Donec vitae ex mi. Sed eget pulvinar nisi, a porta velit. Donec id leo et neque varius cursus. Morbi at ultrices nibh, at interdum dolor. Etiam pellentesque ultrices metus, id tincidunt quam finibus a. Suspendisse porttitor, sapien sit amet sollicitudin tincidunt, dolor lectus ultricies ante, consectetur facilisis mi tellus sit amet ipsum. Sed eu elit a augue efficitur sodales. Sed pellentesque dolor nec neque euismod, vel pharetra orci vehicula. Quisque a velit lobortis, porta mauris sed, efficitur tellus. Fusce malesuada erat vel neque sodales, convallis iaculis purus laoreet. Aliquam elementum mauris leo, eget pellentesque ipsum imperdiet vitae. Suspendisse mauris urna, porta et tempus sit amet, viverra a dolor. In hac habitasse platea dictumst. Suspendisse vel eros purus. Morbi aliquet, massa ac hendrerit aliquam, ex metus varius urna, a dapibus enim erat in enim.\r\n\r\nVestibulum malesuada dapibus egestas. Sed vestibulum ultricies augue. Donec ultricies, nisi vitae euismod commodo, enim ligula rutrum quam, nec molestie ante dolor nec purus. Fusce quis tellus vel odio elementum pellentesque a sit amet enim. In at condimentum risus. Phasellus viverra fermentum dapibus. Donec id ex eros. Curabitur id lorem augue. Cras a interdum orci. Nunc vehicula convallis ligula, at vestibulum enim accumsan eu. Sed vel semper massa. Donec eu nibh feugiat, malesuada est in, auctor sem. Donec tristique dui neque, sed tincidunt nisi bibendum eget. Pellentesque lobortis sagittis est luctus sagittis.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 2,
            'name' => 'Overwatch',
            'category_id' => 1,
            'price' => 390,
            'image' => 'game-2.jpg',
            'description' => 'Mauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.\r\n\r\nNunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.\r\n\r\nNullam quis posuere nulla. Aliquam lacinia malesuada sapien, ac placerat eros. Suspendisse sit amet congue turpis, et volutpat magna. Integer placerat dolor in felis egestas viverra. Donec pretium eu odio eget molestie. Aenean cursus dui et neque euismod luctus. Duis sed suscipit ex, sit amet mollis dui. Nunc porta tellus eu ipsum finibus, ac ullamcorper mi iaculis. Sed vehicula nibh urna, quis dictum nulla tristique et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla viverra risus a est eleifend commodo. Nam placerat augue quis dui fermentum, vel tincidunt diam egestas. Quisque convallis neque et eros tristique vehicula. Integer malesuada tincidunt nulla quis tempus.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 3,
            'name' => 'Deus Ex: Mankind Divided',
            'category_id' => 2,
            'price' => 420,
            'image' => 'game-3.jpg',
            'description' => 'Vestibulum malesuada dapibus egestas. Sed vestibulum ultricies augue. Donec ultricies, nisi vitae euismod commodo, enim ligula rutrum quam, nec molestie ante dolor nec purus. Fusce quis tellus vel odio elementum pellentesque a sit amet enim. In at condimentum risus. Phasellus viverra fermentum dapibus. Donec id ex eros. Curabitur id lorem augue. Cras a interdum orci. Nunc vehicula convallis ligula, at vestibulum enim accumsan eu. Sed vel semper massa. Donec eu nibh feugiat, malesuada est in, auctor sem. Donec tristique dui neque, sed tincidunt nisi bibendum eget. Pellentesque lobortis sagittis est luctus sagittis.\r\n\r\nMauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.\r\n\r\nNunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 4,
            'name' => 'World of WarCraft',
            'category_id' => 3,
            'price' => 500,
            'image' => 'game-4.jpg',
            'description' => 'Nunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.\r\n\r\nNullam quis posuere nulla. Aliquam lacinia malesuada sapien, ac placerat eros. Suspendisse sit amet congue turpis, et volutpat magna. Integer placerat dolor in felis egestas viverra. Donec pretium eu odio eget molestie. Aenean cursus dui et neque euismod luctus. Duis sed suscipit ex, sit amet mollis dui. Nunc porta tellus eu ipsum finibus, ac ullamcorper mi iaculis. Sed vehicula nibh urna, quis dictum nulla tristique et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla viverra risus a est eleifend commodo. Nam placerat augue quis dui fermentum, vel tincidunt diam egestas. Quisque convallis neque et eros tristique vehicula. Integer malesuada tincidunt nulla quis tempus.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 5,
            'name' => 'Call of Duty: Black ops II',
            'category_id' => 1,
            'price' => 420,
            'image' => 'game-5.jpg',
            'description' => 'In ultricies libero leo, eget malesuada nisi mollis a. Donec vitae ex mi. Sed eget pulvinar nisi, a porta velit. Donec id leo et neque varius cursus. Morbi at ultrices nibh, at interdum dolor. Etiam pellentesque ultrices metus, id tincidunt quam finibus a. Suspendisse porttitor, sapien sit amet sollicitudin tincidunt, dolor lectus ultricies ante, consectetur facilisis mi tellus sit amet ipsum. Sed eu elit a augue efficitur sodales. Sed pellentesque dolor nec neque euismod, vel pharetra orci vehicula. Quisque a velit lobortis, porta mauris sed, efficitur tellus. Fusce malesuada erat vel neque sodales, convallis iaculis purus laoreet. Aliquam elementum mauris leo, eget pellentesque ipsum imperdiet vitae. Suspendisse mauris urna, porta et tempus sit amet, viverra a dolor. In hac habitasse platea dictumst. Suspendisse vel eros purus. Morbi aliquet, massa ac hendrerit aliquam, ex metus varius urna, a dapibus enim erat in enim.\r\n\r\nVestibulum malesuada dapibus egestas. Sed vestibulum ultricies augue. Donec ultricies, nisi vitae euismod commodo, enim ligula rutrum quam, nec molestie ante dolor nec purus. Fusce quis tellus vel odio elementum pellentesque a sit amet enim. In at condimentum risus. Phasellus viverra fermentum dapibus. Donec id ex eros. Curabitur id lorem augue. Cras a interdum orci. Nunc vehicula convallis ligula, at vestibulum enim accumsan eu. Sed vel semper massa. Donec eu nibh feugiat, malesuada est in, auctor sem. Donec tristique dui neque, sed tincidunt nisi bibendum eget. Pellentesque lobortis sagittis est luctus sagittis.\r\n\r\nMauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 6,
            'name' => 'Batman',
            'category_id' => 2,
            'price' => 350,
            'image' => 'game-6.jpg',
            'description' => 'Mauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.\r\n\r\nNunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 7,
            'name' => 'Rocket League',
            'category_id' => 3,
            'price' => 500,
            'image' => 'game-7.jpg',
            'description' => 'Nunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.\r\n\r\nNullam quis posuere nulla. Aliquam lacinia malesuada sapien, ac placerat eros. Suspendisse sit amet congue turpis, et volutpat magna. Integer placerat dolor in felis egestas viverra. Donec pretium eu odio eget molestie. Aenean cursus dui et neque euismod luctus. Duis sed suscipit ex, sit amet mollis dui. Nunc porta tellus eu ipsum finibus, ac ullamcorper mi iaculis. Sed vehicula nibh urna, quis dictum nulla tristique et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla viverra risus a est eleifend commodo. Nam placerat augue quis dui fermentum, vel tincidunt diam egestas. Quisque convallis neque et eros tristique vehicula. Integer malesuada tincidunt nulla quis tempus.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 8,
            'name' => 'Dishonored 2',
            'category_id' => 4,
            'price' => 380,
            'image' => 'game-8.jpg',
            'description' => 'Nunc commodo at lorem vel aliquet. Praesent mattis fermentum libero, nec rhoncus libero auctor accumsan. Duis vulputate urna sed augue aliquam maximus. Mauris tempor, ligula at cursus rhoncus, neque diam rutrum odio, elementum ornare nulla neque nec mi. Etiam sodales orci vitae blandit tincidunt. Etiam tincidunt tellus ut viverra finibus. Sed vitae lectus sit amet eros fermentum semper. Aliquam ornare risus erat, ut posuere mauris mattis a. Proin blandit rutrum ligula, at fermentum libero tincidunt at.\r\n\r\nNullam quis posuere nulla. Aliquam lacinia malesuada sapien, ac placerat eros. Suspendisse sit amet congue turpis, et volutpat magna. Integer placerat dolor in felis egestas viverra. Donec pretium eu odio eget molestie. Aenean cursus dui et neque euismod luctus. Duis sed suscipit ex, sit amet mollis dui. Nunc porta tellus eu ipsum finibus, ac ullamcorper mi iaculis. Sed vehicula nibh urna, quis dictum nulla tristique et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla viverra risus a est eleifend commodo. Nam placerat augue quis dui fermentum, vel tincidunt diam egestas. Quisque convallis neque et eros tristique vehicula. Integer malesuada tincidunt nulla quis tempus.',
            'created_at' => '2020-03-27'
        ]);
        DB::table('goods')->insert([
            'id' => 9,
            'name' => 'This War of Mine',
            'category_id' => 3,
            'price' => 520,
            'image' => 'game-9.jpg',
            'description' => 'In ultricies libero leo, eget malesuada nisi mollis a. Donec vitae ex mi. Sed eget pulvinar nisi, a porta velit. Donec id leo et neque varius cursus. Morbi at ultrices nibh, at interdum dolor. Etiam pellentesque ultrices metus, id tincidunt quam finibus a. Suspendisse porttitor, sapien sit amet sollicitudin tincidunt, dolor lectus ultricies ante, consectetur facilisis mi tellus sit amet ipsum. Sed eu elit a augue efficitur sodales. Sed pellentesque dolor nec neque euismod, vel pharetra orci vehicula. Quisque a velit lobortis, porta mauris sed, efficitur tellus. Fusce malesuada erat vel neque sodales, convallis iaculis purus laoreet. Aliquam elementum mauris leo, eget pellentesque ipsum imperdiet vitae. Suspendisse mauris urna, porta et tempus sit amet, viverra a dolor. In hac habitasse platea dictumst. Suspendisse vel eros purus. Morbi aliquet, massa ac hendrerit aliquam, ex metus varius urna, a dapibus enim erat in enim.\r\n\r\nVestibulum malesuada dapibus egestas. Sed vestibulum ultricies augue. Donec ultricies, nisi vitae euismod commodo, enim ligula rutrum quam, nec molestie ante dolor nec purus. Fusce quis tellus vel odio elementum pellentesque a sit amet enim. In at condimentum risus. Phasellus viverra fermentum dapibus. Donec id ex eros. Curabitur id lorem augue. Cras a interdum orci. Nunc vehicula convallis ligula, at vestibulum enim accumsan eu. Sed vel semper massa. Donec eu nibh feugiat, malesuada est in, auctor sem. Donec tristique dui neque, sed tincidunt nisi bibendum eget. Pellentesque lobortis sagittis est luctus sagittis.\r\n\r\nMauris sit amet libero mauris. Suspendisse ullamcorper turpis at gravida mattis. Fusce placerat risus nec ligula lacinia, ut ultrices ex imperdiet. Aenean eleifend mi hendrerit bibendum eleifend. Duis auctor imperdiet pretium. Ut sit amet ipsum non tortor hendrerit tempus vitae vitae risus. Donec nec mi neque. Mauris ornare metus nec eros sollicitudin fermentum. Proin placerat, mi id rhoncus suscipit, arcu velit semper augue, ac aliquam nisi felis in tellus. Duis varius sed leo ac pellentesque.',
            'created_at' => '2020-03-27'
        ]);
    }
}
