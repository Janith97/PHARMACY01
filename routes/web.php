<?php

use Illuminate\Support\Facades\Route;

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

/*pdf*/
Route::get('/viewpdffile',function(){
    return view('viewpdf.testpdf');
});

Route::get('/viewpdf',function(){
    $pdf= PDF::loadView('viewpdf.testpdf');
    return $pdf->stream('test.pdf');
});



Route::get('/viewpdf', function(){
$pdf = PDF::loadView('pdfviews.testpdf');
return $pdf->stream('test.pdf');
});

Route::get('/pdf',function(){
    $html   ='<h1>Hellow PDF</h1>';
    $pdf    =PDF::loadHtml($html);
    return $pdf->stream('123.pdf'); 
});

Route::get('/viewpdfwithdatafile', function () {
    $data =[
        ['name' => 'Audi',
        'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
        ],
        ['name'=>'Ford',
        'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
        ]
    ];
    return view('pdfviews.pdfwithdata',compact('data'));
});

Route::get('/pdfwithdata', function(){
    $data =[
        ['name' => 'Audi',
        'logo' => 'https://cdn.1min30.com/wp-content/uploads/2017/08/Logo-Audi.png',
        ],
        ['name'=>'Ford',
        'logo'=>'https://www.carlogos.org/logo/Ford-logo-1929-1440x900.png',
        ]
    ];
    $pdf = PDF::loadView('pdfviews.pdfwithdata',compact('data'));
   // $pdf->setOrientation('landscape');
   // $pdf->setOption('header-right','Page [page]');
 //  $pdf->setOption('header-right','[date]');
 //$pdf->setOptions([
    // 'header-left'=>'Page [page]',
    // 'header-right'=>'[date]',
    // 'footer-right'=>'Chathura Dissanayaka - BIT Project Class'

//  ]);

    return $pdf->stream('test.pdf');
});

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee','EmployeeController');
Route::get('/getindexpagetable/', 'EmployeeController@indexpagetable')->name('datatable.indexpagetable');
Route::any('/remove/{id}', 'EmployeeController@remove')->name('ajax.remove');

/*theme*/

Route::resource('theme','ThemeController');
Route::get('/medic/', 'ThemeController@new2')->name('medic.new2');
Route::get('/dash/', 'ThemeController@new3');



/*picture store*/

Route::resource('picturestore','PictureStoreController');

/*Ajax*/

Route::resource('ajax','AjaxController');
Route::resource('student','StudentController');
Route::get('/getpagetable/', 'StudentController@pagetable')->name('xyz.pagetable');
// Route::any('/remove/{id}', 'StudentController@remove')->name('ajax.remove');

Route::get('/export/', 'StudentController@export');
Route::get('export/income/', 'ExportController@exportIncome')->name('export.income');


Route::resource('test','TestModeController');
/*Charts*/
Route::resource('chart','ChartController');

/*Excel */
Route::get('/', 'ExportController@exportIncome')->name('export.income');
Route::get('employeeimport/', 'EmployeeController@showimportpage')->name('employee.importview');
Route::post('employee/import/', 'EmployeeController@import')->name('employee.import');



