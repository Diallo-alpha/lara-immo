<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;

Route::get('/commentaires', [CommentaireController::class, 'lireCommentaires'])->name('lireCommentaire');
Route::get('/ajouter', [CommentaireController::class, 'ajoutCommentaire'])->name('ajouterUneCommentaire');
Route::post('/traitementAjout', [CommentaireController::class, 'traitementAjoutCommentaire'])->name('commentaireAjouter');
Route::get('/miseAjour', [CommentaireController::class, 'miseAjour']);
Route::post('/traitementMiseAjour', [CommentaireController::class, 'traitementMiseAjour'])->name('miseAjourTraitement');
Route::get('/supprimerCommentaire', [CommentaireController::class, 'supprimerComment'])->name('supprimmerCommentaire');
