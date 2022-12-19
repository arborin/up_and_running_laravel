<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};


/**
 * INTEGER
 * integer, tinyInteger, smallInteger, mediumInteger, bigInteger
 *
 * STRING
 * string(colname, length) // varchar field
 *
 * BOOLEAN
 * boolean(colname) // tinyint(1)
 *
 * CHAR
 * char(colname, length) // char column
 *
 * DATETIME
 * datetime(colname) // datetime column
 *
 * DECIMAL
 * decimal(colname, precision, scale)
 *
 * DOUBLE
 * double(colname, total_digits, digits_after_decimal)
 *
 * ENUM
 * enum(colname, [option1, option2])
 *
 * FLOAT
 * float(colname, precision, scale)
 *
 * JSON
 * json(colname)
 *
 * TEXT
 * text(colname)
 *
 * TIME
 * time(colname)
 *
 * TIMESTAMP
 * timestamp(colname)
 *
 * UUID
 * uuid(colname) // char(36) column
 *
 * INCREMENT
 * increment/bigIncrement // primary integer/biginteger id key
 *
 * TIMESTAMPS
 * timestamp() // created_at updated_at
 *
 * REMEMBER
 * rememberToken() // varchar(100) for remember me tokens
 *
 * SOFTDELETE
 * softDelete() // deleted_at timestamp for use with soft deletes
 *
 * MORPHS
 * morphs(colname) //
 *
 * =========================================================================================
 * nullable()
 * default('default content')
 * unsigned -
 * first - place first column
 * after(colname) - place
 * unique()
 * primary()
 * index()
 *
 * ===========================================================================================
 *
 * Schema::dropIfExists('contacts')
 *
 * $table->string('name', 100)->change(); // change column
 *
 *
 *
 *
 *
 */
