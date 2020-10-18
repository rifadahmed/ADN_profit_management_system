<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Financial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class ProjectController extends Controller
{
    public function index()
    {
        $data['title']="List of Transaction";

        $projects = New Project();
        if(\request('from') != null && \request('to') != null){
            $projects = $projects->whereBetween('lc_or_tt_date',[\request('from'),\request('to')]);
        }
        $projects = $projects->orderBy('id', 'DESC')->paginate(2);
        $projects = $projects->appends(request()->all());
        $data['projects']=$projects;
        $data['serial']    = 1;
        return view('project.index',$data);
    }


    public function create()
    {
        $data['title']="Add New Transaction";
        return view('project.create', $data);
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'lc_or_tt_date' => 'required',
            'style_number_and_order_session' => 'required',
            'lc_number' => 'required',
            'lc_value' => 'required',
            'forward_lc_value' => 'required',
            'advanced_payment' => 'required',
            'outstanding_payment' => 'required',
            'freight_cost' => 'required',
            'shipment_mode' => 'required',
            'shipment_date' => 'required',
            'final_invoice_of_manufacturer' => 'required',
            'final_invoice_amount_of_buyer' => 'required',
            'amount_recieved' => 'required',
            'profits_shared_with_shareholders' => 'required',
            'main_account_balaced_after_profit' => 'required',
            'payment_method' => 'required',
            'payment_record' => 'required',
            'profit_share_outstanding' => 'required',
        ]);


        $post = new Project;
        $post->lc_or_tt_date  = $request->lc_or_tt_date ;
        $post->style_number_and_order_session  = $request->style_number_and_order_session ;
        $post->lc_number  = $request->lc_number ;
        $post->lc_value  = $request->lc_value ;
        $post->forward_lc_value  = $request->forward_lc_value ;
        $post->total_profit_margin  = ($request->lc_value - $request->forward_lc_value);
        $post->advanced_payment  = $request->advanced_payment ;
        $post->outstanding_payment  = $request->outstanding_payment ;
        $post->freight_cost  = $request->freight_cost ;
        $post->shipment_mode  = $request->shipment_mode ;
        $post->shipment_date  = $request->shipment_date ;
        $post->final_invoice_of_manufacturer  = $request->final_invoice_of_manufacturer ;
        $post->final_invoice_amount_of_buyer  = $request->final_invoice_amount_of_buyer ;
        $post->amount_recieved  = $request->amount_recieved ;
        $post->profits_shared_with_shareholders  = $request->profits_shared_with_shareholders ;
        $post->main_account_balaced_after_profit  = $request->main_account_balaced_after_profit ;
        $post->payment_method  = $request->payment_method ;
        $post->payment_record  = $request->payment_record ;
        $post->profit_share_outstanding  = $request->profit_share_outstanding;
        $post->created_by = Auth::User()->name;

        $post->save();

         $shareholders=User::all();
         $total_share_str = Setting::where('key', 'total_share')->first();
         //return $total_share_str->value;
         $total_share = (int)$total_share_str->value;

            foreach($shareholders as $shareholder){
                 $financial= new Financial;
                 $financial->project_id=$post->id;
                 $financial->shareholder_id=$shareholder->id;
                 $financial->share_percentage=((($post->total_profit_margin/ ($total_share))*($shareholder->share))*100)/$post->total_profit_margin;
                 $financial->amount=($post->total_profit_margin/ ($total_share))*($shareholder->share);
                 $financial->save();
            }

            return redirect()->route('project.index');
    }

    public function show($id){
        $title = "Transaction Details";
        $project = Project::find($id);
        $total_share_str = Setting::where('key', 'total_share')->first();
        $total_share = (int)$total_share_str->value;
        $shareholders = Financial::where('project_id',$id)->get();

        $data['title'] = $title;
        $data['project'] = $project;
        $data['total_share'] = $total_share;
        $data['shareholders'] = $shareholders;

        return view('project.show', $data);

    }

    public function edit($id)
    {
            $projects = Project::find($id);
            return view('project.edit')->with('projects', $projects );
    }


    public function update(Request $request, $id){

                $validateData = $request->validate([
                    'lc_or_tt_date' => 'required',
                    'style_number_and_order_session' => 'required',
                    'lc_number' => 'required',
                    'lc_value' => 'required',
                    'forward_lc_value' => 'required',
                    'advanced_payment' => 'required',
                    'outstanding_payment' => 'required',
                    'freight_cost' => 'required',
                    'shipment_mode' => 'required',
                    'shipment_date' => 'required',
                    'final_invoice_of_manufacturer' => 'required',
                    'final_invoice_amount_of_buyer' => 'required',
                    'amount_recieved' => 'required',
                    'profits_shared_with_shareholders' => 'required',
                    'main_account_balaced_after_profit' => 'required',
                    'payment_method' => 'required',
                    'payment_record' => 'required',
                    'profit_share_outstanding' => 'required',
                ]);

                $post = Project::find($id);
                $post->lc_or_tt_date  = $request->lc_or_tt_date ;
                $post->style_number_and_order_session  = $request->style_number_and_order_session ;
                $post->lc_number  = $request->lc_number ;
                $post->lc_value  = $request->lc_value ;
                $post->forward_lc_value  = $request->forward_lc_value ;
                $post->total_profit_margin  = ($request->lc_value - $request->forward_lc_value);
                $post->advanced_payment  = $request->advanced_payment ;
                $post->outstanding_payment  = $request->outstanding_payment ;
                $post->freight_cost  = $request->freight_cost ;
                $post->shipment_mode  = $request->shipment_mode ;
                $post->shipment_date  = $request->shipment_date ;
                $post->final_invoice_of_manufacturer  = $request->final_invoice_of_manufacturer ;
                $post->final_invoice_amount_of_buyer  = $request->final_invoice_amount_of_buyer ;
                $post->amount_recieved  = $request->amount_recieved ;
                $post->profits_shared_with_shareholders  = $request->profits_shared_with_shareholders ;
                $post->main_account_balaced_after_profit  = $request->main_account_balaced_after_profit ;
                $post->payment_method  = $request->payment_method ;
                $post->payment_record  = $request->payment_record ;
                $post->profit_share_outstanding  = $request->profit_share_outstanding;
                $post->updated_by = Auth::User()->name;

                $post->save();

                $total_share_str = Setting::where('key', 'total_share')->first();
                $total_share = (int)$total_share_str->value;
                $shareholders = Financial::where('project_id',$id)->get();

                foreach($shareholders as $shareholder){

                    $each_user_shere = $shareholder->each_person_share->share;

                    $shareholder->amount=($post->total_profit_margin/$total_share)*$each_user_shere;
                    $shareholder->share_percentage=((($post->total_profit_margin/$total_share)*$each_user_shere)*100)/$post->total_profit_margin;
                    $shareholder->save();

                }
               return redirect('/project/index');

    }

    public function destroy(){

    }
}
