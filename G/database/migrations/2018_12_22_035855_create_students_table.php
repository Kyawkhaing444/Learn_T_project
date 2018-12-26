<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_no')->default("");
            $table->string('name')->default("");
            $table->string('password');
            $table->string('email')->default("");
            $table->string('phone_number')->default("");
            $table->string('address')->default("");
            $table->string('specification')->default("");
            $table->string('photoURL')->default("");
            $table->string('isAdmin')->default("NO");
            $table->string('coin')->default("");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
