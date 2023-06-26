<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CertificateController extends Controller
{
    public function download(Request $request)
    {
        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Set the PDF options (e.g. paper size, orientation, etc.)
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);

        // Render the certificate view as HTML
        $html = view('certificate', ['name' => $request->user()->name])->render();

        // Load the HTML into Dompdf
        $dompdf->loadHtml($html);

        // Render the PDF
        $dompdf->render();

        // Generate a response with the PDF as the content
        $pdf = $dompdf->output();
        $response = new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="certificate.pdf"',
        ]);

        // Return the response to trigger a download
        return $response;
    }
}