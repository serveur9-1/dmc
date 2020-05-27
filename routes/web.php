<?php




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

 Route::get('/',[
        'as' => 'index',
        'uses' => 'ConfigController@index'
    ]);
 Route::get('/about',[
        'as' => 'about',
        'uses' => 'ConfigController@about'
    ]);


 Route::get('/contact',[
        'as' => 'contact',
        'uses' => 'ConfigController@contact'
    ]);


 Route::get('/service',[
        'as' => 'service',
        'uses' => 'ConfigController@service'
    ]);

 Route::get('/PrendreRendezVous',[
        'as' => 'rdv',
        'uses' => 'RendezvousController@rdv'
    ]);
 Route::get('/service/OneService',[
        'as' => 'OneService',
        'uses' => 'ServiceController@OneService'
    ]);
 Route::get('/service/OneService/SingleService',[
        'as' => 'SingleService',
        'uses' => 'ServiceController@SingleService'
    ]);



// ROUTE ADMIN
 Route::group(['prefix'=> 'admin'],function(){

        Route::get('/login',[
            'as' => 'adminLogin',
            'uses' => 'AdminController@login'
        ]);

        Route::get('/Accueil',[
            'as' => 'admin',
            'uses' => 'ArticleController@admin'
        ]);

         Route::get('/NosFormations',[
            'as' => 'NosForamtions',
            'uses' => 'ArticleController@formation'
        ]);

         Route::get('/AddFormation',[
            'as' => 'AddFormation',
            'uses' => 'ArticleController@AddFormation'
        ]);

          Route::get('/ListRendezVous',[
            'as' => 'listRendezVous',
            'uses' => 'RendezvousController@RendezVous'
        ]);

           Route::get('/NosServices',[
            'as' => 'NosServices',
            'uses' => 'ServiceController@NosServices'
        ]);
           Route::get('/AddService',[
            'as' => 'AddService',
            'uses' => 'ServiceController@AddService'
        ]);

            Route::get('/AddTemoignage',[
            'as' => 'AddTemoignage',
            'uses' => 'TemoinController@AddTemoignage'
        ]);

             Route::get('/NosTemoignages',[
            'as' => 'NosTemoignages',
            'uses' => 'TemoinController@NosTemoignages'
        ]);

               Route::get('/AddMembre',[
            'as' => 'AddMembre',
            'uses' => 'TeamController@AddMembre'
        ]);

                Route::get('/NotreEquipe',[
            'as' => 'NotreEquipe',
            'uses' => 'TeamController@NotreEquipe'
        ]);

                Route::get('/Configuration',[
            'as' => 'config',
            'uses' => 'ConfigController@config'
        ]);
 });



