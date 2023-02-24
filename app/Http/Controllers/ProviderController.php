<?php

namespace App\Http\Controllers;

use App\ServiceTime;
use App\User;
use Illuminate\Http\Request;

class ProviderController
{
    public function categories(Request $request, $username)
    {

        $provider = User::where('username', $username)->first();

    }

    public function byServiceGetDates(Request $request, $service)
    {
        return ServiceTime::select('id', 'service_id', 'date')
            ->where('service_id', $service->id)
            ->where('date', '>=', date('Y/m/d'))
            ->groupBy('date')->get();
    }

    public function byDateGetTimes(Request $request, $service, $date)
    {
        $c_date = date('Y/m/d', ($date + 86400));
        $t_date = date('Y-m-d', ($date + 86400));
        $times = $service->serviceTimes->where('date', $c_date);
        $amount = $service->amount;
    }
}
