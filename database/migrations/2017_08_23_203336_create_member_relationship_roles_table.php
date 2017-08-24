<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberRelationshipRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_relationship_roles', function (Blueprint $table) {
            $table->uuid('role_id');
            $table->enum('role', ['Sibling', 'Son', 'Mother', 'Father', 'Daughter', 'Sister', 'Brother']);
            $table->string('code')->index();
            $table->text('description');
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
        Schema::dropIfExists('member_relationship_roles');
    }
}
