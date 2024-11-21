use App\Http\Controllers\FileController;

Route::get('upload', [FileController::class, 'showUploadForm'])->name('file.form');
Route::post('upload', [FileController::class, 'uploadFile'])->name('file.upload');
Route::get('files', [FileController::class, 'listFiles'])->name('file.list');
