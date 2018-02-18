<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('empolyees')){
        Schema::create('employees', function (Blueprint $table) {


       $table->engine='InnoDB';
       $table->increments('id');
       $table->string('name',100);
       $table->unsignedTinyInteger('age',false,3);  
       $table->decimal('salary',10,2);
       $table->string('hobbies',225);
       $table->timestamps();

           
    
        });
    }
  }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');


    }
}
