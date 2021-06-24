<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('employment_type');
            $table->string('position_level');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->longtext('description');
            $table->longText('responsibilities');
            $table->longText('qualifications');
            $table->foreignId('department_id');
            $table->boolean('disabled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_jobs');
    }
}
