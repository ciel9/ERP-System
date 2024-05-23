<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\PinjamMobil;

class PrintController extends Controller
{
    public function printPDF(Request $request)
    {
       // Get data here, assuming $user and $pinjam_mobil are available
    $pinjam_mobil = PinjamMobil::getData();

    // Load PDF view
    $view = view('pdf_template', compact('pinjam_mobil'))->render();

    // Configure Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);

    // Load HTML content
    $dompdf->loadHtml($view);

    // Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Increase memory limit and execution time
    ini_set('memory_limit', '512M');
    set_time_limit(300); // 5 minutes

    // Render PDF
    $dompdf->render();

    // Output PDF to browser
    return $dompdf->stream("report.pdf");
    }
}
