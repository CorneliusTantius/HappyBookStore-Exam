<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => 'Action'],
            ['category_name' => 'Education'],
            ['category_name' => 'Fantasy'],
            ['category_name' => 'Romance'],
            ['category_name' => 'Thriller']
        ]);
        DB::table('books')->insert([
            ['category_id'=>1, "title"=>"Demonic Emperor / Magic Emperor"],
            ['category_id'=>1, "title"=>"Limit Breaker"],
            ['category_id'=>1, "title"=>"Martial God Asura"],
            ['category_id'=>1, "title"=>"My Path to Killing Gods in Another World"],
            ['category_id'=>1, "title"=>"Release That Witch"],

            ['category_id'=>3, "title"=>"Hardcore Levelling Warrior"],
            ['category_id'=>3, "title"=>"Hero Has Returned"],
            ['category_id'=>3, "title"=>"Max Level Returner"],
            ['category_id'=>3, "title"=>"Nano Machine"],
            ['category_id'=>3, "title"=>"Omniscient Reader's Viewpoint"],
            ['category_id'=>3, "title"=>"Overgeared"],
            ['category_id'=>3, "title"=>"Reincarnation of the Suicidal Battle God"],
            ['category_id'=>3, "title"=>"Solo Levelling"],
            ['category_id'=>3, "title"=>"SSS-Class Suicide Hunter"],
            ['category_id'=>3, "title"=>"The Last Human"],
            ['category_id'=>3, "title"=>"The Legend of Northern Blade"],
            ['category_id'=>3, "title"=>"The Second Coming of Gluttony"],
            ['category_id'=>3, "title"=>"Tower Of God"],

            ['category_id'=>4, "title"=>"Mister Wolf's Miss Rabbit"],
            ['category_id'=>4, "title"=>"My Office Noona's Story"],
            ['category_id'=>4, "title"=>"She May Not Be Cute"],

            ['category_id'=>5, "title"=>"Bastard"],
            ['category_id'=>5, "title"=>"Death Note"],
            ['category_id'=>5, "title"=>"Leviathan"],
            ['category_id'=>5, "title"=>"Platinum End"],
            ['category_id'=>5, "title"=>"Sweet Home"],
        ]);
        DB::table('details')->insert([
            ['book_id'=>1, 'author'=>"Ye Xiao", 'publisher'=>"Wuer Manhua", 'year'=>2019, 
                'description'=>"Zhuo Yifan was a Magic Emperor or could be called a Demon Emperor because he had an ancient Emperor’s book called the Book of the Nine Secrets, he was targeted by all the experts and he was even betrayed and killed by his student. Then his soul enters and comes back to life in a family servant boy named Zhuo Fan. Because some demonic magic is holding him back, he must unite the child’s memories and cannot ignore the family and the mistress he serves. How can he lead this descending family back to the pinnacle of this continent!",
                'img_url'=>"https://manhuaplus.com/wp-content/uploads/2020/07/unnamed-193x278.jpg"
            ],
            ['book_id'=>2, 'author'=>"성불예정,미노", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"Due to an unknown error, Kim Kibong was trapped in the Awakening Test for 3000 years. In the real world, 10 years have passed, and it is overrun by monsters and dungeons. The battle now begins for Kim Kibong, who returned with the max level, to restore the world back to the way it was!",
                'img_url'=>"https://www.anime-planet.com/images/manga/covers/thumbs/57767.jpg"
            ],
            ['book_id'=>3, 'author'=>"Pikapi,Shan Liang De Mi Feng", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"Martial God Asura. One night a mysterious and unexplained phenomenon occurs in the nine provinces. Five years later Chu Feng, a regular outer disciple of the Azure Dragon school, awakens one of the mysterious nine lightning beasts. And discovers an egg sealed inside him.",
                'img_url'=>"https://toonily.net/wp-content/uploads/2020/10/55907-193x278.jpg"
            ],
            ['book_id'=>4, 'author'=>"Unknown", 'publisher'=>"Naver", 'year'=>2021, 
                'description'=>"The genius top student played games in an attempt to flirt with girls, but was struck by lightning on a rainy day and transported into the world of the game?! To survive here, he could only rely on himself. Surrounded by monsters and gods, full of dangers, can he still return to his own world and continue chasing girls?!",
                'img_url'=>"https://manhuas.net/wp-content/uploads/2021/08/My-Path-to-Killing-Gods-in-Another-World-manhua-manga--193x278.jpg"
            ],
            ['book_id'=>5, 'author'=>"Er Mu", 'publisher'=>"出品", 'year'=>2021, 
                'description'=>"A male engineer transmigrated into another world, and became a prince. This place strikingly resembles the Middle Ages of Europe, but at the same time, it seems kind of different? Witches truly exists, and they even possess magic powers! Magic powers are productive forces! Save the witches, liberate the productive forces! Open map, fight demons, break conspiracies, climb up the science and technology tree, and open the path of hardcore ‘farming’!",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-Release-That-Witch.jpg?w=225&quality=60"
            ],
            ['book_id'=>6, 'author'=>"Sehoon Kim", 'publisher'=>"Webtoon", 'year'=>2019, 
                'description'=>"Known as Hardcore Leveling Warrior, Ethan is the #1 player of the world's biggest game, Lucid Adventure. But when a mysterious player kills Ethan and forces his character back to level 1, he will do anything to get back on top. New friends and old foes, as well as mysterious forces and his own dark past, will follow him as he does his best to take back what was once his.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-Hardcore-Leveling-Warrior.jpg?w=225&quality=60"
            ],
            ['book_id'=>7, 'author'=>"Fungback,Narak", 'publisher'=>"Naver", 'year'=>2021, 
                'description'=>"Kim Min-soo, a hero who saved another world with the single thought of returning home. He saved the world, but couldn’t save himself, and decides to destroy the world. This story is about the last moments of the heroes, a cold reality with no happy ending.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2021/08/Manhwa-Hero-Has-Returned.jpg?w=225&quality=60"
            ],
            ['book_id'=>8, 'author'=>"Honey (허니)", 'publisher'=>"Naver", 'year'=>2021, 
                'description'=>"A total of 120 million people disappeared from all over the world. [You have successfully completed the final quest, and have been given the reward: ‘Return’.] In 22 years, Yoon Sang-Hyuk, was finally able to beat the most atrocious survival game. The man who became the ‘One Man Army’, and the strongest out of all of the other players, he had finally returned back to reality. And not just that, he came back with a reward that nobody had ever received before. [Masked Monarch, Return] This is the start of the Max Level Returner!",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2020/11/Manhwa-Max-Level-Returner.jpg?w=225&quality=60"
            ],
            ['book_id'=>9, 'author'=>"Jeolmu Hyeon", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"After being held in disdain and having his life put in danger, an orphan from the Demonic Cult, Cheon Yeo-Woon, has an unexpected visit from his descendant from the future who inserts a nano machine into Cheon Yeo-Woon's body, which drastically changes Cheon Yeo-Woon's life after its activation. The story of Cheon Yeo-Woon's journey of bypassing the Demonic Cult and rising to become the best martial artist has just begun.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2020/07/Manhwa-Nano-Machine.jpeg?w=225&quality=60"
            ],
            ['book_id'=>10, 'author'=>"Singshong, UMI", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"Back then, Dokja had no idea. He had no idea his favorite web novel 'Three Ways to Survive the Apocalypse' was going to come to life, and that he would become the only person to know how the world was going to end. He also had no idea he would end up becoming the protagonist of this novel-turned-reality. Now, Dokja will go on a journey to change the course of the story and save humankind once and for all.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2020/05/Komik-Omniscient-Readers-Viewpoint.jpg?w=225&quality=60"
            ],
            ['book_id'=>11, 'author'=>"Park Saenal (Original), Lee Dong-Wook", 'publisher'=>"Kakaopage", 'year'=>2020, 
                'description'=>"Shin Youngwoo has had an unfortunate life and is now stuck carrying bricks on construction sites. He even had to do labor in the VR game, Satisfy! However, luck would soon enter his hapless life. His character, ‘Greed’, would discover the Northern End Cave for a quest, and in that place, he would find ‘Pagma’s Rare Book’ and become a legendary class player…",
                'img_url'=>"https://w3.overgeared.club/wp-content/uploads/2021/04/Overgeared-Manga-333x450.jpg"
            ],
            ['book_id'=>12, 'author'=>"Cheong Dam", 'publisher'=>"Unknown", 'year'=>2021, 
                'description'=>"A time travel action fantasy of the strongest of mankind. “Even if the disgusting gods gave me this chance, an opportunity is still an opportunity. Since they want to end up dead, I will kill them.” The last survivor of mankind, Zephyr. The fight with the demons ended in defeat and the gods gave him a chance to go back 10 years in time. The demons who took everything away from humans and the gods who treated humans as beings for sightseeing. This time, I will tear them to pieces.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2021/08/Manwha-Reincarnation-of-the-Suicidal-Battle-God.png?w=225&quality=60"
            ],
            ['book_id'=>13, 'author'=>"Chu-Gong (Original), Gi So-Ryeong (former), Hyeon-Gun", 'publisher'=>"Kakaopage", 'year'=>2018, 
                'description'=>"In a world where awakened beings called “Hunters” must battle deadly monsters to protect humanity, Sung Jinwoo, nicknamed “the weakest hunter of all mankind,” finds himself in a constant struggle for survival. One day, after a brutal encounter in an overpowered dungeon wipes out his party and threatens to end his life, a mysterious System chooses him as its sole player: Jinwoo has been granted the rare opportunity to level up his abilities, possibly beyond any known limits. Follow Jinwoo’s journey as he takes on ever-stronger enemies, both human and monster, to discover the secrets deep within the dungeons and the ultimate extent of his powers.",
                'img_url'=>"https://upload.wikimedia.org/wikipedia/en/thumb/9/99/Solo_Leveling_Webtoon.png/220px-Solo_Leveling_Webtoon.png"
            ],
            ['book_id'=>14, 'author'=>"Shin Noah, Neida", 'publisher'=>"Kakaopage", 'year'=>2020, 
                'description'=>"In the mysterious, RPG dungeon-like Tower, Confucius Kim lives a mundane existence, envying all the star hunters. One day, his wish for more is granted with a legendary skill to copy others’ abilities… at the cost of his life. Before he can make sense of it, he’s killed by the #1 hunter, the Flame Emperor! But this activates his skill and now he’s copied a new one, the ability to travel back in time upon death. How will Confucius use these skills to outplay the competition and rise to the top? I want an S-Rank skill too! I want it so badly, I could die for it! [You have awakened an S-Rank skill.] [But it only works when you die.] HUH!? WHAT’S THE POINT OF GETTING ONE IF I DIE!?",
                'img_url'=>"https://cdn.novelupdates.com/images/2021/05/SSSClass-Suicide-Hunter.jpg"
            ],
            ['book_id'=>15, 'author'=>"Amazing Works", 'publisher'=>"Unknown", 'year'=>2020, 
                'description'=>"Zuo Tianchen is the last living human in a mutated zombie-infested city. Just when he was sure he had died, he finds his soul returned to just before that ill-fated day ten years ago. He swears he’ll protect the people important to him this time round and reunite with his past lover. Watch his struggles to survive equipped with his memory of the next ten years!",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-The-Last-Human.jpg?w=225&quality=60"
            ],
            ['book_id'=>16, 'author'=>"Woo-Gak (Original Story), Hae-Min", 'publisher'=>"Kakaopage", 'year'=>2019, 
                'description'=>"For decades, the brave warriors of the Northern Heavenly Sect fought to keep the world safe from the evil Silent Night. But when the fourth generation leader is accused of colluding with the enemy, he is forced to disband the sect and commit suicide to protect his son, Moo-Won. With no family and allies left, Moo-Won leads a dreary life under close surveillance... until a surprise attack from the Silent Night gives him a chance to escape to the mountains. There, the young warrior trains to master the fighting techniques of his predecessors, before the mysterious disappearance of a loved one brings him back to the mainland. Follow Moo-Won as he embarks on a journey to avenge his father’s death and take down the villains who threaten to plunge the world into darkness!",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/2020/05/Manhua-Legend-of-the-Northern-Blade.jpg?w=225&quality=60"
            ],
            ['book_id'=>17, 'author'=>" Ro Yu-jin (로유진)", 'publisher'=>"Breather Corporation", 'year'=>2017, 
                'description'=>"He was an addict, a loser, a despicable human being. But, one fleeting dream that may not be a dream at all reawakens his once-lost senses. Possessing a very unique ability, he will use that, and the dream, to forge his path in the world now known as the Lost Paradise.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-The-Second-Coming-of-Gluttony.jpg?w=225&quality=60"
            ],
            ['book_id'=>18, 'author'=>"SIU", 'publisher'=>"Naver", 'year'=>2010, 
                'description'=>"What do you desire? Fortune? Glory? Power? Revenge? Or something that surpasses all others? What ever you desire, 'that is here'. Tower of God. His only friend, Rachel, sought the door to the Tower in order to escape the dark world they lived in. Baam simply got dragged along for the ride. But inside the Tower, everyone must make their own way to the top, and Baam quickly learns that the Tower's inhabitants have a low opinion of irregulars - those who enter the Tower without invitation. Faced with the prospect of a new test on every floor and many, many, MANY intrigues and colliding stories and wills in this alien, magical realm, his determination to reunite with Rachel is the only thing keeping him going",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-Tower-of-God.jpg?w=225&quality=60"
            ],
            ['book_id'=>19, 'author'=>"Unknown", 'publisher'=>"Unknown", 'year'=>2021, 
                'description'=>"For the sake of her brother—who had congenital heart disease—Yun Yao’s stepparents ‘sold’ her off to a wealthy man. Yun Yao appeared to agree to the marriage, and she wanted to get out of it after her brother was sent abroad for treatment. Unwilling to compromise with the arrangement, she decided to walk toward a male brothel, thinking that she would get a divorce sooner if she were no longer a virgin. She accidentally bumped into a good-looking escort and gave away her first time. Initially, she planned for it to be a one-night-stand, yet unexpectedly, the handsome male model was actually the rich director she had never met! When a little rabbit meets the hungry wolf, she will only be…devoured! – The Overbearing President and the Poor Girl",
                'img_url'=>"https://avt.mkklcdnv6temp.com/42/z/24-1632541505.jpg"
            ],
            ['book_id'=>20, 'author'=>"Palmeiro, JANE", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"When Manager Son is sent to a new department, his boring office life takes a sweet turn. There, he meets Manager Ahn, an older colleague whose competence and charming aura leave him in awe. But as Manager Son grows closer to her, he realizes there’s more to her strong, independent front than meets the eye. And soon enough, he begins to understand why office crushes can get complicated.",
                'img_url'=>"https://avt.mkklcdnv6temp.com/15/i/24-1621662444.jpg"
            ],
            ['book_id'=>21, 'author'=>"Zero", 'publisher'=>"Unknown", 'year'=>2019, 
                'description'=>"'I never imagined being with him.' 'I never imagined being with someone other than her' Following the betrayal of her fiance and his flight from the steps of the altar, Anran is not ready to trust love. But two years later, a reversal which she did not expect, that which she considered as her little brother is back ... will he be able to open her closed heart for a long time?",
                'img_url'=>"https://avt.mkklcdnv6temp.com/2/v/18-1583497184.jpg"
            ],
            ['book_id'=>22, 'author'=>"Kim Carnby", 'publisher'=>"Naver", 'year'=>2016, 
                'description'=>"There is nowhere that Seon Jin can find solace. At school, he is ruthlessly bullied due to his unsettlingly quiet nature and weak appearance. However, this is not the source of Jin's insurmountable terror: the thing that he fears more than anything else is his own father. To most, Jin's father is a successful businessman, good samaritan, and doting parent. But that is merely a facade; in truth, he is a deranged serial killer—and Jin is his unwilling accomplice. For years, they have been carrying out this ruse with the police being none the wiser. However, when his father takes an interest in the pretty transfer student Yoon Kyun, Jin must make a decision—be the coward who sends her to the gallows like all the rest, or be the bastard of a son who defies his wicked parent.",
                'img_url'=>"https://avt.mkklcdnv6temp.com/20/j/1-1583464499.jpg"
            ],
            ['book_id'=>23, 'author'=>"Tsugumi Ohba", 'publisher'=>"Shueisha", 'year'=>2003, 
                'description'=>"Light Yagami (Tatsuya Fujiwara) is a normal, undistinguished college student -- that is, until he discovers an odd notebook lying on the ground. He soon discovers that the notebook has magic powers: If someone's name is written on it while the writer imagines that person's face, he or she will die. Intoxicated with his new godlike power, Light kills those he deems unworthy of life. But a mysterious detective known only as L (Ken'ichi Matsuyama) becomes determined to put a stop to his reign.",
                'img_url'=>"https://avt.mkklcdnv6temp.com/43/n/15-1583493223.jpg"
            ],
            ['book_id'=>24, 'author'=>"Lee Gyuntak", 'publisher'=>"Toomics", 'year'=>2018, 
                'description'=>"In the world where the sea level has risen, the water has already covers the continents. In the world where dry land cannot be found anymore, Bota's family lives in a small boat and wanders the ocean and scavenges for food and parts from under water cities. Below the surface lurks sea monsters that hunt for food and that includes people. After a near fatal encounter with the monsters, Bota meets the mysterious Kana.",
                'img_url'=>"https://thumbnail.komiku.id/wp-content/uploads/Komik-Leviathan.jpeg?w=225&quality=60"
            ],
            ['book_id'=>25, 'author'=>"Tsugumi Ohba", 'publisher'=>"Shueisha", 'year'=>2015, 
                'description'=>"The series follows Mirai Kakehashi, a student who attempts suicide but is rescued by his guardian angel, Nasse, who not only has vowed to protect him, but bestows him special powers as he is also one of 13 candidates chosen by different angels to take the role of God, who is to retire in 999 days.",
                'img_url'=>"https://avt.mkklcdnv6temp.com/39/i/1-1583465248.jpg"
            ],
            ['book_id'=>26, 'author'=>"Youngchan Hwang", 'publisher'=>"Naver", 'year'=>2020, 
                'description'=>"After an unexpected family tragedy, a reclusive high school student is forced to leave his home -- only to face something much scarier: a reality where monsters are trying to wipe out humanity. Now he must fight alongside a handful of reluctant heroes to try and save the world before it’s too late. Now a Netflix Original Series.",
                'img_url'=>"https://avt.mkklcdnv6temp.com/15/q/16-1583494034.jpg"
            ]
        ]);
    }
}
