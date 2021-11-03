<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string("paper_name");
            $table->string("paper_type");
            $table->string("paper_sourcetitle");
            $table->string("paper_url");
            $table->string("paper_yearpub");
            $table->string("paper_volume");
            $table->string("paper_issue");
            $table->string("paper_citation");
            $table->string("paper_page");
            $table->string("paper_doi");
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
        Schema::dropIfExists('papers');
    }
}
