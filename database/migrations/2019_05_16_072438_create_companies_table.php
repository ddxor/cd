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
            $table->string('name');
            $table->string('email')->nullable(true);
            $table->string('logo_path')->nullable(true);
            $table->string('website_url')->nullable(true);
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
