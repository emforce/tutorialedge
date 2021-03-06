<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleNew extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('articles2', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('body');
			$table->timestamps();
            $table->timestamp('published_at');
            $table->text('excerpt');
            $table->string('slug');
            $table->string('cat_id');
            $table->string('image_url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
