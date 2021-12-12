<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // - id -> primary key, big integer -> id dari article
		// - title -> varchar(200) -> judul dari article
		// - content -> text -> isi dari article
		// - image -> text -> alamat gambar article
		// - created_at -> datetime -> tanggal dibuat article, biasanya auto diisi oleh sistem
		// - updated_at -> datetime -> tanggal record di update, biasanya auto diisi oleh sistem

        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('content');
            $table->text('image');
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
        Schema::dropIfExists('article');
    }
}
