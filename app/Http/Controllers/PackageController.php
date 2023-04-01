<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //

    public function index(){
        $packages = Package::get();
        return view('admin.package.index',['packages'=>$packages]);
    }

    public function store(Request $request){
        $package = Package::create([
            'name' => $request->name,
        ]);

        return back();
    }

    public function edit($id){
        $package = Package::with('feature')->find($id);
        return view('admin.package.edit',['package' => $package]);
    }

    public function update(Request $request , $id){
        $package = Package::find($id);
        if(!$package->feature){  // create new feature record
            $feature = Feature::create([
                'package_id' => $package->id ,
                'stock' => $request->stock ,
                'users_num'  => $request->users_num ,
                'products_num' => $request->products_num ,
                'monthly_reports_num' => $request->monthly_reports_num,
                'purchases' => $request->purchases,
                'monthly_purchases_inv_num' => $request->monthly_purchases_inv_num,
                'daily_reports_notifications' => $request->daily_reports_notifications,
                'owner_app' => $request->owner_app,
                'link_branches' => $request->link_branches,
                'customers_sms' => $request->customers_sms,
                'link_external_channel' => $request->link_external_channel,
                'walaa_app' => $request->walaa_app,
                'link_ecommerce' => $request->link_ecommerce,
                'ecommerce' => $request->ecommerce,
                'main_warehouse' => $request->main_warehouse,
                'add_user' => $request->add_user,
                'acc_tax_reports' => $request->acc_tax_reports,
                'request_from_suppliers' => $request->request_from_suppliers,
                'auto_stocktaking' => $request->auto_stocktaking,
                'year_subscription' => $request->year_subscription,
                'recommended_for' => $request->recommended_for,
            ]);
            return back();
        }
        else{   // update feature record
            $feature = $package->feature;
            $feature->update([
                'stock' => $request->stock ,
                'users_num'  => $request->users_num ,
                'products_num' => $request->products_num ,
                'monthly_reports_num' => $request->monthly_reports_num,
                'purchases' => $request->purchases,
                'monthly_purchases_inv_num' => $request->monthly_purchases_inv_num,
                'daily_reports_notifications' => $request->daily_reports_notifications,
                'owner_app' => $request->owner_app,
                'link_branches' => $request->link_branches,
                'customers_sms' => $request->customers_sms,
                'link_external_channel' => $request->link_external_channel,
                'walaa_app' => $request->walaa_app,
                'link_ecommerce' => $request->link_ecommerce,
                'ecommerce' => $request->ecommerce,
                'main_warehouse' => $request->main_warehouse,
                'add_user' => $request->add_user,
                'acc_tax_reports' => $request->acc_tax_reports,
                'request_from_suppliers' => $request->request_from_suppliers,
                'auto_stocktaking' => $request->auto_stocktaking,
                'year_subscription' => $request->year_subscription,
                'recommended_for' => $request->recommended_for,
            ]);
        }
        return view('admin.package.edit',['package' => $package]);
    }
}
