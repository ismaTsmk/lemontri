<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qrCodeController extends Controller
{
    function qrCodeGenerator(Request $request ){
        if (isset($reuquest->qr)) {
            return  QrCode::size(300)->generate('https://tismatek.com/?ids=');

        }
    }
}
