<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 11/15/2015
 * Time: 9:19 PM
 */

class DashboardController extends BaseController {


    public function getLogin(){

        return View::make('login');
    }

    public function getAdminDashboard(){

        $customerCount = Customer::count('c_id');
        $contactsCount = Contact::count('contact_id');
        $totalActi = Activity::count('activity_id');

        $comp = Customer::all()->take(5);




       return View::make('dashboard',array(

           'customers' => $customerCount,
           'contactCount' => $contactsCount,
           'activity' => $totalActi,
           'company' => $comp

       ));

    }



}