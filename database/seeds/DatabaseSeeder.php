<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Readintype;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        for ($i=0;$i<500;$i++){
            $user = factory(App\User::class)->make();
            $user->save();
        }
        for ($i=0;$i<5000;$i++){
            $reading = factory(App\Reading::class)->make();
            $reading->save();
        }
        $readingtype = new App\Readingtype();
        $readingtype->type = 'before breakfast';
        $readingtype->id= 1;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'after breakfast';
        $readingtype->id= 2;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'before lunch';
        $readingtype->id= 3;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'after lunch';
        $readingtype->id= 4;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'before dinner';
        $readingtype->id= 5;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'after dinner';
        $readingtype->id= 6;
        $readingtype->save();
        $readingtype = new App\Readingtype();
        $readingtype->type = 'night';
        $readingtype->id= 7;
        $readingtype->save();

        Model::reguard();
    }
}
