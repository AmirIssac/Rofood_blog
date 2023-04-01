@extends('layout.dashboard_main')
@section('content')


<!-- Edit Blog FORM -->
@if(!$package->feature)  {{-- there is no feature record yet --}}
        <form action="{{route('package.update',$package->id)}}" method="POST" class="form">
            @csrf
            <div class="formHeader row">
                <h2 class="text-1 fl">الباقة {{$package->name}}</h2>
                <div class="fr">
                    <button type="submit" class="btnSave bg-1 text-fff text-bold fr">Update</button>
                </div>
            </div>
            <div class="formBody row">
                <div class="column s-6">
                    <label class="inputGroup">
                        <span>مخزون</span>
                        <span><input type="text" name="stock" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>عدد المستخدمين</span>
                        <span><input type="text" name="users_num" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>عدد الاصناف</span>
                        <span><input type="text" name="products_num" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>عدد التقارير الشهرية</span>
                        <span><input type="text" name="monthly_reports_num" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>تسجيل المشتريات</span>
                        <span><input type="text" name="purchases" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>عدد الفواتير الشهرية للمشتريات</span>
                        <span><input type="text" name="monthly_purchases_inv_num" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>تنبيهات بالتقارير اليومية</span>
                        <span><input type="text" name="daily_reports_notifications" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>تطبيق للمالك</span>
                        <span><input type="text" name="owner_app" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>ربط بين الفروع</span>
                        <span><input type="text" name="link_branches" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>رسائل للعملاء</span>
                        <span><input type="text" name="customers_sms" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>ربط مع قناة خارجية</span>
                        <span><input type="text" name="link_external_channel" value="" required></span>
                    </label>
                </div>
                <div class="column s-6">
                    <label class="inputGroup">
                        <span>برنامج ولاء</span>
                        <span><input type="text" name="walaa_app" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>ربط مع المتجر الالكتروني</span>
                        <span><input type="text" name="link_ecommerce" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>متجر الكتروني</span>
                        <span><input type="text" name="ecommerce" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>مستودع رئيسي</span>
                        <span><input type="text" name="main_warehouse" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>اضافة مستخدم</span>
                        <span><input type="text" name="add_user" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>الاقرارات الضريبية</span>
                        <span><input type="text" name="acc_tax_reports" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>الطلب من الموردين</span>
                        <span><input type="text" name="request_from_suppliers" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>خدمة جرد المخزون تلقائي</span>
                        <span><input type="text" name="auto_stocktaking" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>قيمة الاشتراك السنوي</span>
                        <span><input type="text" name="year_subscription" value="" required></span>
                    </label>
                    <label class="inputGroup">
                        <span>التوصيات</span>
                        <span><input type="text" name="recommended_for" value="" required></span>
                    </label>
                    {{--
                    <label class="inputGroup hide">
                        <span>Brand</span>
                        <span>
                            <input type="text" name="cate">
                            <select name="brand">
                                <option value="cate01">Brand01</option>
                                <option value="cate02">Brand02</option>
                            </select>
                        </span>
                    </label>
                    --}}

                </div>

            </div>
        </form>
@else
<form action="{{route('package.update',$package->id)}}" method="POST" class="form">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">الباقة {{$package->name}}</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">Update</button>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <span>مخزون</span>
                <span><input type="text" name="stock" value="{{$package->feature->stock}}" required></span>
            </label>
            <label class="inputGroup">
                <span>عدد المستخدمين</span>
                <span><input type="text" name="users_num" value="{{$package->feature->users_num}}" required></span>
            </label>
            <label class="inputGroup">
                <span>عدد الاصناف</span>
                <span><input type="text" name="products_num" value="{{$package->feature->products_num}}" required></span>
            </label>
            <label class="inputGroup">
                <span>عدد التقارير الشهرية</span>
                <span><input type="text" name="monthly_reports_num" value="{{$package->feature->monthly_reports_num}}" required></span>
            </label>
            <label class="inputGroup">
                <span>تسجيل المشتريات</span>
                <span><input type="text" name="purchases" value="{{$package->feature->purchases}}" required></span>
            </label>
            <label class="inputGroup">
                <span>عدد الفواتير الشهرية للمشتريات</span>
                <span><input type="text" name="monthly_purchases_inv_num" value="{{$package->feature->monthly_purchases_inv_num}}" required></span>
            </label>
            <label class="inputGroup">
                <span>تنبيهات بالتقارير اليومية</span>
                <span><input type="text" name="daily_reports_notifications" value="{{$package->feature->daily_reports_notifications}}" required></span>
            </label>
            <label class="inputGroup">
                <span>تطبيق للمالك</span>
                <span><input type="text" name="owner_app" value="{{$package->feature->owner_app}}" required></span>
            </label>
            <label class="inputGroup">
                <span>ربط بين الفروع</span>
                <span><input type="text" name="link_branches" value="{{$package->feature->link_branches}}" required></span>
            </label>
            <label class="inputGroup">
                <span>رسائل للعملاء</span>
                <span><input type="text" name="customers_sms" value="{{$package->feature->customers_sms}}" required></span>
            </label>
            <label class="inputGroup">
                <span>ربط مع قناة خارجية</span>
                <span><input type="text" name="link_external_channel" value="{{$package->feature->link_external_channel}}" required></span>
            </label>
        </div>
        <div class="column s-6">
            <label class="inputGroup">
                <span>برنامج ولاء</span>
                <span><input type="text" name="walaa_app" value="{{$package->feature->walaa_app}}" required></span>
            </label>
            <label class="inputGroup">
                <span>ربط مع المتجر الالكتروني</span>
                <span><input type="text" name="link_ecommerce" value="{{$package->feature->link_ecommerce}}" required></span>
            </label>
            <label class="inputGroup">
                <span>متجر الكتروني</span>
                <span><input type="text" name="ecommerce" value="{{$package->feature->ecommerce}}" required></span>
            </label>
            <label class="inputGroup">
                <span>مستودع رئيسي</span>
                <span><input type="text" name="main_warehouse" value="{{$package->feature->main_warehouse}}" required></span>
            </label>
            <label class="inputGroup">
                <span>اضافة مستخدم</span>
                <span><input type="text" name="add_user" value="{{$package->feature->add_user}}" required></span>
            </label>
            <label class="inputGroup">
                <span>الاقرارات الضريبية</span>
                <span><input type="text" name="acc_tax_reports" value="{{$package->feature->acc_tax_reports}}" required></span>
            </label>
            <label class="inputGroup">
                <span>الطلب من الموردين</span>
                <span><input type="text" name="request_from_suppliers" value="{{$package->feature->request_from_suppliers}}" required></span>
            </label>
            <label class="inputGroup">
                <span>خدمة جرد المخزون تلقائي</span>
                <span><input type="text" name="auto_stocktaking" value="{{$package->feature->auto_stocktaking}}" required></span>
            </label>
            <label class="inputGroup">
                <span>قيمة الاشتراك السنوي</span>
                <span><input type="text" name="year_subscription" value="{{$package->feature->year_subscription}}" required></span>
            </label>
            <label class="inputGroup">
                <span>التوصيات</span>
                <span><input type="text" name="recommended_for" value="{{$package->feature->recommended_for}}" required></span>
            </label>
            {{--
            <label class="inputGroup hide">
                <span>Brand</span>
                <span>
                    <input type="text" name="cate">
                    <select name="brand">
                        <option value="cate01">Brand01</option>
                        <option value="cate02">Brand02</option>
                    </select>
                </span>
            </label>
            --}}

        </div>

    </div>
</form>
@endif



@endsection
