<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2022-10-27 12:05:49',
                'updated_at' => '2022-10-27 12:05:55',
                'title' => '\'Amateurs sit and wait for inspiration, the rest of us just get up and go to work.\' ',
                'body' => '<p>Coffee, frappuccino, robusta, pumpkin spice cup cinnamon lungo aged, kopi-luwak, medium pumpkin spice, white americano single shot sit et, as, redeye bar  extraction barista roast frappuccino. Cup, chicory ut, coffee grounds caffeine body viennese, spoon affogato ristretto skinny extra  mazagran, so java, americano, flavour dripper aged french press sweet cortado. Rich kopi-luwak, robusta breve in, redeye beans sweet, kopi-luwak cream medium rich cup cup a redeye froth. So steamed decaffeinated, spoon, sweet redeye lungo, body, percolator cup fair trade latte, pumpkin spice dark espresso coffee roast, to go latte fair trade rich sugar. To go, doppio, mazagran redeye, black medium, espresso, medium variety viennese extra  irish cup foam. Cortado, sugar, id ut carajillo in, percolator mug extraction seasonal shop foam and con panna. Frappuccino to go dark sweet, dark sit kopi-luwak percolator breve siphon shop siphon mocha affogato. Wings half and half milk wings lungo single shot, est cup turkish, french press, est grinder at wings strong macchiato. Frappuccino single shot lungo sweet chicory barista cream black seasonal mug, single shot, trifecta, half and half kopi-luwak, affogato in mocha dark doppio. Beans a, saucer, extra , pumpkin spice, single shot half and half, et cultivar to go carajillo qui percolator. Cup froth at a french press, siphon con panna, flavour, cream, french press, blue mountain sweet variety froth, cinnamon, beans milk dark grounds skinny.</p>
<p>Dripper percolator whipped coffee flavour plunger pot irish mazagran caramelization, foam café au lait breve grounds extraction, medium sweet, as half and half brewed aromatic so barista to go. Saucer that est, at, extraction americano redeye french press strong, kopi-luwak est espresso, dark spoon, body wings chicory flavour irish french press mazagran java medium. Ristretto pumpkin spice siphon blue mountain, caffeine, half and half foam cream, percolator whipped macchiato froth flavour mug, lungo cultivar spoon iced, cinnamon ut cappuccino flavour brewed. Aromatic, siphon, viennese latte, con panna iced flavour, wings, extra , body shop grounds trifecta, crema, ristretto grinder fair trade eu, macchiato pumpkin spice saucer acerbic latte americano. Cup aroma cinnamon, saucer, organic, black cream to go sugar, americano as seasonal galão as cultivar spoon acerbic. Dark half and half cappuccino steamed frappuccino, doppio, java caffeine, latte mazagran strong id, cream americano grinder variety black. To go, cream variety, blue mountain cream medium crema, organic to go froth, caramelization galão medium skinny bar , percolator arabica filter arabica crema body. Trifecta coffee instant ristretto café au lait, dripper aged, milk percolator saucer crema dripper crema to go breve. Ut chicory dripper, organic americano, strong, coffee et spoon, robust, redeye organic est robust grinder. Trifecta black breve cream a, rich, decaffeinated cream turkish, milk saucer, whipped beans decaffeinated dripper, half and half spoon roast sweet eu qui et whipped. Est barista, et extraction filter, affogato, beans instant café au lait, white crema dripper beans kopi-luwak plunger pot aromatic id, grinder frappuccino cultivar dark saucer.</p>
<p>Est iced, turkish, iced carajillo, extra , froth barista, mocha to go espresso, steamed saucer filter blue mountain froth. Dripper, roast cortado robust, macchiato cup, medium crema single shot froth con panna dark doppio percolator. That frappuccino robust seasonal filter, dripper coffee froth cultivar est, arabica sugar ristretto, shop carajillo, a steamed roast cortado barista spoon skinny latte. Milk, trifecta aftertaste shop aged aroma, to go steamed, shop barista plunger pot siphon carajillo cultivar affogato. Et caffeine id flavour cinnamon single shot robusta extra , variety, seasonal siphon eu and extra  froth, qui iced kopi-luwak siphon java ristretto sit espresso. Saucer bar  sit latte, spoon grounds aftertaste robusta est single shot, to go ut so and, strong dripper bar  variety cultivar. Cappuccino mocha variety, galão, doppio that coffee, single shot extraction grinder doppio sugar iced caramelization et shop. Froth instant pumpkin spice in, rich, spoon, eu java ut single origin viennese and brewed percolator. Froth, to go, breve blue mountain breve foam galão eu con panna, flavour body breve, mocha, java, kopi-luwak, aged iced beans, latte, lungo robusta cultivar rich acerbic. Foam mug latte café au lait, robusta, in crema grounds ut decaffeinated irish, blue mountain arabica at, redeye, steamed to go bar , organic, beans so kopi-luwak decaffeinated spoon. Extra  crema as doppio milk, strong, grinder half and half aroma, foam, a et aromatic at crema.</p>',
                'image_path' => 'https://ontariospca.ca/wp-content/uploads/2019/03/DUlk_dKU8AAE4By-1-600x401-600x450-c-default.jpg',
                'author_name' => 'Stephen King',
                'slug' => 'amateurs-sit-and-wait-for-inspiration',
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => '2022-10-27 00:00:00',
                'updated_at' => '2022-10-27 15:42:22',
                'title' => '\'It is never too late to be what you might have been.\'',
                'body' => 'Foam flavour so, caramelization cappuccino, affogato barista con panna seasonal kopi-luwak. Sweet plunger pot, irish bar  skinny frappuccino coffee.
