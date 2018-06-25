<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateProjectsTable extends Migration
    {
        public function up()
        {
            Schema::create('projects', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->unsignedInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('projects');
        }
    }