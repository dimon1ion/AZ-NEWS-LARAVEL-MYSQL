<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => "The forest growing in world's hottest sea",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 5,
            'url' => "blog_1.jpg",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Basketball club Karabakh top 1 in the World!",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 7,
            'url' => "learn_about_bg.png",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Лес, растущий в самом горячем море мира",
            'text' => "<p>Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада обеспечивает актуальность форм воздействия. В своём стремлении улучшить пользовательский опыт мы упускаем, что базовые сценарии поведения пользователей неоднозначны и будут смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Однозначно, многие известные личности, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Таким образом, высококачественный прототип будущего проекта требует определения и уточнения кластеризации усилий. Следует отметить, что современная методология разработки однозначно фиксирует необходимость поэтапного и последовательного развития общества. Таким образом, разбавленное изрядной долей эмпатии, рациональное мышление выявляет срочную потребность глубокомысленных рассуждений. В целом, конечно, разбавленное изрядной долей эмпатии, рациональное мышление позволяет оценить значение направлений прогрессивного развития.</p>",
            'likes' => 3,
            'url' => "blog_1.jpg",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Баскетбольный клуб Карабах топ 1 в мире!",
            'text' => "<p>Вот вам яркий пример современных тенденций — укрепление и развитие внутренней структуры не оставляет шанса для направлений прогрессивного развития. Учитывая ключевые сценарии поведения, социально-экономическое развитие создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса новых принципов формирования материально-технической и кадровой базы. Внезапно, реплицированные с зарубежных источников, современные исследования и по сей день остаются уделом либералов, которые жаждут быть в равной степени предоставлены сами себе. Являясь всего лишь частью общей картины, независимые государства являются только методом политического участия и указаны как претенденты на роль ключевых факторов.</p>",
            'likes' => 2,
            'url' => "learn_about_bg.png",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "The most delicious food in the world according to Europe!",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 1,
            'url' => "single_blog_5.png",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Basketball club Karabakh top 1 in the World!",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 8,
            'url' => "learn_about_bg.png",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Самая вкусная еда в мире по версии Европы!",
            'text' => "<p>Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада обеспечивает актуальность форм воздействия. В своём стремлении улучшить пользовательский опыт мы упускаем, что базовые сценарии поведения пользователей неоднозначны и будут смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Однозначно, многие известные личности, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Таким образом, высококачественный прототип будущего проекта требует определения и уточнения кластеризации усилий. Следует отметить, что современная методология разработки однозначно фиксирует необходимость поэтапного и последовательного развития общества. Таким образом, разбавленное изрядной долей эмпатии, рациональное мышление выявляет срочную потребность глубокомысленных рассуждений. В целом, конечно, разбавленное изрядной долей эмпатии, рациональное мышление позволяет оценить значение направлений прогрессивного развития.</p>",
            'likes' => 6,
            'url' => "single_blog_5.png",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Баскетбольный клуб Карабах топ 1 в мире!",
            'text' => "<p>Вот вам яркий пример современных тенденций — укрепление и развитие внутренней структуры не оставляет шанса для направлений прогрессивного развития. Учитывая ключевые сценарии поведения, социально-экономическое развитие создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса новых принципов формирования материально-технической и кадровой базы. Внезапно, реплицированные с зарубежных источников, современные исследования и по сей день остаются уделом либералов, которые жаждут быть в равной степени предоставлены сами себе. Являясь всего лишь частью общей картины, независимые государства являются только методом политического участия и указаны как претенденты на роль ключевых факторов.</p>",
            'likes' => 3,
            'url' => "learn_about_bg.png",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "The forest growing in world's hottest sea",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 5,
            'url' => "blog_1.jpg",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Basketball club Karabakh top 1 in the World!",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 7,
            'url' => "learn_about_bg.png",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Лес, растущий в самом горячем море мира",
            'text' => "<p>Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада обеспечивает актуальность форм воздействия. В своём стремлении улучшить пользовательский опыт мы упускаем, что базовые сценарии поведения пользователей неоднозначны и будут смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Однозначно, многие известные личности, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Таким образом, высококачественный прототип будущего проекта требует определения и уточнения кластеризации усилий. Следует отметить, что современная методология разработки однозначно фиксирует необходимость поэтапного и последовательного развития общества. Таким образом, разбавленное изрядной долей эмпатии, рациональное мышление выявляет срочную потребность глубокомысленных рассуждений. В целом, конечно, разбавленное изрядной долей эмпатии, рациональное мышление позволяет оценить значение направлений прогрессивного развития.</p>",
            'likes' => 6,
            'url' => "blog_1.jpg",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Баскетбольный клуб Карабах топ 1 в мире!",
            'text' => "<p>Вот вам яркий пример современных тенденций — укрепление и развитие внутренней структуры не оставляет шанса для направлений прогрессивного развития. Учитывая ключевые сценарии поведения, социально-экономическое развитие создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса новых принципов формирования материально-технической и кадровой базы. Внезапно, реплицированные с зарубежных источников, современные исследования и по сей день остаются уделом либералов, которые жаждут быть в равной степени предоставлены сами себе. Являясь всего лишь частью общей картины, независимые государства являются только методом политического участия и указаны как претенденты на роль ключевых факторов.</p>",
            'likes' => 3,
            'url' => "learn_about_bg.png",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "The most delicious food in the world according to Europe!",
            'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at culpa quisquam ipsam, aut maxime harum dolor. Delectus laborum expedita quidem soluta quisquam distinctio maxime, voluptatibus repellendus voluptatem molestias eum animi, autem dolores nesciunt voluptas a nam minima eaque obcaecati. Ullam velit officiis expedita accusantium modi. Saepe et aut minus magnam autem id perspiciatis blanditiis quisquam dolore voluptatibus neque a iusto ad excepturi voluptatem, sunt expedita nam illum dicta dignissimos debitis, dolorum explicabo. Enim, id? Quam error voluptatibus dolor nisi vel incidunt explicabo optio dolores perspiciatis modi mollitia atque odio tempora animi, sunt iure est impedit harum consequatur. Perferendis, earum?</p>",
            'likes' => 1,
            'url' => "single_blog_5.png",
            'language_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('posts')->insert([
            'title' => "Самая вкусная еда в мире по версии Европы!",
            'text' => "<p>Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада обеспечивает актуальность форм воздействия. В своём стремлении улучшить пользовательский опыт мы упускаем, что базовые сценарии поведения пользователей неоднозначны и будут смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Однозначно, многие известные личности, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Таким образом, высококачественный прототип будущего проекта требует определения и уточнения кластеризации усилий. Следует отметить, что современная методология разработки однозначно фиксирует необходимость поэтапного и последовательного развития общества. Таким образом, разбавленное изрядной долей эмпатии, рациональное мышление выявляет срочную потребность глубокомысленных рассуждений. В целом, конечно, разбавленное изрядной долей эмпатии, рациональное мышление позволяет оценить значение направлений прогрессивного развития.</p>",
            'likes' => 6,
            'url' => "single_blog_5.png",
            'language_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
