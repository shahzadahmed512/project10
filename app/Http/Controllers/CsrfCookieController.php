<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController as SanctumCsrfCookieController;

class CsrfCookieController extends SanctumCsrfCookieController
{
    /**
     * Return a response that sets the CSRF cookie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Request $request)
    {
        return parent::show($request);
    }
}
