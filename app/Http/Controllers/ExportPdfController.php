<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExportpdfValRequest;
use PDF;
use Session;
use App\ExportPdfs;

class ExportPdfController extends Controller
{

	public function create()
	{
       return view('pdf.create');
	}

    public function list()
    {
       $data = ExportPdfs::orderBy('id','desc')->get();
       return view('pdf.list',compact('data'));
    }

    public function store(ExportpdfValRequest $request)
	{
        $data = new ExportPdfs();
        $data->student_name    = $request->student_name;
        $data->student_email   = $request->student_email;
        $data->student_address = $request->student_address;
        $data->save();
        return redirect()->route('pdf.list')->with('flash_message_success','Record added Successfully');
       
	}

	public function exportpdf($id)
   {

    $data = ExportPdfs::find($id);
    $pdf = PDF::loadView('pdf.exportdata',compact('data'));
    return $pdf->download('students.pdf');
  }
}
