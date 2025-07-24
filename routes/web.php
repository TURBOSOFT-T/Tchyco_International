<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DevelopperController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BannersController;
use App\Http\Controllers\CommandeController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MyAccountController;

use App\Http\Controllers\CoachController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
 ContactController ,
};

use App\Http\Controllers\Back\{

CategoryController,
TestimonialController as TestimonialBacKController,
FormationController as FormationBackController,
//CommandeController,
CounponController,
LeconController as BackLeceonController,
DocumentController as BacKDocumentController,
EventController as BackEventController,
CoursController as BackCoursController,
VideoController,
   
};

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\CommentController;


use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


Route::post('/locale', [LocaleController::class ,'change'])->name("locale.change");
    // CACHE CLEAR ROUTE
    Route::get('cache-clear', function () {
        Artisan::call('optimize:clear');
        request()->session()->flash('success', 'Successfully cache cleared.');
        return redirect()->back();
    })->name('cache.clear');


    // STORAGE LINKED ROUTE
    Route::get('storage-link',[AdminController::class,'storageLink'])->name('storage.link');


// NewsLetter
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');

Route::post('/newsletter/subscribe', [SubscriberController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/newsletter/send', [SubscriberController::class, 'sendNewsletter'])->name('newsletter.send');

Route::get('/newsletter/unsubscribe/{email}', [SubscriberController::class, 'unsubscribe'])->name('newsletter.unsubscribe');
//////////Comments////////


Route::post('/posts/{blog}/comments', [CommentController::class, 'store'])->name('comments.store');

// Dans routes/web.php
Route::get('/video/{id}', [VideoController::class, 'play'])->name('video.play');

Route::post('/videos/{id}/view', [VideoController::class, 'incrementView'])->name('videos.incrementView');
Route::get('contact', [ContactController::class, 'contact'])->name("contact");
Route::get('about', [ContactController::class, 'about'])->name("about");

/////temoignages
Route::resource('testimonial', TestimonialController::class);


Route::get('evenements', [EventController::class, 'evenements'])->name("evenements");


Route::resource('contacts', ContactController::class, ['only' => ['create', 'store']]);
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot-password');
Route::get('/confirmation', [HomeController::class, 'confirmation'])->name('confirmation');
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/print/commande/{id}', [HomeController::class, 'print_commande'])->name('print_commande');

//Route::get('/marque/{id}', [HomeController::class, 'produits'])->where('id', '[0-9]+');
//Route::get('/details-produits/{id}', [HomeController::class, 'details'])->name('details-produits');
Route::get('/details-produits/{id}/{slug}', [HomeController::class, 'details'])->name('details-produits');
Route::get('/details-services/{id}/{slug}', [HomeController::class, 'detailsServices'])->name('details-services');


 ///gestion boutique
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('ordres-croissant', [HomeController::class, 'croissant'])->name('ordres.croissant');
Route::post('/shop', [HomeController::class, 'shop']);
Route::get('/category/{id}', [HomeController::class, 'produits'])->where('id', '[0-9]+');
Route::get('/decroissant', [HomeController::class, 'decroissant'])
->name('decroissant');
Route::get('/croissant', [HomeController::class, 'croissant'])
->name('croissant');

//Route::get('/search-product',[HomeController::class,'search_products'])->name('search.products');
Route::get('/sort-by',[HomeController::class,'sort_by'])->name('sort.by');

//////Formations/////////////
Route::get('/nos-formations', [HomeController::class, 'formations'])->name('nos-formations');
Route::get('/category_formation/{id}', [HomeController::class, 'formations'])->where('id', '[0-9]+');
Route::get('/details-formations/{id}/{slug}', [HomeController::class, 'details_formations'])->name('details-formations');
Route::get('searchformation', [HomeController::class, 'searchformation'])->name("searchformation");

//Route::get('/formation-inscription/{id}/{slug}', [InscriptionController::class, 'formation_inscription'])->name("formation.inscription");
//Route::post('/events-inscriptions', [InscriptionController::class, 'confirmEvents'])->name('event.confirm');
Route::get('/formation/inscription/{id}', [InscriptionController::class, 'formation_inscription'])->name('formation.inscription');

Route::post('/formations-inscriptions', [InscriptionController::class, 'confirmFormation'])->name('formation.confirm');

Route::post('api/fetch-states', [InscriptionController::class, 'fetchState']);

Route::post('api/fetch-cities', [InscriptionController::class, 'fetchCity']);

////////////Actualités/////////
Route::get('/news', [HomeController::class, 'blogs'])->name('news');
Route::get('/category_blog/{id}', [HomeController::class, 'blogs'])->where('id', '[0-9]+');
Route::get('/details-blogs/{id}/{slug}', [HomeController::class, 'details_blogs'])->name('details-blogs');
Route::get('searchblog', [HomeController::class, 'searchblog'])->name("searchblog");



///////////Services///////////////
Route::get('/nos_services', [HomeController::class, 'AllServices'])->name('nos_services');
Route::get('/details-services/{id}/{slug}', [HomeController::class, 'details_services'])->name('details-services');
Route::get('/category_service/{id}', [HomeController::class, 'services'])->where('id', '[0-9]+');
Route::get('searchformation', [HomeController::class, 'searchformation'])->name("searchformation");


///////Events///////////////
//Route::get('/news', [HomeController::class, 'blogs'])->name('news');
Route::get('/category_event/{id}', [HomeController::class, 'events'])->where('id', '[0-9]+');
Route::get('/details-events/{id}/{slug}', [HomeController::class, 'details_events'])->name('details-events');
Route::get('searchevent', [HomeController::class, 'searchevent'])->name("searchevent");
Route::get('/event-inscription/{id}/{slug}', [InscriptionController::class, 'event_inscription'])->name("event.inscription");
//Route::post('/events-inscriptions', [InscriptionController::class, 'confirmEvents'])->name('event.confirm');
Route::post('/events-inscriptions', [InscriptionController::class, 'confirmEvent'])->name('event.confirm');




Route::get('/commander', [CommandeController::class, 'commander'])->name('commander');
Route::post('/order', [CommandeController::class, 'confirmOrder'])->name('order.confirm');
Route::get('/thank-you', [CommandeController::class, 'index'])->name('thank-you');
//Route::get('cart', [CommandeController::class, 'cart'])->name('cart');
Route::delete('/cart/clear', [CommandeController::class, 'clear'])->name('cart.clear');


// Utilisateur authentifié
Route::middleware('auth')->group(function () {

    /////////////////Commandes////////////////////////////////////////
  //  Route::post('/order', [CommandeController::class, 'confirmOrder'])->name('order.confirm');
//Route::get('/thank-you', [CommandeController::class, 'index'])->name('thank-you');
    //Route::get('/commander', [CommandeController::class, 'commander'])->name('commander');

    //gestion des favoris  
    Route::get('/favories', [MyAccountController::class, 'favories'])->name('favories');
    ///Mon compte
    Route::get('/comptes', [MyAccountController::class, 'comptes'])->name('comptes'); 
    Route::put('/avatar/{id}', [MyAccountController::class, 'avatar']);
    ///Mon compte  
    Route::get('/account', [MyAccountController::class, 'account'])->name('account');
    ///Mon profil
    Route::get('/profile', [MyAccountController::class, 'profile'])->name('profile');
    Route::delete('/deletecomments/{id}', [MyAccountController::class, 'delecomment'])->name('comments.delete');
   

});


Route::post('/videos/{video}/increment-views', [VideoController::class, 'incrementViews']);
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');
    Route::post('/dashboard/filtre', [AdminController::class, 'dashboard'])
        ->name('filtre-dashboard');

    ////////////Les categories/////////////////////////////////////////////////////
    Route::get('/admin/categories', [AdminController::class, 'categories'])
        ->name('categories')
        ->middleware('permission:category_view');
    Route::get('/admin/category/add', [AdminController::class, 'category_add'])
        ->name('category.add')
        ->middleware('permission:category_add');
    Route::get('/admin/category/{id}/update', [AdminController::class, 'categories_update'])
        ->name('categories.update')
        ->middleware('permission:category_edit');

        ////////////////////Webinaires////////////////////////////
           Route::get('/admin/webinaires', [AdminController::class, 'webinaires'])
        ->name('webinaires');
       
    Route::get('/admin/webinaire/add', [AdminController::class, 'webinaire_add'])
        ->name('webinaire.add');
        Route::post('/online_classes/store', [AdminController::class, 'store'])->name('online_classes.store');

  
             ////////////////Formations////////////////
                Route::get('/admin/formations', [AdminController::class, 'formations'])
                ->name('formations');
            Route::get('/admin/formation/add', [AdminController::class, 'formation_add']);
            Route::get('/admin/formation/{id}/update', [AdminController::class, 'formation_update']);
            route::resource('deleteformation', FormationController::class);
            route::resource('updateformation', FormationController::class);
             Route::post('/webinaires/store', [FormationBackController::class, 'store'])->name('webinaires.store');
        
            Route::get('/admin/formation_update/{id}', [ FormationController::class, 'formation_update'])
            ->name('formation.update');
        
            Route::get('/admin/inscriptions', [AdminController::class, 'inscriptions'])
            ->name('list_inscriptions');
           // Route::get('/admin/inscription/{id}/delete', [AdminController::class, 'inscription_delete']);
            Route::delete('/admin/deleteinscriptions/{id}', [InscriptionController::class, 'destroy'])->name('inscriptions.destroy');
            route::resource('deleteinscription', InscriptionController::class);
            //Route::get('/admin/formation/{id}/delete', [AdminController::class, 'formation_delete']);
        
    ///////////////Les services/////////////////////////////////
    Route::get('/admin/services', [AdminController::class, 'services'])
        ->name('services')
        ->middleware('permission:category_view');
    Route::get('/admin/service/add', [AdminController::class, 'service_add'])
        ->name('service.add')
        ->middleware('permission:category_add');
    Route::get('/admin/service/{id}/update', [AdminController::class, 'service_update'])
        ->name('service.update')
        ->middleware('permission:service_edit');

       /////////Testimonials///////////////////
       Route::get('/admin/testimonials', [AdminController::class, 'testimonials'])
       ->name('testimonials');
       Route::get('/admin/testimonial/{id}/delete', [AdminController::class, 'testimonial_delete']);
       Route::resource('testimonials', TestimonialController::class);
       Route::get('temoignages/{id}/disapprove', [TestimonialController::class, 'disapprove'])->name('temoignages.disapprove');
       Route::get('temoignages/{id}/approve', [TestimonialController::class, 'approve'])->name('temoignages.approve');
      // Route::get('testimoniale/{id}/destroy', [TestimonialController::class, 'destroy'])->name('testimoniale.destroy');

    ////////////////////////Comments////////////////////////////////////////
    Route::get('/admin/comment', [AdminController::class, 'comment'])
    ->name('comment');
    Route::get('/admin/comment/{id}/delete', [AdminController::class, 'testimonial_delete']);
    Route::resource('comment', CommentController::class);
    Route::get('comment/{id}/disapprove', [CommentController::class, 'disapprove'])->name('comment.disapprove');
    Route::get('comment/{id}/approve', [CommentController::class, 'approve'])->name('comment.approve');

    /////////////////////////Les marques//////////////////////////////////////
    Route::get('/admin/marques', [AdminController::class, 'marques'])
        ->name('marques');     
    /////////////////////////Les sponsors//////////////////////////////////////  
    Route::get('/admin/sponsors', [SponsorController::class,'sponsors'])
        ->name('sponsors');  
    route::resource('sponsors', SponsorController::class);
   /*  Route::get('/admin/sponsor/{id}', [SponsorController::class, 'index_update'])
    ->name('sponsor.update'); */
        
    Route::get('/admin/sponsor/add', [AdminController::class,'sponsor_add'])
        ->name('sponsor.add')
        ->middleware('permission:sponsor_add');
     Route::get('/admin/sponsor_update/{id}', [SponsorController::class,'sponsor_update'])
        ->name('sponsor_update');
       
        /////////////////// events ////////////////////////////////////////
        Route::get('/admin/events', [EventController::class, 'events'])
            ->name('events')
            ->middleware('permission:event_view');
            route::resource('events', EventController::class);
            Route::get('calendar', [ EventController::class, 'calendar' ])->name('calendar');
   
        Route::get('/admin/event_update/{id}', [ EventController::class, 'event_update'])
            ->name('event_update');

            Route::post('/meets/store', [BackEventController::class, 'store'])->name('meets.store');
//Route::post('/meets/destroy', [BackEventController::class, 'deletemeet'])->name('meets.destroy');
Route::delete('/meets/delete/{id}', [BackEventController::class, 'deletemeet'])->name('meets.destroy');

Route::get('/admin/events-inscriptions-list', [AdminController::class, 'inscriptions_evenements'])
->name('events-inscriptions-list');

          
         ////////////////////////Coachs/////////////////////
         Route::get('/admin/coachs', [CoachController::class, 'coachs'])
            ->name('coachs');
            Route::get('/admin/coach_update/{id}', [ CoachController::class, 'coach_update'])
            ->name('coach_update');
           
            
            route::resource('coachs', CoachController::class);
            Route::get('/admin/coach_update/{id}', [CoachController::class, 'coach_update'])
            ->name('coach_update');

        ///////////////////les  clients////////////////////////////////////////////////   

        ///////////////////////////videos //////////////////
        Route::get('/admin/videos', [AdminController::class, 'videos'])
            ->name('videos')   
            ->middleware('permission:video_view');
            route::resource('videos', VideoController::class);
            Route::post('video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');

        Route::get('/admin/video_update/{id}', [VideoController::class, 'video_update'])
            ->name('video_update');
           

        ///////////////////////////////Images////////////////
        Route::get('/admin/images', [AdminController::class, 'images'])
            ->name('images')
            ->middleware('permission:image_view');
            Route::get('/admin/image_update/{id}', [ ImageController::class, 'image_update'])
            ->name('image_update');
          

            route::resource('images', ImageController::class);
        Route::get('/admin/image/add', [AdminController::class, 'image_add'])
            ->name('image.add')
            ->middleware('permission:image_add');
        Route::get('/admin/image/{id}', [AdminController::class, 'image_update'])
            ->name('image.update')
            ->middleware('permission:image_edit');

      

//////////////import client/////////////////////////////

Route::post('import', [CustomerController::class, 'importExcelData']);



    ///////////////////les  produits////////////////////////////////////////////////
    Route::prefix('admin')->group(function () {

 




        Route::get('/produits', [AdminController::class, 'produits'])
            ->name('produits')
            ->middleware('permission:product_view');

        Route::get('/corbeille', [AdminController::class, 'corbeille'])->name('corbeille');
        Route::get('/produit/{id}/update', [AdminController::class, 'produits_update'])
            ->name('produits.update')
            ->middleware('permission:product_edit');

        Route::get('/produit/{id}/historique', [AdminController::class, 'historique'])
            ->name('produits.historique')
            ->middleware('role:admin');

        Route::get('/produit/add', [AdminController::class, 'produit_add'])
            ->name('produit.add')
            ->middleware('permission:product_add');

        Route::get('/commandes', [AdminController::class, 'commandes'])
            ->name('commandes')
            ->middleware('permission:order_view');
        Route::get('/parametres', [AdminController::class, 'parametres'])
            ->name('parametres');

        Route::get('/personnels', [AdminController::class, 'personnels'])
            ->name('personnels')
            ->middleware('role:admin');
        Route::get('/promotions', [AdminController::class, 'promotions'])
            ->name('promotions');
        Route::get('/promotions/{id}', [AdminController::class, 'promotions'])
            ->name('promotions_produit');
        Route::get('/commande/{id}', [AdminController::class, 'details_commande'])
            ->name('details_commande');



///////////////////////Blogs///////////////////////////////////
            Route::get('/blogs', [AdminController::class, 'blogs'])
->name('blogs');


// Route::get('/corbeille', [AdminController::class, 'corbeille'])->name('corbeille');
//Route::get('/blog/{id}/update', [AdminController::class, 'blogs_update'])
//->name('blogs.update');

Route::get('blog_update/{id}', [ AdminController::class, 'blogs_update'])
->name('blog.update');

Route::get('/blog/add', [AdminController::class, 'blog_add'])
->name('blog.add');

    });



    
    

    Route::get('clients', [AdminController::class, 'clients'])
        ->name('clients')
        ->middleware('permission:clients_view');
    Route::get('/admin/export/clients', [AdminController::class, 'export_clients'])
        ->name('export_clients')
        ->middleware('permission:clients_view');

    Route::get('contact-admin', [AdminController::class, 'contact_admin'])
        ->name('contact-admin')
        ->middleware('permission:setting_view');
    Route::get('/admin/get_live_notifications', [AdminController::class, 'live_notifications'])
        ->name('live_notifications');

    Route::post('/update-config', [AdminController::class, 'update_config'])
        ->name('update-config');

    Route::get('admin/new_commande', [AdminController::class, 'new_commande'])
        ->name('new_commande')
        ->middleware('permission:order_add');

    Route::post('admin/add_note', [AdminController::class, 'add_note'])
        ->name('add_note')
        ->middleware('permission:order_edit');


    Route::get('/admin/commande/{id}/edit_commande', [AdminController::class, 'edit_commande'])
        ->name('edit_commande')
        ->middleware('permission:order_edit');






    Route::group(['middleware' => 'role:admin'], function () {

        Route::get('/admin/personnel/delete/{id}', [AdminController::class, 'delete_personnel'])
            ->name('delete_personnel');

        Route::post('/admin/update-personnel-permissions', [AdminController::class, 'update_permission'])
            ->name('update-personnel-permissions');

    

        //gestion des routes pour le forumlaire de contact
        Route::get('/admin/admin_contact_form', [AdminController::class, 'admin_contact_form'])
            ->name('admin_contact_form');

        Route::get('/admin/supprimer_messages/{id}', [AdminController::class, 'supprimer_messages'])
            ->name('supprimer_messages');




        //getion des banniers
        Route::get('/admin/banner/index', [BannersController::class, 'index'])
            ->name('banner.index');
        Route::get('/admin/banner/{id}', [BannersController::class, 'index_update'])
            ->name('banner.update');
    });




    //reserver au developper
    Route::group(['middleware' => 'developper'], function () {
        Route::get('/admin/developper', [DevelopperController::class, 'developper'])
            ->name('developper');
        Route::get('/admin/add-template', [DevelopperController::class, 'add_template'])
            ->name('add-template');
        Route::get('/admin/edit-template/{id}', [DevelopperController::class, 'edit_template'])
            ->name('edit-template');
        Route::post('/admin/post-template', [DevelopperController::class, 'post_template'])
            ->name('post-template');
        Route::get('/admin/importation-excel', [DevelopperController::class, 'importation_excel'])
            ->name('importation_excel');
    });



});





require __DIR__ . '/auth.php';
