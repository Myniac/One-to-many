<?php

use Illuminate\Support\Facades\Route;

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

$authors =
Route::get('/', function () {
$authors = App\Models\Author::all();

foreach ($authors as $author)
{
    echo  $author['name']. "<br>";
    echo '<b> Autors books:  </b>';
}
foreach ($author->books as $book)
{
    echo $book['title'] . ',';
}

});
