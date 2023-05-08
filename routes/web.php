<?php

use App\Http\Controllers\Asistencia_conferenciasController;
use App\Http\Controllers\Carreras_favoritasController;
use App\Http\Controllers\CienciasController;
use App\Http\Controllers\GraficasController;
use App\Http\Controllers\PerfilController;
use App\Mail\EmailConfClaseMailable;
use App\Models\Carreras_favoritas;
use Illuminate\Support\Facades\Mail;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaisesController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\UniversidadesController;
use App\Http\Controllers\Universidades_imagenesController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\Carreras_imagenesController;
use App\Http\Controllers\Carreras_universidadesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\ConferenciasController;
use App\Http\Controllers\Conferencias_gruposController;
use App\Http\Controllers\MuestraConferenciasController;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\TecnoController;

use App\Http\Controllers\PdfController;




use Resource\View\template;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta para ajax
// Route::post('/tecnologias', [Carreras_favoritas::class, 'store'])->name('favorito');
// Route::post('/tecnologias', [Carreras_favoritas::class, 'store'])->name('favorito');
Route::middleware('auth')->group(function () {

    //Ruta para pdfs

    Route::get('/pdf', [PdfController::class, 'generarPdfUniCar'])->name('pdf.generarUniCar');
    Route::get('/pdf1', [PdfController::class, 'generarPdfCarFav'])->name('pdf.generarCarFav');
    Route::get('/pdf2', [PdfController::class, 'generarPdfAsiCon'])->name('pdf.generarAsiCon');

    //Ruta para graficas

    Route::get('/graficas/carreras2', [GraficasController::class, 'carreras'])->name('graficas-carreras');
    Route::get('/graficas/carreras', [GraficasController::class, 'carrerasVista'])->name('graf-carreras');

    Route::get('/graficas/conferencias2', [GraficasController::class, 'conferencias'])->name('graficas-conferencias');
    Route::get('/graficas/conferencias', [GraficasController::class, 'conferenciasVista'])->name('graf-conferencias');

    //Ruta para perfil

    Route::get('/perfil/datos', [PerfilController::class, 'datos'])->name('datos-user');
    Route::patch('/perfil', [PerfilController::class, 'actualiza'])->name('actualiza-user');
    Route::get('/perfil/conferencias', [PerfilController::class, 'conferencias'])->name('conferencias-user');
    Route::get('/perfil/carreras-favoritas', [PerfilController::class, 'carreras'])->name('favoritas-user');
    Route::post('/perfil/carreras-favoritas', [PerfilController::class, 'destroy'])->name('elimina-carrera');

    Route::get('/perfil', function () {
        return view('Perfil.perfil');
    })->name('perfil');

    //Ruta ajax para confirmar asistencia
    Route::post('/conferencias1/asistencia', [Asistencia_conferenciasController::class, 'agrega'])->name('confirma-asistencia');

    //Rutas de tecnologias e ingenierias
    Route::get('/tecnologias', [TecnoController::class, 'index'])->name('despliega');
    Route::post('/tecnologias', [TecnoController::class, 'selecciona'])->name('selecciona');

    //Rutas de tecnologias e ingenierias
    Route::get('/ciencias', [CienciasController::class, 'index'])->name('despliega1');
    Route::post('/ciencias', [CienciasController::class, 'selecciona'])->name('selecciona1');

    Route::post('/algo', [Carreras_favoritasController::class, 'store'])->name('favorito');
    Route::post('/algo-delete', [Carreras_favoritasController::class, 'destroy'])->name('favorito-quitar');

    Route::resource('registro', RegistroController::class);

    Route::resource('conferencias1', MuestraConferenciasController::class);

    Route::resource('paises', PaisesController::class);

    Route::resource('entidades', EntidadesController::class);

    Route::resource('municipios', MunicipiosController::class);

    Route::resource('universidades', UniversidadesController::class);

    Route::resource('universidades_imagenes', Universidades_imagenesController::class);

    Route::resource('carreras', CarrerasController::class);

    Route::resource('carreras_imagenes', Carreras_imagenesController::class);

    Route::resource('carreras_universidades', Carreras_universidadesController::class);

    Route::resource('roles', RolesController::class);

    Route::resource('users', UsersController::class);

    Route::resource('grupos', GruposController::class);

    Route::resource('conferencias', ConferenciasController::class);

    Route::resource('conferencias_grupos', Conferencias_gruposController::class);

});