<br /><br />
Et, rich, so, organic eu grounds sugar extra. Decaffeinated espresso variety pumpkin spice est id skinny.
<br /><br />
Acerbic cultivar extra  decaffeinated white macchiato in et est fair trade. Arabica spoon pumpkin spice robusta, mocha breve beans qui barista id caffeine galão.
<br /><br />
Strong doppio extra  rich, foam, acerbic grinder saucer cultivar chicory. To go french press et, steamed dark, mug galão acerbic caffeine turkish.
<br /><br />
Café au lait galão cream aftertaste caffeine fair trade body medium dark. Lungo, viennese dark as coffee viennese half and half arabica caramelization flavour saucer.',
                'image_path' => 'https://i.natgeofe.com/n/de94c416-6d23-45f5-9708-e8d56289268e/naturepl_01132178.jpg?w=636&h=631',
                'author_name' => 'George Eliot',
                'slug' => 'it-is-never-too-late',
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => '2022-10-27 15:45:15',
                'updated_at' => '2022-10-27 15:45:18',
                'title' => '"If I waited for perfection, I would never write a word."',
                'body' => '<p>Latte caramelization roast, ut as brewed single shot, lungo milk aroma beans, breve aftertaste eu roast skinny, latte cup sit doppio saucer iced caramelization. Steamed instant arabica barista decaffeinated, single origin cinnamon cortado, latte caramelization crema mazagran, caramelization robusta mocha, iced that, crema foam, dark sit mazagran variety froth. Aftertaste skinny sugar robust cultivar, mazagran plunger pot at macchiato ristretto cup in ristretto coffee, café au lait pumpkin spice sit, turkish organic french press irish id variety. Cappuccino dark, doppio, roast, carajillo, cappuccino, half and half, irish iced so and, brewed cream pumpkin spice trifecta milk. Spoon aroma organic arabica sweet, spoon white breve, black white chicory café au lait grinder.</p>
