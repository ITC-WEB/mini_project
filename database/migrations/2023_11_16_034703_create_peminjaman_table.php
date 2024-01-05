 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('peminjaman', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('mobil_id');
                $table->unsignedBigInteger('sopir_id')->nullable();
                $table->integer('biaya');
                $table->string('tanggal_mulai');
                $table->string('tanggal_selesai');
                $table->enum('status', ['sedangdisewa', 'belumbayar', 'selesai', 'terlambat', 'tidakvalid'])->nullable()->default('belumbayar');
                $table->unsignedBigInteger('bukti_id')->nullable();
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade');
                $table->foreign('sopir_id')->references('id')->on('sopir')->onDelete('cascade');
                $table->foreign('bukti_id')->references('id')->on('bukti_transfer')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('peminjaman');
        }
    };
