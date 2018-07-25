<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->text('address');
            $table->string('email');
            $table->integer('mobile');
            $table->date('dob');
            $table->string('nic_no');
            $table->string('cv_upload');
            $table->integer('position');
            $table->string('experience');
            $table->string('last_tittle');
            $table->string('last_company');
            $table->integer('last_salary');
            $table->text('notes');
            $table->integer('account_no');
            $table->string('account_name');
            $table->string('bank');
            $table->string('branch');
            $table->char('status',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
