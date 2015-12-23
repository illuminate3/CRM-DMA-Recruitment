<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 12/22/2015
 * Time: 10:52 PM
 */

class ActivityController extends BaseController{

    public function getCustomerList(){

        $companies = Customer::all();


        return View::make('activities.customer-list',array(

            'company' => $companies
        ));
    }


    public function activityCompanySearch()
    {

        $customerName = Input::get('customer');

        $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")->get();


        return View::make('activities.customer-list', array(

            'company' => $allCustomers
        ));
    }

    public function addActivity(){

        $company = Input::get('company');
        Session::put('company',$company);

        return View::make('activities.add-activity');

    }

    public function postAddActivity(){

        $company_id = Session::get('company');

        $validator = Validator::make(Input::all(),

            array(
                'type' => 'required|max:100',
                'outcome' => 'required|max:200',
                'name' => 'required|max:100',
                'date' => 'required'

            )

        );

        if ($validator->fails()) {

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $type = Input::get('type');
            $outcome = Input::get('outcome');
            $name = Input::get('name');
            $date = Input::get('date');


            $activity = new Activity();

            $activity->type = $type;
            $activity->outcome = $outcome;
            $activity->sales_p_name = $name;
            $activity->date = $date;
            $activity->cutomer_id = $company_id;

            $insertedToActivity = $activity->save();

            if($insertedToActivity){

                return Redirect::route('dashboard');
            }else{

                return Redirect::route('activityAdd');
            }

        }

        }

    public function viewActivities(){




        $joinedActivities= Activity::leftJoin('customer','cutomer_id','=','c_id')->get();



        return View::make('activities.view-activities',array(

            'activity' => $joinedActivities
        ));
    }

    public function activitySearch(){

        $customerName = Input::get('customer');

        //  $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")  ->get();

        $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")->get();

        return View::make('activities.customer-list', array(

            'company' => $allCustomers
        ));
    }


    public function activityViewSearch(){

        $customerName = Input::get('customer');

        //  $allCustomers = Customer::where('company_name', 'LIKE', "%$customerName%")  ->get();

        $joinedTable = Activity::leftJoin('Customer', 'cutomer_id','=','c_id')->where('company_name','LIKE',"%$customerName%")->get();

        return View::make('activities.view-activities', array(

            'activity' => $joinedTable
        ));
    }

    public function activityEdit(){

        $activity = Input::get('activity');

        $activityDetails = Activity::where('activity_id', '=', $activity)->first();

        $companyID = $activityDetails->cutomer_id;


        Session::put('activityID', $activity);
        Session::put('companyID' , $companyID);
        return View::make('activities.edit-activity',array(

            'activity' => $activityDetails
        ));
    }

    public function postActivityEdit(){

        $activity = Session::get('activityID');
        $company = Session::get('companyID');

        $editedActi = Activity::where('activity_id','=', $activity)->first();

        $validator = Validator::make(Input::all(),

            array(
                'type'=>  'required|max:100',
                'outcome'=> 'required|max:200',
                'name'=> 'required|max:100',
                'date' => 'required'
            )

        );

        if($validator->fails()){

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $type = Input::get('type');
            $outcome = Input::get('outcome');
            $name = Input::get('name');
            $date = Input::get('date');
            $customer = $company;

            $editedActi->type = $type;
            $editedActi->outcome = $outcome;
            $editedActi->sales_p_name = $name;
            $editedActi->date = $date;
            $editedActi->cutomer_id = $customer;

            $updated = $editedActi->save();

            if($updated){

                return Redirect::route('dashboard');
            }else{
                return Redirect::route('activityEdit');
            }


        }


        }


    public function activityDelete(){

        $activity = Input::get('activity');

        $deleteRow = Activity::where('activity_id','=',$activity);

        $deleted = $deleteRow->delete();

        if($deleted){
            return Redirect::route('dashboard');

        }

    }


}