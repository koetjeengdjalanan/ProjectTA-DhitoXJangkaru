<?php

namespace Database\Seeders;

use App\Models\BlogPosts;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();

        Category::insert([
            [
                'name' => 'General',
                'slug' => 'general',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, repudiandae!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'description' => 'Eos repellendus ut dolores neque perferendis ducimus suscipit similique mollitia!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'Studential',
                'slug' => 'studential',
                'description' => 'Nihil animi commodi unde suscipit doloremque officia tenetur rerum inventore!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
        ]);

        BlogPosts::insert([
            [
                'category_id' => mt_rand(1, 3),
                'user_id' => mt_rand(1, 2),
                'uuid' => Str::uuid(),
                'title' => 'Post One',
                'author' => 'Mr. Nobody',
                'uuid' => mt_rand(1000, 9999),
                'created_at' => now()->addSecond(mt_rand(0, 9999999)),
                'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo,',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo, totam optio placeat eius modi molestias, omnis recusandae corrupti minima id accusantium vel architecto deserunt maxime. Sunt enim commodi sed. Velit unde atque soluta deleniti sint harum possimus accusantium aliquam labore ad earum, deserunt commodi quo autem mollitia quidem fugit rem ex cupiditate officiis tenetur? Veniam temporibus doloremque magnam facere nulla porro, debitis itaque maiores minima quo nostrum? Labore, iusto.</p><p>Reprehenderit adipisci dolorem, dolorum velit quas veritatis maxime, corrupti vero facere maiores perspiciatis ipsum alias atque! Itaque iusto, omnis nostrum esse quo voluptatum voluptates laudantium nulla sapiente blanditiis quasi suscipit illo exercitationem? Totam reiciendis, beatae tenetur ea vitae recusandae obcaecati molestias neque, corporis animi voluptatum eaque quas nobis quo minima, facilis mollitia rem impedit voluptates nostrum! Labore libero non aliquam voluptate commodi sequi, eum veniam natus quam praesentium, explicabo eaque est velit quo dolorem! Velit fugiat dolorum corporis eligendi accusamus.</p><p>Repudiandae placeat laudantium earum magnam tempora. Commodi assumenda vel, tenetur dolor cumque, nesciunt numquam ad similique temporibus reprehenderit iure natus exercitationem facilis ipsa maiores asperiores! Animi, ullam. Est numquam sunt vitae provident laboriosam unde cumque quis dolorem dolor dignissimos! Hic voluptates modi maiores perspiciatis illum deserunt possimus! Error pariatur magni dolore asperiores similique fugit saepe rerum ratione provident veritatis ipsum facilis nam ad autem, quasi temporibus exercitationem reiciendis impedit, debitis non earum animi. Quasi, excepturi beatae ipsum voluptatibus voluptates ducimus?</p><p>Neque quasi illum pariatur quia cumque at earum, expedita culpa quas modi, perferendis laboriosam esse aliquam libero eveniet dignissimos? Eaque id quasi mollitia voluptas corrupti aperiam est iste, earum expedita magni voluptatibus facilis. Quidem adipisci quae minus tenetur fuga voluptatem, sapiente magni porro voluptate? Odio quas sequi nisi minima obcaecati quam dolores, laboriosam aliquam mollitia reiciendis corrupti dolor, repellat rem cumque fugiat repellendus! Culpa consequatur temporibus dicta eos fuga dolorum reiciendis magnam repellendus? Fugiat excepturi nemo adipisci, expedita porro at.</p><p>Et rem modi dolorum praesentium qui est, corporis culpa aliquam, exercitationem reiciendis ea quaerat iusto, officia laudantium nulla facilis eligendi possimus perferendis enim natus tempora. Cumque ut distinctio dolorum blanditiis expedita ipsam magni quis consequuntur. Placeat, est facere! Fugiat ex veniam reiciendis nobis unde odit porro quaerat provident? Laudantium sequi in doloribus. Ad, obcaecati ipsum. Ipsum nam corporis ut necessitatibus odit aliquam enim quas ratione eos ad, iusto voluptate nisi omnis, earum magni ducimus voluptates beatae repudiandae! Fugiat, iure. Pariatur.</p>'
            ],
            [
                'category_id' => mt_rand(1, 3),
                'user_id' => mt_rand(1, 2),
                'uuid' => Str::uuid(),
                'title' => 'Post Two',
                'author' => 'Mr. Nobody',
                'uuid' => mt_rand(1000, 9999),
                'created_at' => now()->addSecond(mt_rand(0, 9999999)),
                'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
                'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore placeat, deleniti cupiditate quos sunt eum aspernatur dignissimos omnis ut alias,',
                'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore placeat, deleniti cupiditate quos sunt eum aspernatur dignissimos omnis ut alias, veniam optio deserunt magni id ullam animi aperiam, officia sint sapiente consectetur ratione! Non iste similique, itaque vero molestiae adipisci?</p><p>In nam similique reiciendis cupiditate eum dolorum nisi neque eaque molestiae illo praesentium expedita totam officia odit sit, recusandae id consectetur voluptates aliquid est fugiat. In doloremque saepe, itaque obcaecati accusamus rem dolore quos repudiandae, quaerat aperiam molestiae fugiat quia?</p><p>Tenetur adipisci amet est commodi repudiandae, soluta accusamus aliquid sit qui harum provident neque explicabo ut obcaecati nihil odio, quibusdam quo iusto culpa molestiae delectus dolor facere consectetur nemo. Tempora iusto eveniet odio neque laborum quae ipsa suscipit sunt sint.</p><p>Odit perspiciatis distinctio laborum doloribus quis. Sit voluptatibus et, architecto perferendis exercitationem recusandae neque, facere vel ullam cumque aperiam sint temporibus reprehenderit quia esse fugit praesentium animi incidunt fugiat non velit officiis molestiae quaerat? Sequi asperiores illo rem molestiae error.</p>'
            ],
            [
                'category_id' => mt_rand(1, 3),
                'user_id' => mt_rand(1, 2),
                'uuid' => Str::uuid(),
                'title' => 'Post three',
                'author' => 'Mrs. Lonely',
                'uuid' => mt_rand(1000, 9999),
                'created_at' => now()->addSecond(mt_rand(0, 9999999)),
                'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias libero sunt temporibus id dignissimos sint minus quas recusandae totam, repudiandae',
                'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias libero sunt temporibus id dignissimos sint minus quas recusandae totam, repudiandae nihil ad illum quia maxime fugiat, quod, ducimus labore doloremque aspernatur. Deleniti consequatur error animi laudantium, velit est aliquid iure aspernatur commodi ratione recusandae enim id aliquam at, minima placeat totam magni ullam. Veniam laborum molestias ab fugit deserunt a tempora, quibusdam doloribus! Distinctio, veniam reprehenderit! Eligendi hic repudiandae ipsum expedita aut. Tempora corrupti quae nam est beatae expedita! Dolorum nulla pariatur, soluta voluptate consequuntur ex nihil labore molestiae fugit laborum corrupti doloribus eum. Ad culpa, necessitatibus amet magni delectus corrupti quia beatae! Unde fugit iusto error. Inventore, laboriosam, dolor assumenda voluptatum perspiciatis aliquid quasi tenetur, excepturi eligendi distinctio vel quis non vitae neque qui est quod repudiandae soluta sed amet quas. Ab minus nulla similique velit provident libero reprehenderit exercitationem, veritatis iure sunt tenetur laudantium quaerat facilis dicta aperiam.</p><p>Nihil illum iure quae voluptate at temporibus cupiditate magnam tempora quos natus. Dolorem ipsum voluptate, aspernatur magni molestias laboriosam dolor fugiat labore deleniti suscipit commodi perspiciatis ex eligendi corrupti reprehenderit eveniet dolorum iste! Mollitia, suscipit consequuntur quo quibusdam deserunt ad magni in eaque explicabo tempore provident! Expedita nesciunt porro corporis dolorem. Consequatur modi inventore optio laudantium est suscipit non itaque, praesentium asperiores perferendis amet eum? Reprehenderit unde cum ea? Consectetur voluptas beatae illo a unde earum ipsa itaque! Incidunt, porro hic. Nobis ullam recusandae nisi beatae vitae non odio quia aut rerum voluptatem, iure minima dolorem sint natus. Cupiditate blanditiis soluta rerum quisquam ut modi tenetur inventore, eum mollitia cumque enim quo amet odio distinctio harum? Corporis quos dignissimos enim, assumenda, maxime ut nesciunt sed adipisci doloribus expedita, culpa dolor quo vitae illum magni officia necessitatibus voluptas laboriosam aliquid nisi eos? Temporibus placeat doloribus ullam, commodi vero nesciunt nemo fugiat.</p><p>Blanditiis odio itaque, repudiandae, culpa saepe error laudantium earum expedita nulla, deserunt ducimus non id fugiat dicta a doloremque dolor inventore natus? Molestiae dignissimos, aperiam consectetur debitis a ratione consequatur in optio molestias quasi hic ab saepe sunt facere qui nisi sit eveniet itaque quam sequi exercitationem quas culpa, voluptatum esse? Quod fuga dolores autem vel, veniam non ipsum velit voluptatibus at maiores repellat, exercitationem aspernatur laudantium debitis eaque minima officia dicta quis explicabo numquam ducimus ab alias! Enim iusto accusamus ducimus cupiditate dignissimos odit ipsum deserunt, nostrum perferendis blanditiis maiores vero deleniti fugiat dolore! Velit amet officiis soluta doloribus maiores consequuntur tenetur laboriosam laborum! Molestiae nostrum necessitatibus ut ea omnis? Sunt harum porro aliquid quia inventore voluptas nisi explicabo reiciendis suscipit id illo iure pariatur quaerat veniam ipsam expedita sapiente, maiores qui, eligendi repellat voluptatem optio sint? Libero voluptatibus, debitis illum nisi eligendi nihil impedit. Nisi quas unde voluptates!</p>'
            ],
            [
                'category_id' => mt_rand(1, 3),
                'user_id' => mt_rand(1, 2),
                'uuid' => Str::uuid(),
                'title' => 'Post four',
                'author' => 'Mr. Nobody',
                'uuid' => mt_rand(1000, 9999),
                'created_at' => now()->addSecond(mt_rand(0, 9999999)),
                'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo,',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo, totam optio placeat eius modi molestias, omnis recusandae corrupti minima id accusantium vel architecto deserunt maxime. Sunt enim commodi sed. Velit unde atque soluta deleniti sint harum possimus accusantium aliquam labore ad earum, deserunt commodi quo autem mollitia quidem fugit rem ex cupiditate officiis tenetur? Veniam temporibus doloremque magnam facere nulla porro, debitis itaque maiores minima quo nostrum? Labore, iusto.</p><p>Reprehenderit adipisci dolorem, dolorum velit quas veritatis maxime, corrupti vero facere maiores perspiciatis ipsum alias atque! Itaque iusto, omnis nostrum esse quo voluptatum voluptates laudantium nulla sapiente blanditiis quasi suscipit illo exercitationem? Totam reiciendis, beatae tenetur ea vitae recusandae obcaecati molestias neque, corporis animi voluptatum eaque quas nobis quo minima, facilis mollitia rem impedit voluptates nostrum! Labore libero non aliquam voluptate commodi sequi, eum veniam natus quam praesentium, explicabo eaque est velit quo dolorem! Velit fugiat dolorum corporis eligendi accusamus.</p><p>Repudiandae placeat laudantium earum magnam tempora. Commodi assumenda vel, tenetur dolor cumque, nesciunt numquam ad similique temporibus reprehenderit iure natus exercitationem facilis ipsa maiores asperiores! Animi, ullam. Est numquam sunt vitae provident laboriosam unde cumque quis dolorem dolor dignissimos! Hic voluptates modi maiores perspiciatis illum deserunt possimus! Error pariatur magni dolore asperiores similique fugit saepe rerum ratione provident veritatis ipsum facilis nam ad autem, quasi temporibus exercitationem reiciendis impedit, debitis non earum animi. Quasi, excepturi beatae ipsum voluptatibus voluptates ducimus?</p><p>Neque quasi illum pariatur quia cumque at earum, expedita culpa quas modi, perferendis laboriosam esse aliquam libero eveniet dignissimos? Eaque id quasi mollitia voluptas corrupti aperiam est iste, earum expedita magni voluptatibus facilis. Quidem adipisci quae minus tenetur fuga voluptatem, sapiente magni porro voluptate? Odio quas sequi nisi minima obcaecati quam dolores, laboriosam aliquam mollitia reiciendis corrupti dolor, repellat rem cumque fugiat repellendus! Culpa consequatur temporibus dicta eos fuga dolorum reiciendis magnam repellendus? Fugiat excepturi nemo adipisci, expedita porro at.</p><p>Et rem modi dolorum praesentium qui est, corporis culpa aliquam, exercitationem reiciendis ea quaerat iusto, officia laudantium nulla facilis eligendi possimus perferendis enim natus tempora. Cumque ut distinctio dolorum blanditiis expedita ipsam magni quis consequuntur. Placeat, est facere! Fugiat ex veniam reiciendis nobis unde odit porro quaerat provident? Laudantium sequi in doloribus. Ad, obcaecati ipsum. Ipsum nam corporis ut necessitatibus odit aliquam enim quas ratione eos ad, iusto voluptate nisi omnis, earum magni ducimus voluptates beatae repudiandae! Fugiat, iure. Pariatur.</p>'
            ],
            [
                'category_id' => mt_rand(1, 3),
                'user_id' => mt_rand(1, 2),
                'uuid' => Str::uuid(),
                'title' => 'Post Five',
                'author' => 'Mrs. Lonely',
                'uuid' => mt_rand(1000, 9999),
                'created_at' => now()->addSecond(mt_rand(0, 9999999)),
                'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo,',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste itaque nobis perspiciatis est amet et repudiandae voluptates minus atque, nemo, totam optio placeat eius modi molestias, omnis recusandae corrupti minima id accusantium vel architecto deserunt maxime. Sunt enim commodi sed. Velit unde atque soluta deleniti sint harum possimus accusantium aliquam labore ad earum, deserunt commodi quo autem mollitia quidem fugit rem ex cupiditate officiis tenetur? Veniam temporibus doloremque magnam facere nulla porro, debitis itaque maiores minima quo nostrum? Labore, iusto.</p><p>Reprehenderit adipisci dolorem, dolorum velit quas veritatis maxime, corrupti vero facere maiores perspiciatis ipsum alias atque! Itaque iusto, omnis nostrum esse quo voluptatum voluptates laudantium nulla sapiente blanditiis quasi suscipit illo exercitationem? Totam reiciendis, beatae tenetur ea vitae recusandae obcaecati molestias neque, corporis animi voluptatum eaque quas nobis quo minima, facilis mollitia rem impedit voluptates nostrum! Labore libero non aliquam voluptate commodi sequi, eum veniam natus quam praesentium, explicabo eaque est velit quo dolorem! Velit fugiat dolorum corporis eligendi accusamus.</p><p>Repudiandae placeat laudantium earum magnam tempora. Commodi assumenda vel, tenetur dolor cumque, nesciunt numquam ad similique temporibus reprehenderit iure natus exercitationem facilis ipsa maiores asperiores! Animi, ullam. Est numquam sunt vitae provident laboriosam unde cumque quis dolorem dolor dignissimos! Hic voluptates modi maiores perspiciatis illum deserunt possimus! Error pariatur magni dolore asperiores similique fugit saepe rerum ratione provident veritatis ipsum facilis nam ad autem, quasi temporibus exercitationem reiciendis impedit, debitis non earum animi. Quasi, excepturi beatae ipsum voluptatibus voluptates ducimus?</p><p>Neque quasi illum pariatur quia cumque at earum, expedita culpa quas modi, perferendis laboriosam esse aliquam libero eveniet dignissimos? Eaque id quasi mollitia voluptas corrupti aperiam est iste, earum expedita magni voluptatibus facilis. Quidem adipisci quae minus tenetur fuga voluptatem, sapiente magni porro voluptate? Odio quas sequi nisi minima obcaecati quam dolores, laboriosam aliquam mollitia reiciendis corrupti dolor, repellat rem cumque fugiat repellendus! Culpa consequatur temporibus dicta eos fuga dolorum reiciendis magnam repellendus? Fugiat excepturi nemo adipisci, expedita porro at.</p><p>Et rem modi dolorum praesentium qui est, corporis culpa aliquam, exercitationem reiciendis ea quaerat iusto, officia laudantium nulla facilis eligendi possimus perferendis enim natus tempora. Cumque ut distinctio dolorum blanditiis expedita ipsam magni quis consequuntur. Placeat, est facere! Fugiat ex veniam reiciendis nobis unde odit porro quaerat provident? Laudantium sequi in doloribus. Ad, obcaecati ipsum. Ipsum nam corporis ut necessitatibus odit aliquam enim quas ratione eos ad, iusto voluptate nisi omnis, earum magni ducimus voluptates beatae repudiandae! Fugiat, iure. Pariatur.</p>'
            ],
        ]);
    }
}
