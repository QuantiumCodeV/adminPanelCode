<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\IpController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FriendsController;

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

Route::get("/fonts", function () {
    view("fonts");
})->name("fonts");


Route::get("/profileSettings", function () {
    view("profileSettings");
})->name("profileSettings");

Route::get("/fonts", function () {
    view("fonts");
})->name("fonts");

Route::get("/feedback", function () {
    view("feedback");
})->name("feedback");

Route::middleware(['CheckIp'])->group(function () {
    Route::prefix('/admin')->group(function () {

        Route::middleware("CheckAdmin")->group(function () {
            Route::get("/requests", [AdminController::class, "requests"])->name("requests");
            Route::get("/users", [AdminController::class, "users"])->name("users");
            Route::get("/bannedIp", [AdminController::class, "bannedIp"])->name("bannedIp");
            Route::get("/settings", [AdminController::class, "settings"])->name("settings");
        });

        Route::middleware("auth.worker")->get("/codes", [AdminController::class, "codes"])->name("codes");

        Route::get("/login", [AdminController::class, "login"])->name("admin.login");

        Route::get("/signup", [AdminController::class, "signup"])->name("admin.signup");

        Route::prefix('/user')->group(function () {
            Route::post("/login", [WorkerController::class, "login"])->name("user.login");
            Route::get("/logout", [WorkerController::class, "logout"])->name("user.logout");
            Route::post("/status", [WorkerController::class, "status"])->name("user.status");
            Route::post("/delete", [WorkerController::class, "delete"])->name("user.delete");
        });


        Route::prefix('/request')->group(function () {
            Route::post("/create", [RequestController::class, "create"])->name("request.create");
            Route::post("/accept", [RequestController::class, "accept"])->name("request.accept");
            Route::post("/decline", [RequestController::class, "decline"])->name("request.decline");
        });

        Route::prefix('/code')->group(function () {
            Route::post("/create", [CodeController::class, "create"])->name("code.create");
            Route::post("/delete", [CodeController::class, "delete"])->name("code.delete");
            Route::get("/check", [CodeController::class, "check"])->name("api.code.check");
        });

        Route::get("/file/get", [FileController::class, "get"])->name("file.get");

        Route::post("/ip/unlock", [IpController::class, "unlock"])->name("ip.unlock");

        Route::prefix('/settings')->group(function () {
            Route::post("/update", [SettingsController::class, "update"])->name("settings.update");
            Route::post("/upload", [SettingsController::class, "upload"])->name("settings.upload");
        });
    });


    Route::get("storage/uploads/{file}", function ($file) {
        return response()->download(public_path("uploads/" . $file));
    })->name("uploads");
});


Route::get("/", function () {
    return view("index");
})->name("index");

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::get("/inbox", function () {
    return view("inbox");
})->name("inbox");

Route::get("/spaces/520/home", function () {
    return view("createProfile");
})->name("createProfile");

Route::get("/spaces/521/home", function () {
    return view("successCreateProfile");
})->name("successCreateProfile");

Route::middleware("auth")->group(function () {

    Route::get("/spaces/522/home", function () {
        return view("home");
    })->name("home");

    Route::get('/spaces/522/meetings', function () {
        return view("meetings");
    })->name("meetings");

    Route::get('/spaces/522/friends', function () {
        return view("friends",[
            'friends' => FriendsController::getFriends()
        ]);
    })->name("friends");

    Route::get('/spaces/522/analytics', function () {
        return view("analytics");
    })->name("analytics");

    Route::get('/spaces/522/captures', function () {
        return view("captures");
    })->name("captures");

});
Route::prefix("/api")->group(function () {
    Route::prefix('/user')->group(function () {
        Route::post('/register', [UsersController::class, "register"])->name("api.user.register");
        Route::post('/login', [UsersController::class, "login"])->name("api.user.login");
        Route::get('/logout', [UsersController::class, "logout"])->name("api.user.logout");
        Route::post('/upload', [UsersController::class, "upload"])->name("api.user.upload");
        Route::post("/update", [UsersController::class, "update"])->name("api.user.update");
        Route::post("/change_login", [UsersController::class, "change_login"])->name("api.user.change_login");
        Route::post("/change_name", [UsersController::class, "change_name"])->name("api.user.change_name");
        Route::post("/change_subname", [UsersController::class, "change_subname"])->name("api.user.change_subname");
    });
    Route::prefix('/friends')->group(function () {
        Route::post("/add", [FriendsController::class, "add"])->name("api.friends.add");
        Route::post("/remove", [FriendsController::class, "remove"])->name("api.friends.delete");
        Route::post("/block", [FriendsController::class, "block"])->name("api.friends.block");
    });
});


// Папка product-discovery-bible

Route::get('/product-discovery-bible/start-here/introduction', function () {

    return view('product-discovery-bible.start-here.introduction');
});


// Папка integrations

Route::get('/integrations/api', function () {

    return view('integrations.api');
});

Route::get('/integrations/google-meet', function () {

    return view('integrations.google-meet');
});

Route::get('/integrations/intercom', function () {

    return view('integrations.intercom');
});

Route::get('/integrations/slack', function () {

    return view('integrations.slack');
});

Route::get('/integrations/teams', function () {

    return view('integrations.teams');
});

Route::get('/integrations/zapier', function () {

    return view('integrations.zapier');
});

Route::get('/integrations/zoom', function () {

    return view('integrations.zoom');
});


// Папка listenup

Route::get('/listenup', function () {

    return view('listenup');
});


// Другие файлы
Route::prefix("/product")->group(function () {

    Route::get('/integrations', function () {

        return view('product.integrations');
    });

    Route::get('/meeting-recorder', function () {

        return view('product.meeting-recorder');
    });


});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/use-cases/user-interviews', function () {
    return view('use-cases.user-interviews');
});


Route::prefix('/real-saas-design-inspirations-companies')->group(function () {

    Route::get('/airtable', function () {

        return view('airtable');
    });

    Route::get('/attio', function () {

        return view('attio');
    });

    Route::get('/bento', function () {

        return view('bento');
    });

    Route::get('/descript', function () {

        return view('descript');
    });

    Route::get('/framer', function () {

        return view('framer');
    });

    Route::get('/loom', function () {

        return view('loom');
    });

    Route::get('/miro', function () {

        return view('miro');
    });

    Route::get('/tella', function () {

        return view('tella');
    });
    Route::get('/zapier', function () {
        return view('zapier');
    });
});