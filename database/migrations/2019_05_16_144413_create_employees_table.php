<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Create the `employees` table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');

            /** `company_id` as a foreign key, cascade on delete - don't want orphaned employees */
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');

            $table->string('email');
            $table->string('phone');
        });
    }

    /**
     * Destroy the `employees` table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