<p>Turkish, percolator, chicory skinny and carajillo, ut sweet breve french press organic aged plunger pot. Single origin aftertaste robust black, percolator galão, caffeine galão, shop, percolator, trifecta breve extraction single shot roast galão frappuccino espresso carajillo. In est, cup, roast body, rich extra  strong so espresso seasonal organic affogato, turkish, aftertaste single origin cream, cinnamon crema to go java organic extra. Coffee aroma est lungo grounds, qui, bar  siphon, sugar extraction shop seasonal cappuccino. And cappuccino fair trade americano, aged strong, white id grinder, dark, steamed decaffeinated qui, flavour affogato strong seasonal blue mountain eu extra  shop macchiato.</p>
<p>Arabica qui affogato cup cappuccino to go, filter sweet crema siphon steamed grinder blue mountain. That, single shot a crema whipped, coffee sit cup decaffeinated kopi-luwak cup chicory, breve kopi-luwak as kopi-luwak trifecta at spoon. Organic, cappuccino, cup, and half and half organic foam mug, foam that brewed medium, aromatic sugar aftertaste espresso saucer black foam. Latte barista americano, aftertaste white con panna acerbic, frappuccino barista café au lait, doppio café au lait cup mug single origin variety. Aftertaste extra  mocha acerbic skinny, extraction aftertaste, et java froth, plunger pot, coffee ut to go crema, to go shop caramelization, latte ristretto est skinny viennese.</p>',
                'image_path' => 'https://static.boredpanda.com/blog/wp-content/uploads/2016/08/cute-kittens-4-57b30a939dff5__605.jpg',
                'author_name' => 'Margaret Atwood',
                'slug' => 'if-i-waited-for-perfection-i would never-write-a-word',
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => '2022-10-27 15:47:07',
                'updated_at' => '2022-10-27 15:47:11',
                'title' => ' "Anyone who has never made a mistake has never tried anything new." ',
                'body' => 'Siphon arabica cappuccino to go et, viennese aroma plunger pot grinder, to go, cream macchiato, a, foam crema variety organic extra  breve coffee steamed grinder robust, extraction fair trade, white coffee, organic americano coffee aromatic, cup and sit mug viennese. Grounds coffee qui, café au lait, crema at whipped est saucer sugar acerbic viennese, spoon variety, filter as flavour, to go redeye iced, froth ristretto blue mountain, at trifecta, americano mocha iced plunger pot et frappuccino. Qui aftertaste flavour, a, trifecta milk, lungo french press trifecta dripper, sit, a skinny, extraction plunger pot, and white strong, robusta aromatic aged to go sugar. A so instant café au lait latte sit eu rich id affogato beans, body id skinny flavour, extraction, at, sit instant barista steamed espresso aged decaffeinated crema iced aged rich in arabica turkish. Latte robust, in, a froth redeye single shot trifecta, cortado in con panna variety breve, chicory robusta doppio, organic percolator, half and half turkish affogato skinny, seasonal plunger pot cortado extra  cultivar flavour. Galão, cortado cream iced kopi-luwak, coffee barista, extra , instant brewed percolator bar  decaffeinated half and half, chicory, mocha that con panna, rich irish lungo ut roast, ristretto, saucer, qui beans chicory percolator aged sweet irish dripper medium cinnamon. Cappuccino organic arabica foam galão and galão cup café au lait chicory cultivar caffeine, qui dripper aged, crema, ut arabica chicory, extraction, americano, steamed organic et, carajillo aftertaste ut macchiato sweet dark decaffeinated aftertaste aromatic. Foam roast id con panna ut shop coffee, cup grounds skinny white that, foam, java sugar et, body filter grounds, cream percolator grounds id spoon in, body irish, single shot so aroma organic con panna and aftertaste java. Et, mug, carajillo to go carajillo cream cinnamon fair trade and caramelization coffee turkish, cortado, arabica, eu froth cappuccino variety at foam. Sugar, turkish milk kopi-luwak instant, sit cinnamon wings, breve so, turkish, qui french press strong, sugar et instant shop dripper kopi-luwak irish medium turkish. Cinnamon and, mocha, dripper, aftertaste coffee cup bar  beans redeye, chicory frappuccino lungo robust, cup saucer to go latte con panna dark foam aged, strong, sit, bar , flavour, that instant, to go decaffeinated coffee irish aroma. Fair trade single shot organic extraction, cup crema cortado filter single shot cinnamon milk bar , crema, in, est, cup, variety, mug white, cortado cup extra , mazagran sweet crema coffee iced lungo arabica. Spoon whipped, turkish irish extraction iced, extra  so whipped lungo cup caffeine aromatic, bar  black qui strong, shop acerbic dark, ristretto, white, as frappuccino, filter instant qui macchiato black, medium grounds coffee and french press bar  skinny.
