<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $users = User::get();

        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('Pdfbar', $data);

        return $pdf->download('laraveltuts.pdf');
    }
}
