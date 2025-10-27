<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // -----------------------------login----------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('logout/page', 'logoutPage')->name('logout/page');
    });

    // ------------------------------ register ----------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register','storeUser')->name('register');    
    });

    // ----------------------------- forget password ----------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');    
    });

    // ----------------------------- reset password -----------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword');    
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    Route::middleware('auth')->group(function () {
        // --------------------- main dashboard ------------------//
        Route::controller(HomeController::class)->group(function () {
            Route::get('/home', 'index')->name('home');
            Route::get('analytics', 'analytics')->name('analytics');
            Route::get('ecommerce', 'ecommerce')->name('ecommerce');
            Route::get('email', 'email')->name('email');
            Route::get('social-media', 'socialMedia')->name('social-media');
        });

        // ------------------------ apps ------------------------//
        Route::prefix('app')->controller(AppsController::class)->group(function () {
            Route::get('chat', 'chat')->name('app/chat');
            Route::get('mailbox', 'mailbox')->name('app/mailbox');
            Route::get('calendar', 'calendar')->name('app/calendar');
        });

        // ---------------------- products ---------------------//
        Route::prefix('app/ecommerce/products')->controller(ProductsController::class)->group(function () {
            Route::get('list', 'list')->name('app/ecommerce/products/list');
            Route::get('grid', 'grid')->name('app/ecommerce/products/grid');
            Route::get('overview', 'overview')->name('app/ecommerce/products/overview');
            Route::get('create', 'create')->name('app/ecommerce/products/create');
        });

        // ---------------------- ecommerce ---------------------//
        Route::prefix('app/ecommerce')->controller(EcommerceController::class)->group(function () {
            Route::get('cart', 'cart')->name('app/ecommerce/cart');
            Route::get('checkout', 'checkOut')->name('app/ecommerce/checkout');
            Route::get('orders', 'orders')->name('app/ecommerce/orders');
            Route::get('order-overview', 'orderOverview')->name('app/ecommerce/order-overview');
            Route::get('sellers', 'sellers')->name('app/ecommerce/sellers');
        });
    });

    // -------------------------- HR ----------------------//
    Route::middleware('auth')->prefix('hr')->group(function () {
        Route::controller(HRController::class)->group(function () {
            Route::get('employee/list', 'employeeList')->name('hr/employee/list');
            Route::get('holidays', 'holidays')->name('hr/holidays');
            Route::get('department', 'department')->name('hr/department');

            Route::prefix('leaves-manage')->group(function () {
                Route::get('leave-employee', 'leaveEmployee')->name('hr/leaves-manage/leave-employee');
                Route::get('create-leave-employee', 'createLeaveEmployee')->name('hr/leaves-manage/create-leave-employee');
                Route::get('leave', 'leave')->name('hr/leaves-manage/leave');
                Route::get('create-leave', 'createLeave')->name('hr/leaves-manage/create-leave');
            });

            Route::prefix('attendance')->group(function () {
                Route::get('attendance', 'attendance')->name('hr/attendance/attendance');
                Route::get('attendance-main', 'attendanceMain')->name('hr/attendance/attendance-main');
            });

            Route::prefix('sales')->group(function () {
                Route::get('estimates', 'estimates')->name('hr/sales/estimates');
                Route::get('payments', 'payments')->name('hr/sales/payments');
                Route::get('expenses', 'expenses')->name('hr/sales/expenses');
            });

            Route::prefix('payroll')->group(function () {
                Route::get('employee-salary', 'employeeSalary')->name('hr/payroll/employee-salary');
                Route::get('payslip', 'payslip')->name('hr/payroll/payslip');
                Route::get('create-payslip', 'createPayslip')->name('hr/payroll/create-payslip');
            });
        });
    });

    // ---------------------- Socials ----------------------//
    Route::middleware('auth')->prefix('social')->group(function () {
        Route::controller(SocialController::class)->group(function () {
            Route::get('friends', 'friends')->name('social/friends');
            Route::get('event', 'event')->name('social/event');
            Route::get('video', 'video')->name('social/video');
            Route::get('marketplace', 'marketPlace')->name('social/marketplace');
        });
    });

    // ---------------------- Invoices ----------------------//
    Route::middleware('auth')->prefix('invoice')->group(function () {
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('list', 'list')->name('invoice/list');
            Route::get('add-new', 'addNew')->name('invoice/add-new');
            Route::get('overview', 'overview')->name('invoice/overview');
        });
    });

    // ---------------------- Users ----------------------//
    Route::middleware('auth')->prefix('user')->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('list', 'list')->name('user/list');
            Route::get('grid', 'grid')->name('user/grid');
        });
    });

    // ---------------------- Pages ----------------------//
    Route::middleware('auth')->prefix('page')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('account-settings', 'accountSettings')->name('page/account-settings');
            Route::get('account', 'account')->name('page/account');
        });
    });
});