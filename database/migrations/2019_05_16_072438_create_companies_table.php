<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Create the `companies` table.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name')->nullable(false);
            $table->string('email');
            $table->string('logo_path');
            $table->string('website_url');
        });
    }

    /**
     * Destroy the `companies` table.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('companies');
    }
}
