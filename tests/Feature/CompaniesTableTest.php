<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class CompaniesTableTest extends TestCase
{
    /**
     * Confirm that the `companies` table exists.
     *
     * @return void
     */
    public function testTableExists() : void
    {
        $this->assertTrue(Schema::hasTable('companies'));
    }

    /**
     * Confirm that the `id` field is present in the `companies` table
     *
     * @return void
    */
    public function testIdColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('companies', 'id'));
    }

    /**
     * Confirm that the `name` field is present in the `companies` table
     *
     * @return void
     */
    public function testNameColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('companies', 'name'));
    }

    /**
     * Confirm that the `email` field is present in the `companies` table
     *
     * @return void
     */
    public function testEmailColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('companies', 'email'));
    }

    /**
     * Confirm that the `logo_path` field is present in the `companies` table
     *
     * @return void
     */
    public function testLogoColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('companies', 'logo_path'));
    }

    /**
     * Confirm that the `website_url` field is present in the `companies` table
     *
     * @return void
     */
    public function testWebsiteURLColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('companies', 'website_url'));
    }
}
