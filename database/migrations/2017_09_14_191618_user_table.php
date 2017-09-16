<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User; 

class UserTable extends Migration
{
    public function up()
    {
        Schema::create('users', function(Blueprint $table) { 
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
        for($i = 1; $i < 5; ++$i)
        {
            DB::table('users')->insert([
                'name' => 'allafi' . $i,
                'email' => 'allafi' . $i . '@ecole.sn',
                'password' => bcrypt('password' . $i),
                'admin' => rand(0, 1)
            ]);
        }
    }

    public function down()
    {
        Schema::drop('users');
    }
}
