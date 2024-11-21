use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' autoincrementable
            $table->string('path'); // Columna para almacenar la ruta del archivo
            $table->string('type'); // Columna para almacenar el tipo de archivo (por ejemplo: 'image/jpeg')
            $table->binary('image'); // Columna para almacenar la imagen en binario
            $table->binary('image64'); // Columna para almacenar la imagen en base64
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Deshace las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
