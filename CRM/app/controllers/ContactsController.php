<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/22/2015
 * Time: 12:26 PM
 */

class ContactsController extends BaseController {


    public function getAddContact(){


        $companies = Customer::all();


        return View::make('contacts.add-contacts',array(

            'company' => $companies
        ));

    }

    public function contactSearch()
    {

        $customerName = Input::get('customer');

        $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")->get();


        return View::make('contacts.add-contacts', array(

            'company' => $allCustomers
        ));
    }

    public function getAddContactDetails(){

        $company = Input::get('company');
        Session::put('company',$company);

        return View::make('contacts.add-contact-details');

    }

    public function postAddContactDetails()
    {

        $company_id = Session::get('company');

        $validator = Validator::make(Input::all(),

            array(
                'name' => 'required|max:100',
                'email' => 'required|email|max:200',
                'number' => 'required|max:100'

            )

        );

        if ($validator->fails()) {

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $name = Input::get('name');
            $email = Input::get('email');
            $number = Input::get('number');

            $contact = new Contact();

            $contact->contact_name = $name;
            $contact->email = $email;
            $contact->contact_number = $number;
            $contact->customer_id = $company_id;
            $insertedToContacts = $contact->save();

            if ($insertedToContacts) {

                return Redirect::route('dashboard');
            } else {

                return Redirect::route('getAddContactDetails');
            }

        }

    }


    public function viewContacts(){


        $allContacts = Contact::all();



        return View::make('contacts.view-contacts',array(

            'contacts' => $allContacts

        ));
    }

    public function contactViewSearch()
    {

        $customerName = Input::get('customer');

      //  $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")  ->get();

        $joinedTable = Contact::leftJoin('Customer', 'customer_id','=','c_id')->where('company_name','LIKE',"%$customerName%")->get();

        return View::make('contacts.view-contacts', array(

            'contacts' => $joinedTable
        ));
    }

    public function deleteContact(){

        $email = Input::get('email');
        $contactDelete = Contact::where('email', '=', $email)->first();


        $deleted = $contactDelete->delete();

        if($deleted){

            return Redirect::route('dashboard');
        }else{}

    }


    public function updateCustomer(){

        $email = Input::get('email');


        $contactDetails = Contact::where('email', '=', $email)->first();
        $companyID = $contactDetails->customer_id;
        $contactID = $contactDetails->contact_id;

        Session::put('companyID', $companyID);
        Session::put('contactID' , $contactID);
        return View::make('contacts.edit-contact',array(

            'contact' => $contactDetails
        ));
    }


    public function postUpdateCustomer(){

        $company = Session::get('companyID');
        $contact = Session::get('contactID');

        $editedContact = Contact::where('contact_id','=',$contact)->first();

        $validator = Validator::make(Input::all(),

            array(
                'name'=>  'required|max:100',
                'email'=> 'required|email|max:200',
                'number'=> 'required|max:100'
            )

        );

        if($validator->fails()){

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $name = Input::get('name');
            $email = Input::get('email');
            $number = Input::get('number');

            $editedContact->contact_name = $name;
            $editedContact->email = $email;
            $editedContact->contact_number = $number;

            $updatedContact = $editedContact->save();

            if($updatedContact){

                return Redirect::route('dashboard');
            }else{

                return Redirect::route('contactEdit');
            }

        }

    }

}