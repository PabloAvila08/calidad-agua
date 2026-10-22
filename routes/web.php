<?php

use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');
@@ -16,6 +17,8 @@
        return view('info-sistema');
    });

    Route::resource('reporte', ReporteController::class);

});

require __DIR__.'/settings.php';