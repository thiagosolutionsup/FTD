<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**|Criando Tabela de Empregados |**/
        Schema::create('tb_employees', function (Blueprint $table) {
            $table->increments('emp_no');
            $table->date('birth_date');
            $table->string('first_name',14);
            $table->string('last_name', 16);
            $table->enum('gender', ['M','F']);
            $table->date('hire_date');
            $table->string('email');
            $table->integer('created_by')->default(0);
            $table->timestamp('created_on');
            $table->integer('modified_by')->default(0);
            $table->timestamp('modified_on');
            $table->integer('deleted_by')->default(0);
            $table->timestamp('deleted_on');
            $table->enum('deleted',['0','1'])->default('0');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_employees');
    }
}
