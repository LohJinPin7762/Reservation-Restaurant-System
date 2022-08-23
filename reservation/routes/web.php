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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addDeposit', function () {
    return view('addDeposit',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::get('/addReservation', function () {
    return view('addReservation',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::get('/addProduct', function () {
    return view('addProduct',['categoryID'=>DB::table('categories')->where('categories.name','=',"Fries")->orWhere('categories.name','=',"Pizza")->get()]);
});

Route::get('/addRestaurant', function () {
    return view('addRestaurant',['categoryID'=>DB::table('categories')->where('categories.name','=',"Restaurant")->orWhere('categories.name','=',"Cafe")->get()]);
});

Route::get('/addAdmin', function () {
    return view('addAdmin',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::get('/addPayment', function () {
    return view('addPayment',['categoryID'=>DB::table('categories')->where('categories.name','=',"Online")->get()]);
});

Route::get('/addContact', function () {
    return view('addContact',['categoryID'=>DB::table('categories')->where('categories.name','=',"System Problem")->orWhere('categories.name','=',"Payment Problem")->orWhere('categories.name','=',"Product Problem")->orWhere('categories.name','=',"Refund")->get()]);
});

Route::get('/addFeedback', function () {
    return view('addFeedback',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::get('/addRestaurant', function () {
    return view('addRestaurant',['categoryID'=>DB::table('categories')->where('categories.name','=',"Restaurant")->orWhere('categories.name','=',"Cafe")->get()]);
});

Route::get('/addComment', function () {
    return view('addComment',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::get('/addRefund', function () {
    return view('addRefund',['categoryID'=>DB::table('categories')->where('categories.name','=',"Male")->orWhere('categories.name','=',"Female")->get()]);
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addReservation/store',[App\Http\Controllers\ReservationController::class,'add'])->name('addReservation');

Route::post('/addProduct/store',[App\Http\Controllers\ProductController::class,'add'])->name('addProduct');

Route::post('/addDeposit/store',[App\Http\Controllers\DepositController::class,'add'])->name('addDeposit');

Route::post('/addRestaurant/store',[App\Http\Controllers\RestaurantController::class,'add'])->name('addRestaurant');

Route::post('/addAdmin/store',[App\Http\Controllers\AdminController::class,'add'])->name('addAdmin');

Route::post('/addPayment/store',[App\Http\Controllers\PaymentController::class,'add'])->name('addPayment');

Route::post('/addContact/store',[App\Http\Controllers\ContactController::class,'add'])->name('addContact');

Route::post('/addFeedback/store',[App\Http\Controllers\FeedbackController::class,'add'])->name('addFeedback');

Route::post('/addComment/store',[App\Http\Controllers\CommentController::class,'add'])->name('addComment');

Route::post('/addRefund/store',[App\Http\Controllers\RefundController::class,'add'])->name('addRefund');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showReservation',[App\Http\Controllers\ReservationController::class,'view'])->name('showReservation');

Route::get('/showProduct',[App\Http\Controllers\ProductController::class,'view'])->name('showProduct');

Route::get('/showDeposit',[App\Http\Controllers\DepositController::class,'view'])->name('showDeposit');

Route::get('/showRestaurant',[App\Http\Controllers\RestaurantController::class,'view'])->name('showRestaurant');

Route::get('/showAdmin',[App\Http\Controllers\AdminController::class,'view'])->name('showAdmin');

Route::get('/showPayment',[App\Http\Controllers\PaymentController::class,'view'])->name('showPayment');

Route::get('/showContact',[App\Http\Controllers\ContactController::class,'view'])->name('showContact');

Route::get('/showFeedback',[App\Http\Controllers\FeedbackController::class,'view'])->name('showFeedback');

Route::get('/showComment',[App\Http\Controllers\CommentController::class,'view'])->name('showComment');

Route::get('/showRefund',[App\Http\Controllers\RefundController::class,'view'])->name('showRefund');

Route::get('/deleteProduct/{id}',[App\Http\Controllers\ProductController::class,'delete'])->name('deleteProduct');

Route::get('/deleteDeposit/{id}',[App\Http\Controllers\DepositController::class,'delete'])->name('deleteDeposit');

Route::get('/deleteRestaurant/{id}',[App\Http\Controllers\RestaurantController::class,'delete'])->name('deleteRestaurant');

Route::get('/deleteReservation/{id}',[App\Http\Controllers\ReservationController::class,'delete'])->name('deleteReservation');

Route::get('/deleteAdmin/{id}',[App\Http\Controllers\AdminController::class,'delete'])->name('deleteAdmin');

Route::get('/deletePayment/{id}',[App\Http\Controllers\PaymentController::class,'delete'])->name('deletePayment');

Route::get('/deleteContact/{id}',[App\Http\Controllers\ContactController::class,'delete'])->name('deleteContact');

Route::get('/deleteFeedback/{id}',[App\Http\Controllers\FeedbackController::class,'delete'])->name('deleteFeedback');

Route::get('/deleteComment/{id}',[App\Http\Controllers\CommentController::class,'delete'])->name('deleteComment');

Route::get('/deleteRefund/{id}',[App\Http\Controllers\RefundController::class,'delete'])->name('deleteRefund');

Route::get('editProduct/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('editProduct');
// http://localhost/editProduct.php?id=22   localhost/editProduct/22

Route::get('editDeposit/{id}',[App\Http\Controllers\DepositController::class,'edit'])->name('editDeposit');

Route::get('editRestaurant/{id}',[App\Http\Controllers\RestaurantController::class,'edit'])->name('editRestaurant');

Route::get('editReservation/{id}',[App\Http\Controllers\ReservationController::class,'edit'])->name('editReservation');

Route::get('editAdmin/{id}',[App\Http\Controllers\AdminController::class,'edit'])->name('editAdmin');

Route::get('editPayment/{id}',[App\Http\Controllers\PaymentController::class,'edit'])->name('editPayment');

Route::get('editContact/{id}',[App\Http\Controllers\ContactController::class,'edit'])->name('editContact');

Route::get('editFeedback/{id}',[App\Http\Controllers\FeedbackController::class,'edit'])->name('editFeedback');

Route::get('editComment/{id}',[App\Http\Controllers\CommentController::class,'edit'])->name('editComment');

Route::get('editRefund/{id}',[App\Http\Controllers\RefundController::class,'edit'])->name('editRefund');

Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateProduct');

Route::post('/updateDeposit', [App\Http\Controllers\DepositController::class, 'update'])->name('updateDeposit');

Route::post('/updateRestaurant', [App\Http\Controllers\RestaurantController::class, 'update'])->name('updateRestaurant');

Route::post('/updateReservation', [App\Http\Controllers\ReservationController::class, 'update'])->name('updateReservation');

Route::post('/updateAdmin', [App\Http\Controllers\AdminController::class, 'update'])->name('updateAdmin');

Route::post('/updatePayment', [App\Http\Controllers\PaymentController::class, 'update'])->name('updatePayment');

Route::post('/updateContact', [App\Http\Controllers\ContactController::class, 'update'])->name('updateContact');

Route::post('/updateFeedback', [App\Http\Controllers\FeedbackController::class, 'update'])->name('updateFeedback');

Route::post('/updateComment', [App\Http\Controllers\CommentController::class, 'update'])->name('updateComment');

Route::post('/updateRefund', [App\Http\Controllers\RefundController::class, 'update'])->name('updateRefund');

Route::get('/productDetail/{id}',[App\Http\Controllers\ProductController::class,'productdetail'])->name('product.detail');

Route::get('/restaurantDetail/{id}',[App\Http\Controllers\RestaurantController::class,'restaurantdetail'])->name('restaurant.detail');

Route::get('/adminDetail/{id}',[App\Http\Controllers\ProductController::class,'admindetail'])->name('admin.detail');

Route::get('/viewProducts',[App\Http\Controllers\ProductController::class,'viewProduct'])->name('viewProducts');

Route::get('/viewDeposits',[App\Http\Controllers\DepositController::class,'viewDeposit'])->name('viewDeposits');

Route::get('/viewRestaurants',[App\Http\Controllers\RestaurantController::class,'viewRestaurant'])->name('viewRestaurants');

Route::get('/viewReservations',[App\Http\Controllers\ReservationController::class,'viewReservation'])->name('viewReservations');

Route::get('/viewComments',[App\Http\Controllers\CommentController::class,'viewComment'])->name('viewComments');

Route::get('/viewRefunds',[App\Http\Controllers\RefundController::class,'viewRefund'])->name('viewRefunds');

Route::get('/viewFeedbacks',[App\Http\Controllers\FeedbackController::class,'viewFeedback'])->name('viewFeedbacks');

Route::get('/viewPayments',[App\Http\Controllers\PaymentController::class,'viewPayment'])->name('viewPayments');

Route::get('/viewAdmins',[App\Http\Controllers\AdminController::class,'viewAdmin'])->name('viewAdmins');

Route::post('/addCart', [App\Http\Controllers\CartController::class, 'add'])->name('add.to.cart');

Route::get('/myCart',[App\Http\Controllers\CartController::class,'showMyCart'])->name('show.my.cart');

Route::get('/deleteCart/{id}',[App\Http\Controllers\CartController::class,'delete'])->name('delete.cart.item');

Route::post('/admins',[App\Http\Controllers\AdminController::class,'searchAdmin'])->name('search.admin');

Route::post('/reservations',[App\Http\Controllers\ReservationController::class,'searchReservation'])->name('search.reservation');

Route::post('/restaurants',[App\Http\Controllers\RestaurantController::class,'searchRestaurant'])->name('search.restaurant');

Route::get('/myOrder',[App\Http\Controllers\OrderController::class,'viewOrder'])->name('my.order');

Route::get('/pdfReport',[App\Http\Controllers\PDFController::class,'pdfReport'])->name('pdfReport');

Route::get('/sms',[App\Http\Controllers\SmsController::class,'index'])->name('viewSMS');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

