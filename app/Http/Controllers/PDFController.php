<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate('string'));
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'qrcode' => $qrcode
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('laraveltuts.pdf');
    }
}
