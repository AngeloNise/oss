<?php

namespace App\Http\Controllers\preeval;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fraeval;
use Illuminate\Support\Facades\Auth;

class FRAController extends Controller
{
    public function index()
    {
        return view('/org/auth/preeval');
    }
    public function preevalfra()
    {
        return view('/org/auth/preevalfra');
    }

    public function store(Request $request)
    {
        // Validate the request to ensure files are present and are of allowed types
        $request->validate([
            'Letter_of_Intent' => 'file|mimes:pdf,doc,docx|max:51200',
            'Application_Form' => 'file|mimes:pdf,doc,docx|max:51200',
            'Pre_Numbered_Tickets' => 'file|mimes:pdf,doc,docx|max:51200',
            'Official_Receipts' => 'file|mimes:pdf,doc,docx|max:51200',
            'Control_Sheets' => 'file|mimes:pdf,doc,docx|max:51200',
            'Reservation_Slip' => 'file|mimes:pdf,doc,docx|max:51200',
            'Goods_Services_Inspection' => 'file|mimes:pdf,doc,docx|max:51200',
            'Statement_of_Projected_Net' => 'file|mimes:pdf,doc,docx|max:51200',
        ]);

        $data = new Fraeval();
        $data->user_email = Auth::user()->email;

        // Handle each file individually
        foreach (['Letter_of_Intent', 'Application_Form', 'Pre_Numbered_Tickets', 'Official_Receipts', 'Control_Sheets', 'Reservation_Slip', 'Goods_Services_Inspection', 'Statement_of_Projected_Net'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();
                $file->move('assets', $filename);
                $data->$field = $filename;
            }
        }

        $data->save();

        return redirect()->back()->with('success', 'Files uploaded successfully!');
    }
    
}

