<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * NOTES: 
     * - To create a migration: php artisan make:migration create_nameOfTable_table
     * - To migrate all the migrations into the db: php artisan migrate
     * - To rollback the last migration: php artisan migrate:rollback
     * - Status: php artisan migrate:status
     * - To start ALL OVER AGAIN: php artisan migrate:fresh
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('posts');
    }
}
