<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Carbon\Carbon;

class AdminBaseController extends BaseController
{
    public function __construct()
    {
        $config = $this->getSiteConfig();
        $expiryDate = Carbon::createFromFormat('d-m-Y', $config['business']['expiry_date']);

        if (Carbon::now()->greaterThan($expiryDate)) {
            abort(response(view('test')));
        }

        $expiry_warning = null;
        if (Carbon::now()->addMonth()->greaterThan($expiryDate) && Carbon::now()->lessThan($expiryDate)) {
            $expiry_warning = 'Your free plan will expire on ' . $expiryDate->format('d/m/Y');
        }

        view()->share('expiry_warning', $expiry_warning);
    }
}
