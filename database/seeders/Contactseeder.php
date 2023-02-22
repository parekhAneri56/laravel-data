<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

//Facades is a default service providers for create an object of database

class Contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name'=>'Aneri parikh',
            'email'=>'parekhaneri56@gmail.com',
            'mobile'=>8780387120,
            'subject'=>'contact data',
            'message'=>'hi contacts',
            'created_at'=>"2023-02-07",
            'updated_at'=>"2023-02-07"
        ]);
    }
}
