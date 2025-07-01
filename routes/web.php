<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;

Route::get('/', action: function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {

    $comment->update(
        request()->validate(['texts' => 'required|string'])
    );
    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function (Comment $comment) {

    $commentData = Comment::find($comment->id);
    if ($commentData) {
        $comment->delete();
        echo "Comment deleted successfully";
    } else {
        echo "Comment does not exist";
    }
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
