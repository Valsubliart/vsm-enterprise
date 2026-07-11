use App\Http\Controllers\Api\UserController;

Route::post('/users', [UserController::class, 'store']);
