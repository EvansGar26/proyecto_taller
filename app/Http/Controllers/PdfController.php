<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Dompdf;

use App\Models\Carreras_universidades;
use App\Models\Carreras_favoritas;
use App\Models\Asistencia_conferencias;


class PdfController extends Controller
{
    public function generarPdfUniCar()
    {
        $carreras = Carreras_universidades::orderBy('id_universidad')->get();

        // Crea una instancia de Dompdf
        $dompdf = new Dompdf();

        // Establecer el tamaño y orientación de la página
        $dompdf->setPaper('letter', 'portrait');

        // Carga el contenido HTML de la vista 'tabla.blade.php'
        $html = view('Pdf.pdfUniCar')->with('carreras', $carreras)->render();

        // Carga el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderiza el PDF
        $dompdf->render();

        // Obtener el contenido PDF generado
        $pdf = $dompdf->output();

        // Descarga el PDF
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf;
        }, 'reporte_carreras.pdf');
    }

    public function generarPdfCarFav()
    {
        $favoritas = Carreras_favoritas::orderBy('id_carrera')->get();

        // Crea una instancia de Dompdf
        $dompdf = new Dompdf();

        // Establecer el tamaño y orientación de la página
        $dompdf->setPaper('letter', 'portrait');

        // Carga el contenido HTML de la vista 'tabla.blade.php'
        $html = view('Pdf.pdfCarFav')->with('favoritas', $favoritas)->render();

        // Carga el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderiza el PDF
        $dompdf->render();

        // Obtener el contenido PDF generado
        $pdf = $dompdf->output();

        // Descarga el PDF
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf;
        }, 'reporte_carreras_favoritas.pdf');
    }

    public function generarPdfAsiCon()
    {
        $asistencias = Asistencia_conferencias::orderBy('id_conferencia')->get();

        // Crea una instancia de Dompdf
        $dompdf = new Dompdf();

        // Establecer el tamaño y orientación de la página
        $dompdf->setPaper('letter', 'portrait');

        // Carga el contenido HTML de la vista 'tabla.blade.php'
        $html = view('Pdf.pdfAsiCon')->with('asistencias', $asistencias)->render();

        // Carga el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderiza el PDF
        $dompdf->render();

        // Obtener el contenido PDF generado
        $pdf = $dompdf->output();

        // Descarga el PDF
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf;
        }, 'reporte_asistencia_conferencias.pdf');
    }

}