<br /><br />
Medium mocha, affogato trifecta body bar  doppio as shop pumpkin spice con panna at flavour foam, milk, chicory, macchiato, dark, that carajillo foam iced milk ristretto et trifecta percolator coffee. Eu coffee froth extra , black robusta chicory white robusta mocha coffee affogato id kopi-luwak froth and seasonal viennese chicory. Coffee seasonal froth extraction, coffee crema grounds cup mug blue mountain, single origin café au lait, americano, wings aroma single origin a redeye, whipped, breve, siphon roast cinnamon arabica body extraction bar  turkish grounds. Robust, galão, crema con panna steamed, macchiato, extraction, crema mocha, so that java roast ristretto barista crema, americano saucer, cappuccino latte instant robust, acerbic grinder java as robusta. Aromatic irish cup, aged turkish a half and half, percolator, café au lait eu breve ristretto et iced flavour in strong, saucer, trifecta frappuccino beans dark id that percolator. Est single shot that black breve, flavour caffeine eu, shop as dark whipped, white affogato cup, single shot, grounds, con panna extra , redeye, fair trade shop espresso white single origin skinny cup coffee. Coffee siphon whipped sweet white, dark, macchiato, cup bar  acerbic at, roast, that extraction carajillo a instant coffee filter fair trade siphon flavour filter robust, milk redeye, half and half qui extraction arabica doppio grounds coffee. Cultivar turkish cup irish ut turkish, ristretto grounds cultivar, plunger pot doppio, java rich, crema, chicory medium, so, black, percolator siphon black, foam acerbic turkish robust roast single shot grinder aromatic, cup filter crema latte extra. Flavour aged, froth, extraction, trifecta instant cup, aftertaste ut carajillo, macchiato as extraction percolator, aftertaste spoon instant, blue mountain, kopi-luwak instant strong, percolator whipped brewed so chicory froth and espresso. Ut to go, dripper, americano to go mug single origin aftertaste single shot caffeine single shot single origin cream in, seasonal, shop aroma, redeye steamed, plunger pot, coffee, beans ut cup ristretto cultivar single shot. Organic café au lait beans at aromatic french press beans steamed, redeye aroma, mazagran variety saucer, cappuccino est, plunger pot barista caffeine viennese single shot whipped mug frappuccino roast rich kopi-luwak chicory, at macchiato filter variety mocha. Steamed, wings rich in foam that mug whipped espresso roast brewed, flavour doppio a ut acerbic, lungo, arabica french press id iced chicory. Organic, coffee froth single origin, ut robust filter beans mug, cream crema sweet black mocha, siphon black grounds caffeine galão.',
                'image_path' => 'https://s.yimg.com/ny/api/res/1.2/s0Be0cSra.czBAjMfISN1w--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MA--/https://media.zenfs.com/en-US/best_life_342/4fd6b8650dedea8e851bcf67f7c6b703',
                'author_name' => 'Albert Einstein',
                'slug' => 'anyone-who-has-never-made-a-mistake',
            ),
            4 => 
            array (
                'id' => 81,
                'created_at' => '2022-10-30 02:33:59',
                'updated_at' => '2022-10-30 12:53:01',
                'title' => 'Figuring things out',
                'body' => 'This happened several times. After listening to my brain though, I really learned a lot.',
                'image_path' => 'https://www.thecoderpedia.com/wp-content/uploads/2020/06/Programming-Memes-Programmer-while-sleeping.jpg',
                'author_name' => 'Anonymous',
                'slug' => 'figuring-things-out',
            ),
        ));
        
        
    }
}