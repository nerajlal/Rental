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
    }
}
