<?php

use Illuminate\Database\Seeder;
use App\Crud;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crud::create([
            'name'=>'keerthi',
            'mark1'=>'90',
            'mark2'=>'98',
            'mark3'=>'88',
        ]);
    
    }
}