//jniuhb
// //Ruta para pdfs

// Route::get('/pdf', [PdfController::class, 'generarPdfUniCar'])->name('pdf.generarUniCar');
// Route::get('/pdf1', [PdfController::class, 'generarPdfCarFav'])->name('pdf.generarCarFav');
// Route::get('/pdf2', [PdfController::class, 'generarPdfAsiCon'])->name('pdf.generarAsiCon');

// //Ruta para graficas

// Route::get('/graficas/carreras2', [GraficasController::class, 'carreras'])->name('graficas-carreras');
// Route::get('/graficas/carreras', [GraficasController::class, 'carrerasVista'])->name('graf-carreras');

// Route::get('/graficas/conferencias2', [GraficasController::class, 'conferencias'])->name('graficas-conferencias');
// Route::get('/graficas/conferencias', [GraficasController::class, 'conferenciasVista'])->name('graf-conferencias');

// //Ruta para perfil
// //perro._.

// Route::get('/perfil/datos', [PerfilController::class, 'datos'])->name('datos-user');
// Route::patch('/perfil', [PerfilController::class, 'actualiza'])->name('actualiza-user');
// Route::get('/perfil/conferencias', [PerfilController::class, 'conferencias'])->name('conferencias-user');
// Route::get('/perfil/carreras-favoritas', [PerfilController::class, 'carreras'])->name('favoritas-user');
// Route::post('/perfil/carreras-favoritas', [PerfilController::class, 'destroy'])->name('elimina-carrera');

// Route::get('/perfil', function () {
//     return view('Perfil.perfil');
// })->name('perfil');


// //Ruta ajax para confirmar asistencia
// Route::post('/conferencias1/asistencia', [Asistencia_conferenciasController::class, 'agrega'])->name('confirma-asistencia');


// //Rutas de tecnologias e ingenierias
// Route::get('/tecnologias', [TecnoController::class, 'index'])->middleware('auth')->name('despliega');
// Route::post('/tecnologias', [TecnoController::class, 'selecciona'])->name('selecciona');

// //Rutas de tecnologias e ingenierias
// Route::get('/ciencias', [CienciasController::class, 'index'])->middleware('auth')->name('despliega1');
// Route::post('/ciencias', [CienciasController::class, 'selecciona'])->name('selecciona1');

// Route::post('/algo', [Carreras_favoritasController::class, 'store'])->name('favorito');
// Route::post('/algo-delete', [Carreras_favoritasController::class, 'destroy'])->name('favorito-quitar');


// // Rutas de login y registro
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('inicio-sesion');
Route::post('/', [AuthController::class, 'logout'])->name('cierra-sesion');

Route::get('/', function () {
    return view('template.index');
});

Route::get('/cruds', function () {
    return view('cruds');
})->middleware('auth')->name('mundo');

// Route::get('/index', function () {
//     return view('template.index');
// });

Route::get('index', function () {
    return view('template.index');
});

// Route::get('tecnologias', function () {
//     return view('template.tecnologias');
// })->name('tecnologias');

Route::get('login', function () {
    return view('login');
})->name('login');

// // Route::get('conferencias1', function () {
// //     return view('template.conferencias1');
// // });

// Route::resource('registro', RegistroController::class);

// Route::resource('conferencias1', MuestraConferenciasController::class);

// Route::resource('paises', PaisesController::class);

// Route::resource('entidades', EntidadesController::class);

// Route::resource('municipios', MunicipiosController::class);

// Route::resource('universidades', UniversidadesController::class);

// Route::resource('universidades_imagenes', Universidades_imagenesController::class);

// Route::resource('carreras', CarrerasController::class);

// Route::resource('carreras_imagenes', Carreras_imagenesController::class);

// Route::resource('carreras_universidades', Carreras_universidadesController::class);

// Route::resource('roles', RolesController::class);

// Route::resource('users', UsersController::class);

// Route::resource('grupos', GruposController::class);

// Route::resource('conferencias', ConferenciasController::class);

// Route::resource('conferencias_grupos', Conferencias_gruposController::class);