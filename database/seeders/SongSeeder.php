<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Song::create([
        //     "artistname" => "Burnaboy",
        //     "title" => "we like to party",
        //     "pic" => "https://dancingastronaut.com/wp-content/uploads/2020/07/Burna-Boy-Parallax-e1593785681933.jpg",
        //     "song" => "https://www.youtube.com/watch?v=t7tc1o43soM"

        // ]);

        // Song::create([
        //     "artistname" => "Fireboy",
        //     "title" => "Sing",
        //     "pic" => "https://dazedimg-dazedgroup.netdna-ssl.com/480/azure/dazed-prod/1280/5/1285027.JPG",
        //     "song" => "https://www.youtube.com/watch?v=fE3ePS8Umgo"
        // ]);
        // Song::create([
        //     "artistname" => "Davido",
        //     "title" => "Fem",
        //     "pic" => "https://tooxclusive.com/wp-content/uploads/2020/09/davido-fem-artwork-1.jpg",
        //     "song" => "https://www.youtube.com/watch?v=lta5go9P-go"
        // ]);
        // Song::create([
        //     "artistname" => "Omah Lay",
        //     "title" => "Bad influence",
        //     "pic" => "https://i.scdn.co/image/ab67616d0000b273195883f7b2aed28021abf15e",
        //     "song" => "https://www.youtube.com/watch?v=2CSZKpQ0J5s"
        // ]);
        Song::create([
            "artistname" => "Omah Lay",
            "title" => "Damn",
            "pic" => "https://i0.wp.com/media.ghgossip.com/wp-content/uploads/2020/07/07043006/Omah-Lay-%E2%80%93-Damn.jpg?fit=1080%2C1080&ssl=1",
            "song" => "https://www.youtube.com/watch?v=EEw6tQV98XE"
        ]);
        Song::create([
            "artistname" => "Rema",
            "title" => "Bad Commando",
            "pic" => "https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2019%2F10%2Frema-bad-commando-mixtape-ep-release-0.jpg?w=960&cbr=1&q=90&fit=max",
            "song" => "https://www.youtube.com/watch?v=FhhuOw_ypy0"
        ]);
    }
}
