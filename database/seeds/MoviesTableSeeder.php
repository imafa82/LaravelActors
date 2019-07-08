<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->save(1, 'Vieni avanti cretino', 1952);
        $this->save(1, "L'allenatore nel pallone", 1962);
        $this->save(2, 'Un americano a Roma', 1955);
        $this->save(2, 'Il vigile', 1956);
    }

    public function save($actor_id, $title, $year){
        $movie = new Movie();
        $movie->actor_id = $actor_id;
        $movie->title = $title;
        $movie->year = $year;
        $movie->save();
    }
}
