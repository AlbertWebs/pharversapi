<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailChimpController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageUploadController;

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

// Route::get('/home', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [HomeController::class, 'products']);
Route::get('/search-product', [HomeController::class, 'search'])->name('search');
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::get('/frequently-asked-questions/{slung}', [HomeController::class, 'faq']);
Route::get('/clients', [HomeController::class, 'clients']);
Route::get('/terms-and-conditions', [HomeController::class, 'terms']);
Route::get('/privacy-policy', [HomeController::class, 'privacy']);
Route::get('/copyright', [HomeController::class, 'copyright']);
Route::post('/subscribe', [MailChimpController::class, 'subscribe']);
Route::post('/contact-form', [HomeController::class, 'contact_form'])->name('contact-form');

Auth::routes();
// manages


/*------------------------------------------
--------------------------------------------
All Managers Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


// Admin Routes
Auth::routes();
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
        Route::get('', [AdminsController::class, 'adminHome'])->name('admin.home');
        Route::get('/home', [AdminsController::class, 'adminHome'])->name('admin.homes');

        // SiteSettings
        Route::get('credentials', [AdminsController::class, 'systemsCredentials']);
        Route::get('SiteSettings', [AdminsController::class, 'SiteSettings']);
        Route::get('SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings']);
        Route::get('logo-and-favicon', [AdminsController::class, 'logo_and_favicon']);
        Route::post('logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update']);

        // mailerSettings
        Route::get('mailerSettings', [AdminsController::class, 'mailerSettings']);
        // Terms and Conditions
        Route::get('terms', [AdminsController::class, 'terms']);
        Route::get('addTerms', [AdminsController::class, 'addTerms']);
        Route::get('editTerm/{id}', [AdminsController::class, 'editTerm']);
        Route::post('add_term', [AdminsController::class, 'add_term']);
        Route::post('edit_term/{id}', [AdminsController::class, 'edit_term']);
        Route::get('delete_term/{id}', [AdminsController::class, 'delete_term']);

        // Privacy Policy
        Route::get('privacy', [AdminsController::class, 'privacy']);
        Route::get('addPrivacy', [AdminsController::class, 'addPrivacy']);
        Route::get('editPrivacy/{id}', [AdminsController::class, 'editPrivacy']);
        Route::post('add_privacy', [AdminsController::class, 'add_privacy']);
        Route::post('edit_privacy/{id}', [AdminsController::class, 'edit_privacy']);
        Route::get('delete_privacy/{id}', [AdminsController::class, 'delete_privacy']);

        // Frequently Asked Questions
        Route::get('faq', [AdminsController::class, 'faq']);
        Route::get('addFaq', [AdminsController::class, 'addFaq']);
        Route::get('editFaq/{id}', [AdminsController::class, 'editFaq']);
        Route::post('add_Faq', [AdminsController::class, 'add_Faq']);
        Route::post('edit_Faq/{id}', [AdminsController::class, 'edit_Faq']);
        Route::get('delete_Faq/{id}', [AdminsController::class, 'delete_Faq']);

        // Extras
        Route::get('extras/{id}', [AdminsController::class, 'extras']);
        Route::get('addExtra/{id}', [AdminsController::class, 'addExtra']);
        Route::get('editExtra/{id}', [AdminsController::class, 'editExtra']);
        Route::post('add_Extra', [AdminsController::class, 'add_Extra']);
        Route::post('edit_Extra/{id}', [AdminsController::class, 'edit_Extra']);
        Route::get('delete_Extra/{id}', [AdminsController::class, 'delete_Extra']);

        // Risks Declaration
        Route::get('editRisk', [AdminsController::class, 'editRisk']);
        Route::post('edit_Risk', [AdminsController::class, 'edit_Risk']);

        // How It Works
        Route::get('how', [AdminsController::class, 'how']);
        Route::get('addHow', [AdminsController::class, 'addHow']);
        Route::get('editHow/{id}', [AdminsController::class, 'editHow']);
        Route::post('add_How', [AdminsController::class, 'add_How']);
        Route::post('edit_How/{id}', [AdminsController::class, 'edit_How']);
        Route::get('delete_How/{id}', [AdminsController::class, 'delete_How']);

        // Courses
        Route::get('courses', [AdminsController::class, 'courses']);
        Route::get('addCourse', [AdminsController::class, 'addCourse']);
        Route::get('editCourse/{id}', [AdminsController::class, 'editCourse']);
        Route::post('add_Course', [AdminsController::class, 'add_Course']);
        Route::post('edit_Course/{id}', [AdminsController::class, 'edit_Course']);
        Route::get('delete_Course/{id}', [AdminsController::class, 'delete_Course']);

        // Topics
        Route::get('topics', [AdminsController::class, 'topics']);
        Route::get('addTopic', [AdminsController::class, 'addTopic']);
        Route::get('editTopic/{id}', [AdminsController::class, 'editTopic']);
        Route::post('add_Topic', [AdminsController::class, 'add_Topic']);
        Route::post('edit_Topic/{id}', [AdminsController::class, 'edit_Topic']);
        Route::get('delete_Topic/{id}', [AdminsController::class, 'delete_Topic']);

        // Copyright Statement
        Route::get('editCopyright', [AdminsController::class, 'copyright']);
        Route::post('edit_Copyright', [AdminsController::class, 'edit_copyright']);

        // About Us
        Route::get('editAbout', [AdminsController::class, 'about']);
        Route::post('edit_About', [AdminsController::class, 'edit_about']);

        // Sliders
        Route::get('sliders', [AdminsController::class, 'slider']);
        Route::get('addSlider', [AdminsController::class, 'addSlider']);
        Route::post('add_Slider', [AdminsController::class, 'add_Slider']);
        Route::get('editSlider/{id}', [AdminsController::class, 'editSlider']);
        Route::post('edit_Slider/{id}', [AdminsController::class, 'edit_Slider']);
        Route::get('deleteSlider/{id}', [AdminsController::class, 'deleteSlider']);


         // Sections
         Route::get('sections', [AdminsController::class, 'section']);
         Route::get('addSection', [AdminsController::class, 'addSection']);
         Route::post('add_Section', [AdminsController::class, 'add_Section']);
         Route::get('editSection/{id}', [AdminsController::class, 'editSection']);
         Route::post('edit_Section/{id}', [AdminsController::class, 'edit_Section']);
         Route::get('deleteSection/{id}', [AdminsController::class, 'deleteSection']);

        // Banners
        Route::get('banners', [AdminsController::class, 'banners']);
        Route::get('editBanner/{id}', [AdminsController::class, 'editBanner']);
        Route::post('edit_Banner/{id}', [AdminsController::class, 'edit_Banner']);

        // Messages
        Route::get('allMessages', [AdminsController::class, 'allMessages']);
        Route::get('unread', [AdminsController::class, 'unread']);
        Route::post('reply', [AdminsController::class, 'reply']);
        Route::get('read/{id}', [AdminsController::class, 'read']);
        Route::get('deleteMessage/{id}', [AdminsController::class, 'deleteMessage']);

        // Categories
        Route::get('categories', [AdminsController::class, 'categories']);
        Route::get('addCategory', [AdminsController::class, 'addCategory']);
        Route::post('add_Category', [AdminsController::class, 'add_Category']);
        Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
        Route::get('extras/{id}', [AdminsController::class, 'extras']);
        Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
        Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

        // Products
        Route::get('products', [AdminsController::class, 'products']);
        Route::get('addProduct', [AdminsController::class, 'addProduct']);
        Route::post('add_Product', [AdminsController::class, 'add_Product']);
        Route::get('editProducts/{id}', [AdminsController::class, 'editProducts']);
        Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);

        // Portfolio
        Route::get('portfolio', [AdminsController::class, 'portfolios']);
        Route::get('addPortfolio', [AdminsController::class, 'addPortfolio']);
        Route::post('add_Portfolio', [AdminsController::class, 'add_Portfolio']);
        Route::get('editPortfolios/{id}', [AdminsController::class, 'editPortfolio']);
        Route::post('edit_Portfolio/{id}', [AdminsController::class, 'edit_Portfolio']);
        Route::get('deletePortfolio/{id}', [AdminsController::class, 'deletePortfolio']);

        // Partner
        Route::get('partners', [AdminsController::class, 'partners']);
        Route::get('addPartner', [AdminsController::class, 'addPartner']);
        Route::post('add_Partner', [AdminsController::class, 'add_Partner']);
        Route::get('editPartners/{id}', [AdminsController::class, 'editPartner']);
        Route::post('edit_Partner/{id}', [AdminsController::class, 'edit_Partner']);
        Route::get('deletePartner/{id}', [AdminsController::class, 'deletePartner']);

        Route::post('add_Variation', [AdminsController::class, 'add_Variation']);
        Route::post('edit_Variation/{id}', [AdminsController::class, 'edit_Variation']);
        Route::get('addVariation/color', [AdminsController::class, 'variations_color']);
        Route::get('addVariation/size', [AdminsController::class, 'variations_size']);
        Route::get('variations/color', [AdminsController::class, 'var_color']);
        Route::get('variations/size', [AdminsController::class, 'var_size']);
        Route::get('editVariation/{id}', [AdminsController::class, 'editVariation']);

        //Color
        Route::get('addColor', [AdminsController::class, 'addColor']);
        Route::post('add_Color', [AdminsController::class, 'add_Color']);
        Route::get('editColor/{id}', [AdminsController::class, 'editColor']);
        Route::post('edit_Color/{id}', [AdminsController::class, 'edit_Color']);
        Route::get('deleteColor/{id}', [AdminsController::class, 'deleteColor']);

        //Water
        Route::get('resistance', [AdminsController::class, 'water']);
        Route::get('addResistance', [AdminsController::class, 'addWater']);
        Route::post('add_Water', [AdminsController::class, 'add_Water']);
        Route::get('editWater/{id}', [AdminsController::class, 'editWater']);
        Route::post('edit_Water/{id}', [AdminsController::class, 'edit_Water']);
        Route::get('deleteWater/{id}', [AdminsController::class, 'deleteWater']);

        // Warranties Routes
        Route::get('warranties', [AdminsController::class, 'warranties']);
        Route::get('addWarranty', [AdminsController::class, 'addWarranty']);
        Route::post('add_Warranty', [AdminsController::class, 'add_Warranty']);
        Route::get('editWarranty/{id}', [AdminsController::class, 'editWarranty']);
        Route::post('edit_Warranty/{id}', [AdminsController::class, 'edit_Warranty']);
        Route::get('deleteWarranty/{id}', [AdminsController::class, 'deleteWarranty']);


        //AcRatting
        Route::get('acRatting', [AdminsController::class, 'acRatting']);
        Route::get('addAcRatting', [AdminsController::class, 'addAcRatting']);
        Route::post('add_AcRatting', [AdminsController::class, 'add_AcRatting']);
        Route::get('editAcRatting/{id}', [AdminsController::class, 'editAcRatting']);
        Route::post('edit_AcRatting/{id}', [AdminsController::class, 'edit_AcRatting']);
        Route::get('deleteAcRatting/{id}', [AdminsController::class, 'deleteAcRatting']);

        // Categories
        Route::get('categories', [AdminsController::class, 'categories']);
        Route::get('addCategory', [AdminsController::class, 'addCategory']);
        Route::post('add_Category', [AdminsController::class, 'add_Category']);
        Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
        Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
        Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

        // Testimonials
        Route::get('testimonials', [AdminsController::class, 'testimonials']);
        Route::get('addTestimonial', [AdminsController::class, 'addTestimonial']);
        Route::post('add_Testimonial', [AdminsController::class, 'add_Testimonial']);
        Route::get('editTestimonial/{id}', [AdminsController::class, 'editTestimonial']);
        Route::post('edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial']);

        // Signal
        Route::get('signals', [AdminsController::class, 'signals']);
        Route::get('addSignal', [AdminsController::class, 'addSignal']);
        Route::post('add_Signal', [AdminsController::class, 'add_Signal']);
        Route::get('editSignal/{id}', [AdminsController::class, 'editSignal']);
        Route::post('edit_Signal/{id}', [AdminsController::class, 'edit_Signal']);

        // Blog
        Route::get('blog', [AdminsController::class, 'blog']);
        Route::get('addBlog', [AdminsController::class, 'addBlog']);
        Route::post('add_Blog', [AdminsController::class, 'add_Blog']);
        Route::get('editBlog/{id}', [AdminsController::class, 'editBlog']);
        Route::post('edit_Blog/{id}', [AdminsController::class, 'edit_Blog']);
        Route::get('delete_Blog/{id}', [AdminsController::class, 'delete_Blog']);

        // Blog
        Route::get('advertisements', [AdminsController::class, 'advertisements']);
        Route::get('addAdvertisement', [AdminsController::class, 'addAdvertisement']);
        Route::post('add_Advertisement', [AdminsController::class, 'add_Advertisement']);
        Route::get('editAdvertisement/{id}', [AdminsController::class, 'editAdvertisement']);
        Route::post('edit_Advertisement/{id}', [AdminsController::class, 'edit_Advertisement']);
        Route::get('delete_Advertisement/{id}', [AdminsController::class, 'delete_Advertisement']);


        // Podcasts
        Route::get('podcasts', [AdminsController::class, 'podcasts']);
        Route::get('addPodcast', [AdminsController::class, 'addPodcast']);
        Route::post('add_Podcast', [AdminsController::class, 'add_Podcast']);
        Route::get('editPodcast/{id}', [AdminsController::class, 'editPodcast']);
        Route::post('edit_Podcast/{id}', [AdminsController::class, 'edit_Podcast']);
        Route::get('delete_Podcast/{id}', [AdminsController::class, 'delete_Podcast']);

        Route::get('videos', [AdminsController::class, 'videos']);
        Route::get('addVideo', [AdminsController::class, 'addVideo']);
        Route::post('add_Video', [AdminsController::class, 'add_Video']);
        Route::get('editVideo/{id}', [AdminsController::class, 'editVideo']);
        Route::post('edit_Video/{id}', [AdminsController::class, 'edit_Video']);
        Route::get('delete_Video/{id}', [AdminsController::class, 'delete_Video']);

        // Payments
        Route::get('b2b', [AdminsController::class, 'b2b']);
        Route::get('b2c', [AdminsController::class, 'b2c']);
        Route::get('lnmo_api_response', [AdminsController::class, 'lnmo_api_response']);
        Route::get('mobile_payments', [AdminsController::class, 'mobile_payments']);
        Route::get('reverse_transaction', [AdminsController::class, 'reverse_transaction']);
        Route::get('transaction_status', [AdminsController::class, 'transaction_status']);
        Route::get('accountbalance', [AdminsController::class, 'accountbalance']);
        Route::get('approve-transaction/{id}', [AdminsController::class, 'approve_transaction']);
        Route::get('approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk']);

        // Enroll Users
        Route::get('enroll-users', [AdminsController::class, 'enroll_users']);
        Route::get('enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post']);
        Route::post('enroll-user-now', [AdminsController::class, 'enroll_user_now']);

        //Manage Users
        Route::get('users', [AdminsController::class, 'users']);
        Route::get('admins', [AdminsController::class, 'admins']);
        Route::get('addUser', [AdminsController::class, 'addUser']);
        Route::get('editUser/{id}', [AdminsController::class, 'editUser']);
        Route::post('add_User', [AdminsController::class, 'add_User']);
        Route::post('edit_User/{id}', [AdminsController::class, 'edit_User']);
        Route::get('delete_user/{id}', [AdminsController::class, 'delete_user']);
        Route::get('switchRole/{id}', [AdminsController::class, 'switchRole']);
        Route::get('switchStatus/{id}', [AdminsController::class, 'switchStatus']);
        Route::get('slungify', [AdminsController::class, 'slungify']);


        Route::get('updateSlung', [AdminsController::class, 'updateSlung']);




        Route::get('activitylogs', [AdminsController::class, 'activitylogs']);


        // AJAX REQUESTS
        Route::post('addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest']);
        Route::post('deleteExtraAjax', [AdminsController::class, 'deleteExtraAjaxRequest']);
        Route::post('deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax']);
        Route::put('updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax']);
        Route::put('updateMailerAjax', [AdminsController::class, 'updateMailerAjax']);
        Route::put('updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax']);
        Route::put('updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials']);
        Route::post('deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax']);
        Route::post('deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax']);
        Route::post('deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax']);
        Route::post('deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax']);
        Route::post('deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax']);
        Route::post('deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax']);
        Route::post('deleteBalAjax', [AdminsController::class, 'deleteBalAjax']);
        Route::post('deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax']);
        Route::post('deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax']);
        Route::post('deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax']);
        Route::post('deleteUserAjax', [AdminsController::class, 'deleteUserAjax']);
        Route::post('deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax']);
        Route::post('deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax']);
        Route::post('deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax']);
        Route::post('deleteHowAjax', [AdminsController::class, 'deleteHowAjax']);
        Route::post('deleteProductAjax', [AdminsController::class, 'deleteProductAjax']);
        Route::post('deletePartnerAjax', [AdminsController::class, 'deletePartnerAjax']);
        Route::post('deletePortfolioAjax', [AdminsController::class, 'deletePortfolioAjax']);
        Route::post('deleteSectionAjax', [AdminsController::class, 'deleteSectionAjax']);
        Route::post('deleteWaterAjax', [AdminsController::class, 'deleteWaterAjax']);
        Route::post('deletePodcastAjax', [AdminsController::class, 'deletePodcastAjax']);
        Route::post('deleteVideoAjax', [AdminsController::class, 'deleteVideoAjax']);


        Route::get('addProductToFacebookPixel', [AdminsController::class, 'addProductToFacebookPixel']);
        Route::get('emptyProductToFacebookPixel', [AdminsController::class, 'emptyProductToFacebookPixel']);

        Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
        Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
    });
});


