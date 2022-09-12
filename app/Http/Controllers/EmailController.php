<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Email;
use App\Exports\EmailsExport;

class EmailController extends Controller
{
    public function export() 
    {
        return Excel::download(new EmailsExport, 'emails.xlsx');
    }
}
