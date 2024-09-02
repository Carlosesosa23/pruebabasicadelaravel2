<?php

use Illuminate\Database\Migrations\Migration as BaseMigration;
use Illuminate\Database\Schema\Blueprint as BaseBlueprint;
use Illuminate\Support\Facades\Schema as BaseSchema;

class CreateItemsTable extends BaseMigration
{
    /*
     * @return void
     */
    public function up()
    {
        BaseSchema::create('items', function (BaseBlueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps(); 
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        BaseSchema::dropIfExists('items');
    }
}
