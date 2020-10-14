<?php

namespace App\Http\Controllers;

use pagination;
use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $data['title']="Financial List";
        $financials=new Financial;
        $data['financials']=$financials->orderBy('id', 'DESC')->paginate(10);
        $data['serial']=1;
        return view('financial.index',$data);
    }
}
