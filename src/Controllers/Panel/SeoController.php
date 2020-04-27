<?php

namespace Chernogolov\Excelshop\Controllers\Panel;

use App\Http\Controllers\Controller;
use Chernogolov\Excelshop\Controllers\PanelController;

class SeoController extends PanelController
{
    /**
     * Show the application categoryes.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return(view('excelshop::panel/seo/index'));
    }
}
