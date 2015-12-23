<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*-------------------------------------------- Authenticated Group ---------------------------------------------------*/

/*--------------------------------------------- Dashboard Routes ------------------------------------------------------*/

Route::get('dashboard', array(

    'as' => 'dashboard',
    'uses' => 'DashboardController@getAdminDashboard'
));

Route::get('/', array(

    'as' => 'login',
    'uses' => 'DashboardController@getLogin'
));






/*---------------------------------------------- Customer Routes --------------------------------------------------------*/

Route::get('customer/add', array(

    'as' => 'customer-add',
    'uses' => 'CustomerController@getAddCustomer'

));

Route::post('customer/add', array(

    'as' => 'customer-add-post',
    'uses' => 'CustomerController@postAddCustomer'

));


Route::get('customer/view', array(

    'as' => 'viewCustomers',
    'uses' => 'CustomerController@getViewCustomer'

));

Route::get('customer/search', array(

    'as' => 'search',
    'uses' => 'CustomerController@customerSearch'

));

Route::get('customer/edit', array(

    'as' => 'editCustomer',
    'uses' => 'CustomerController@customerEdit'

));

Route::post('customer/update', array(

    'as' => 'update-post',
    'uses' => 'CustomerController@postUpdateCustomer'

));

Route::get('customer/delete', array(

    'as' => 'deleteCustomer',
    'uses' => 'CustomerController@deleteCustomer'

));



/*-------------------------------------------------- Contacts Routes -----------------------------------------------------*/


Route::get('contact/add', array(

    'as' => 'getAddContact',
    'uses' => 'ContactsController@getAddContact'

));

Route::get('contact/add/details',array(

    'as' => 'getAddContactDetails',
    'uses' => 'ContactsController@getAddContactDetails'

));

Route::post('contact/add/details',array(

    'as' => 'getAddContactDetails-post',
    'uses' => 'ContactsController@postAddContactDetails'

));

Route::get('contact/search', array(

    'as' => 'contactSearch',
    'uses' => 'ContactsController@contactSearch'

));


Route::get('contact/view', array(

    'as' => 'contactView',
    'uses' => 'ContactsController@viewContacts'

));

Route::get('contact/search/view', array(

    'as' => 'contactViewSearch',
    'uses' => 'ContactsController@contactViewSearch'

));

Route::get('contact/delete', array(

    'as' => 'contactDelete',
    'uses' => 'ContactsController@deleteContact'

));

Route::get('contact/edit', array(

    'as' => 'contactEdit',
    'uses' => 'ContactsController@updateCustomer'

));

Route::post('contact/edit-post', array(

    'as' => 'contactEdit-post',
    'uses' => 'ContactsController@postUpdateCustomer'

));


/*---------------------------------------------------------- Activity Routes ----------------------------------------------------*/

Route::get('activity/customer-list', array(

    'as' => 'activityCustomerList',
    'uses' => 'ActivityController@getCustomerList'

));

Route::get('activity/search', array(

    'as' => 'activitySearch',
    'uses' => 'ActivityController@activityCompanySearch'

));


Route::get('activity/add', array(

    'as' => 'activityAdd',
    'uses' => 'ActivityController@addActivity'

));

Route::post('activity/add', array(

    'as' => 'activityAdd-post',
    'uses' => 'ActivityController@postAddActivity'

));

Route::get('activity/view',array(

    'as' => 'viewActivity',
    'uses' => 'ActivityController@viewActivities'

));

Route::get('activity/search', array(

    'as' => 'activitySearch',
    'uses' => 'ActivityController@activitySearch'

));

Route::get('activity/view/search',array(

    'as' => 'activityViewSearch',
    'uses' => 'ActivityController@activityViewSearch'
));


Route::get('activity/edit', array(

    'as' => 'activityEdit',
    'uses' => 'ActivityController@activityEdit'

));

Route::post('activity/edit',array(

    'as' => 'activityEdit-post',
    'uses' => 'ActivityController@postActivityEdit'
));

Route::get('activity/delete', array(

    'as' => 'activityDelete',
    'uses' => 'ActivityController@activityDelete'

));