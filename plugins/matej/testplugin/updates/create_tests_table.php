<?php namespace Matej\Testplugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('matej_testplugin_tests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matej_testplugin_tests');
    }
}
