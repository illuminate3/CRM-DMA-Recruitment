<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/21/2015
 * Time: 4:51 PM
 */

class CustomerController extends BaseController {

    public function getAddCustomer(){

        return View::make('customer.add-customer');

    }

    public function postAddCustomer(){

        $validator = Validator::make(Input::all(),

            array(
                'name'=>  'required|max:100',
                'address'=> 'required|max:200',
                'number'=> 'required|max:100',
                'web'=> 'required|max:500'
            )

        );

        if($validator->fails()){

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $email = 'mhnimesh@gmail.com';
            $name = Input::get('name');
            $address = Input::get('address');
            $number = Input::get('number');
            $web= Input::get('web');

            $customer = new Customer();
            $customer->company_name = $name;
            $customer->address = $address;
            $customer->b_reg_number = $number;
            $customer->website = $web;
            $insertedToCustomer = $customer->save();



            if($insertedToCustomer){

                $data = array('email'=>$email);
                Mail::send('email.email', $data,function($message) use ($data){

                    $message->to($data['email'])->subject('New Customer Added to the System!');
                });

                return Redirect::route('dashboard');
            }else{

                return Redirect::route('customer-add');
            }


        }


    }


    public function getViewCustomer(){

       $customer = Customer::all();

        return View::make('customer.view-customer',array(

            'customers' => $customer

        ));
    }

    public function customerSearch()
    {

        $customerName = Input::get('customer');

        $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")->get();


        return View::make('customer.view-customer', array(

            'customers' => $allCustomers
        ));
    }


    public function customerEdit(){


            $companyName = Input::get('company');


            $companyDetails = Customer::where('company_name', '=', $companyName)->first();
            $companyID = $companyDetails->c_id;

            Session::put('ID' , $companyID);

            return View::make('customer.update-customer',array(

                'company' => $companyDetails
            ));
        }

    public  function postUpdateCustomer(){

        $id = Session::get('ID');

        $validator = Validator::make(Input::all(),

            array(
                'name'=>  'required|max:100',
                'address'=> 'required|max:200',
                'number'=> 'required|max:100',
                'web'=> 'required|max:500'
            )

        );

        if($validator->fails()){

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $name = Input::get('name');
            $address = Input::get('address');
            $number = Input::get('number');
            $web = Input::get('web');

            $customer =  Customer::find($id);

            $customer->company_name = $name;
            $customer->address = $address;
            $customer->b_reg_number = $number;
            $customer->website = $web;
            $updatedToCustomer = $customer->save();

            if($updatedToCustomer){

                return Redirect::route('dashboard');
            }else{

                return Redirect::route('viewCustomers');
            }
        }


    }


    public  function deleteCustomer(){

            $company = Input::get('company');

            $customerDelete = Customer::where('company_name', '=', $company)->first();
            $ID = $customerDelete->c_id;

            $customer =  Customer::find($ID);

            $deleted = $customer->delete();

            if($deleted){

                return Redirect::route('dashboard');
            }else{

                return Redirect::route('viewCustomers');
            }
        }





}