<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('imgpath');
			$table->string('title');
			$table->text('description');
			$table->float('price');
			$table->text('full_description');
			$table->text('requirments');
			$table->string('instructor_name');
			$table->string('instructor_title');
			$table->text('instructor_description');
			

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
