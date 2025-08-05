<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf as PdfToText;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Dompdf\Dompdf;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Storage;
use Spatie\PdfToImage\Pdf as PdfToImage;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Spatie\ImageToText\ImageToText;

class PdfTranslateController extends Controller
{
    public function translateText(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Move to public/pdf/ directory
        $file = $request->file('pdf');
        $filename = $file->getClientOriginalName();
        $destination = public_path('pdf');
        $file->move($destination, $filename);

        $pdfPath = $destination . '/' . $filename;


        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($pdfPath);
        $text = $pdf->getText();
        // $text = $request->input('text');

        $tr = new GoogleTranslate('ar'); // الترجمة إلى العربية
        $translated = $tr->translate($text);

        return view('result', ['translated' => $translated, 'original' => $text]);
    }

    public function extractTextFromImage($imagePath)
    {
        $text = (new TesseractOCR($imagePath))
            ->lang('eng') // يمكنك استخدام 'ara' للغة العربية
            ->run();

        return $text;
    }
    public function translateText2(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Save and sanitize filename
        $originalName = pathinfo($request->file('pdf')->getClientOriginalName(), PATHINFO_FILENAME);
        // $safeName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalName);
        $filename = time() .'.pdf';
        $pdfPath = public_path('pdf/' . $filename);
        $request->file('pdf')->move(public_path('pdf'), $filename);

        // Convert PDF to image
        $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
        $outputPath = public_path("pdf/{$filenameWithoutExt}");

        // $popplerPath = '"C:\Program Files\poppler-24.08.0\Library\bin\pdftoppm.exe"';
        $popplerPath = base_path('tools/poppler-24.08.0/Library/bin/pdftoppm.exe');
        $command = "$popplerPath -f 1 -l 1 -jpeg \"$pdfPath\" \"$outputPath\"";
        exec($command);
        // if (!file_exists($outputPath)) {
        //     return response()->json(['error' => "Image not found at $outputPath"], 500);
        // }
        $imagePath = $outputPath . '-1.jpg';

        // OCR using external API
        $text = $this->extractTextFromImage($imagePath);

        // Translate (optional)
        $tr = new \Stichoza\GoogleTranslate\GoogleTranslate('ar');
        $translated = $tr->translate($text);

        return view('result', [
            'original' => $text,
            'translated' => $translated
        ]);
    }


    public function extractText(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Move to public/pdf/ directory
        $file = $request->file('pdf');
        $filename = $file->getClientOriginalName();
        $destination = public_path('pdf');
        $file->move($destination, $filename);

        $pdfPath = $destination . '/' . $filename;

        try {
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseFile($pdfPath);
            $text = $pdf->getText();
            dd($text);
            return view('pdf_result', ['text' => $text]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to extract text: ' . $e->getMessage()]);
        }
    }
}
