<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class EmployeesTableTest extends TestCase
{
    /**
     * Confirm that the `employees` table exists.
     *
     * @return void
     */
    public function testTableExists() : void
    {
        $this->assertTrue(Schema::hasTable('employees'));
    }

    /**
     * Confirm that the `id` field is present in the `employees` table
     *
     * @return void
     */
    public function testIdColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'id'));
    }

    /**
     * Confirm that the `first_name` field is present in the `employees` table
     *
     * @return void
     */
    public function testFirstNameColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'first_name'));
    }

    /**
     * Confirm that the `last_name` field is present in the `employees` table
     *
     * @return void
     */
    public function testLastNameColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'last_name'));
    }

    /**
     * Confirm that the `company_id` field is present in the `employees` table
     *
     * @return void
     */
    public function testCompanyIdColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'company_id'));
    }

    /**
     * Confirm that the `email` field is present in the `companies` table
     *
     * @return void
     */
    public function testEmailColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'email'));
    }

    /**
     * Confirm that the `phone` field is present in the `employees` table
     *
     * @return void
     */
    public function testPhoneColumnIsPresent() : void
    {
        $this->assertTrue(Schema::hasColumn('employees', 'phone'));
    }
}
