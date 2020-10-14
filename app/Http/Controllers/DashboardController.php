<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Financial;
use App\Models\Disburshment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_shareholder']=count(User::all());
        $data['total_project']=count(Project::all());

        $id= Auth::user()->id;
        $data['name']=Auth::user()->name;
        $data['totalAmount']=Financial::where('shareholder_id',$id)->get()->sum('amount');
        $data['totalGet']=Disburshment::where('shareholder_id',$id)->get()->sum('amount');


        return view('dashboard.dashboard',$data);
    }
}
