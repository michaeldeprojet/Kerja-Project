<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use Illuminate\View\View;


class SuratController extends Controller
{
   
    public function suratpermohonan()
    {
        $mpdf = new \mPDF();

        $fileName = "suratpermohonan1.pdf";
        $mpdf = new \mPDF([
            'margin_left' => 20,
            'margin_right' => 20,
            'margin_top' => 50,
            'margin_bottom' => 30,
            'margin_header' => 20,
            'margin_footer' => 20,
        ]);

        $html = View::make('surat.suratpermohonan');
        $html = $html->render();

        // $mpdf->setHtmlFooter("<div id='bar'></div>
        // <div id='nomor' style='text-align:right;'>nayakateknologi.com</div>");
        // $html = "test";
        // $style = file_get_contents('css/style.css');
        // dd($style);
        // $mpdf->WriteHtml($style, 1);
        
        $mpdf->WriteHtml($html);

        $mpdf->Output($fileName,'I');

       

    }
}