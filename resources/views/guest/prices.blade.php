@extends('layout.main')
@section('link')

<link rel="stylesheet" href="{{asset('css/prices.css')}}">

<style>
    body{
        background-color: #fff;
    }
</style>
@endsection
@section('content')
 <!--Content-->
 <table style="text-align: right;margin-top: 50px;" class="container col-11 t1">
    <thead >
        <tr>
            @forelse($packages as $package)
                <th><h1 style="text-align: right;">{{$package->name}}</h1></th>
            @empty
            <th><h1 style="text-align: right;">لا يوجد باقات للعرض</h1></th>
            @endforelse
            <th><h1 style="text-align: right;">نوع الباقة</h1></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            {{--
            <td ><i class="fa-solid fa-check"></i></td>
            <td><i class="fa-solid fa-check"></i></td>
            <td><i class="fa-solid fa-check"></i></td>
            --}}
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->stock}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>مخزون</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->users_num}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>عدد المستخدمين</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->products_num}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>عدد الأصناف</td>
        </tr>
    <tr>
        @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->monthly_reports_num}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>عدد التقارير الشهرية</td>
        </tr>
    <tr>
        @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->purchases}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>تسجيل المشتريات</td>
        </tr>
    <tr>
        @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->monthly_purchases_inv_num}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>عدد الفواتير الشهرية للمشتريات</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->daily_reports_notifications}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>تنبيهات بالتقارير اليومية</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->owner_app}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td> تطبيق للمالك</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->link_branches}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>ربط بين الفروع</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->customers_sms}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach

            <td>خدمة الرسائل للعملاء (تنبيه العملاء بحالة الطلب و الرسائل الإعلانيه</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->link_external_channel}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach

            <td>ربط مع  قناة خارجية</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->walaa_app}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  برنامج ولاء </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->link_ecommerce}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td> ربط مع المتجر الإلكتروني</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->ecommerce}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  متجر إلكتروني  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->main_warehouse}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  مستودع رئيسي  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->add_user}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  اضافة مستخدم  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->acc_tax_reports}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  الإقرارات الضريبية باشراف محاسب  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->request_from_suppliers}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td> الطلب   من الموردين (قريبا)</td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->auto_stocktaking}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  خدمة جرد المخزون التلقائي  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->year_subscription}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td>  قيمة الإشتراك السنوي  </td>
        </tr>
        <tr>
            @foreach($packages as $package)
            @if($package->feature)
            <td>{{$package->feature->recommended_for}}</td>
            @else
            <td>null</td>
            @endif
            @endforeach
            <td> التوصيات   </td>
        </tr>


</tbody>
</table>
@endsection
