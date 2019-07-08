<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->save('Lino', 'Banfi', 1936);
        $this->save('Alberto', 'Sordi', 1920);
        $this->save('Diego', 'Abatantuono', 1955);
    }

    public function save($name, $surname, $year){
        $actor = new Actor();
        $actor->name = $name;
        $actor->surname = $surname;
        $actor->year = $year;
        $actor->save();
    }
}
