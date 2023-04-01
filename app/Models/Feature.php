<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'stock',
        'users_num',
        'products_num',
        'monthly_reports_num',
        'purchases',
        'monthly_purchases_inv_num',
        'daily_reports_notifications',
        'owner_app',
        'link_branches',
        'customers_sms',
        'link_external_channel',
        'walaa_app',
        'link_ecommerce',
        'ecommerce',
        'main_warehouse',
        'add_user',
        'acc_tax_reports',
        'request_from_suppliers',
        'auto_stocktaking',
        'year_subscription',
        'recommended_for',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
