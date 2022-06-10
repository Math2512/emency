<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
    public function generate () 
    {

    	$qrcode = QrCode::size(200)->generate("https://www.emency.fr");
    	
    	return view("simple-qrcode", compact('qrcode'));
    }
}
