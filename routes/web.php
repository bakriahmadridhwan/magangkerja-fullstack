<?php

use App\Http\Controllers\AbController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlasanController;
use App\Http\Controllers\AllAchController;
use App\Http\Controllers\AllPeController;
use App\Http\Controllers\AllTestimoniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\EvController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\PeController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecomendedController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SoftController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TachievementController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\VisiController;
use App\Models\Category;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Status;
use App\Models\Tachievement;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index'])->name('index')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// sample
Route::resource('/sample', SampleController::class);

// route semua landing
Route::resource('/events', EvController::class);
Route::get('/search', [EvController::class, 'index'])->name('index');


Route::get('/cari', function () {
    $title = 'Event | Semua Kategori Event';

    $events = Event::latest();

    if (request('cari-kategori-event')) {
        $events->where('judul', 'like', '%' . request('cari-kategori-event') . '%');
    }

    return view('landing.event.category', [
        'footers' => Footer::where('id', 1)->get(),
        'events' => $events->get(),
        'title' => $title,
    ]);
});

// ajax
Route::get('/action', function (Request $request, Event $event) {

    $eventsajax = Event::latest()->get();
    $query = $request->get('query');
    if ($request->ajax()) {
        $eventsajax->where('judul', 'like', '%' . $query . '%');
    }
});



Route::get('/categories', function (Category $category, Event $event) {
    return view('landing.event.categoryMod', [
        'title' => 'Event | Kategori Event',
        'events' => $category->events,
        'allevents' => Event::latest()->get(),
        'category' => $category->category,
        'event' => $event,
        'footers' => Footer::where('id', 1)->get(),
        'categories' => Category::latest()->get(),
        'statuses' => Status::latest()->get(),

    ]);
});


Route::get('/categories/{category:category}', function (Category $category, Event $event) {
    return view('landing.event.categoryevent', [
        'title' => 'Kategori' . ' ' . $category->category,
        'events' => $category->events,
        'category' => $category->category,
        'event' => $event,
        'footers' => Footer::where('id', 1)->get(),
    ]);
});

Route::get('/statuses/{status:status}', function (Status $status, Event $event) {
    return view('landing.event.status', [
        'title' => $status->status,
        'events' => $status->events,
        'status' => $status->status,
        'event' => $event,
        'footers' => Footer::where('id', 1)->get(),
    ]);
});

Route::resource('/abouts', AbController::class);
Route::resource('/achievements', AchController::class);
Route::resource('/allachievements', AllAchController::class);
Route::resource('/pesertas', PeController::class);
Route::resource('/allpesertas', AllPeController::class);
Route::resource('/alltestimonis', AllTestimoniController::class);

Route::middleware('auth')->group(function () {
    // Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

    // ADMIN START

    // resource admin
    Route::resource('/admin', AdminController::class)->names([
        'index' => 'admin',
    ]);

    // ADMIN END

    // HOME START

    // resource hero
    Route::resource('/dashboard/heroes', HeroController::class)->names([
        'index' => 'hero',
    ]);

    // Route::get('/back', function () {
    //     return redirect()->route('home');
    // });

    // resource counter
    Route::resource('/dashboard/counters', CounterController::class)->names([
        'index' => 'counter',
    ]);

    // resource testimoni
    Route::resource('/dashboard/testimonis', TestimoniController::class)->names([
        'index' => 'testimoni',
    ]);

    // resource contact
    Route::resource('/dashboard/contacts', ContactController::class)->names([
        'index' => 'contact',
    ]);

    // HOME END

    // ABOUT START

    // resource intro
    Route::resource('/dashboard/intros', IntroController::class)->names([
        'index' => 'intro',
    ]);

    // resource visimisi
    Route::resource('/dashboard/visis', VisiController::class)->names([
        'index' => 'visi',
    ]);

    // resource alasan
    Route::resource('/dashboard/alasans', AlasanController::class)->names([
        'index' => 'alasan',
    ]);

    // resource team
    Route::resource('/dashboard/teams', TeamController::class)->names([
        'index' => 'team',
    ]);

    // resource question
    Route::resource('/dashboard/questions', QuestionController::class)->names([
        'index' => 'question',
    ]);

    Route::get('/dashboard/questions/{id}/restore', [QuestionController::class, 'restore'])->name('restore');
    Route::resource('/dashboard/softs', SoftController::class)->names([
        'index' => 'soft',
    ]);

    // ABOUT END

    // EVENT START

    // resource event
    Route::resource('/dashboard/events', EventController::class)->names([
        'index' => 'event',
    ]);

    // resource mentor
    Route::resource('/dashboard/mentors', MentorController::class)->names([
        'index' => 'mentor',
    ]);

    // resource recomended
    Route::resource('/dashboard/recomendeds', RecomendedController::class)->names([
        'index' => 'recomended',
    ]);

    // resource status
    Route::resource('/dashboard/statuses', StatusController::class)->names([
        'index' => 'status',
    ]);

    // resource category
    Route::resource('/dashboard/categories', CategoryController::class)->names([
        'index' => 'category',
    ]);

    // EVENT END

    // ACHIEVEMENT START

    // resource achievement
    Route::resource('/dashboard/achievements', AchievementController::class)->names([
        'index' => 'achievement',
    ]);

    // resource tachievement
    Route::resource('/dashboard/tachievements', TachievementController::class)->names([
        'index' => 'tachievement',
    ]);

    // resource peserta
    Route::resource('/dashboard/pesertas', PesertaController::class)->names([
        'index' => 'peserta',
    ]);

    // ACHIEVEMENT END


    // HEADER FOOTER START

    // resource header
    Route::resource('/dashboard/headers', HeaderController::class)->names([
        'index' => 'header',
    ]);

    // resource footer
    Route::resource('/dashboard/footers', FooterController::class)->names([
        'index' => 'footer',
    ]);

    // HEADER FOOTER END

    Route::get('/about', [AboutController::class, 'index'])->name('index');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});




Route::get('phpmyinfo', function () {
    phpinfo();
})->name('phpmyinfo');
