use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliah', function (Blueprint $table) {

            $table->id('id_matakuliah');

            $table->string('kode_matakuliah');

            $table->string('nama_matakuliah');

            $table->integer('sks');

            $table->unsignedBigInteger('jurusan_id');

            $table->timestamps();

            // Foreign Key
            $table->foreign('jurusan_id')
                  ->references('jurusan_id')
                  ->on('jurusan')
                  ->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};