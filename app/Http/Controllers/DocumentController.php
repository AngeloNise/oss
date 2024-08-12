<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{

    public function index()
    {
        $documents = Document::all();
        dd($documents);
        return view('preevaldoc', compact('documents'));
    }

    public function store(Request $request)
    {
        $document = new Document();

        if ($request->hasFile('letter_of_intent')) {
            $document->letter_of_intent = $request->file('letter_of_intent')->store('documents');
        }
        if ($request->hasFile('application_form')) {
            $document->application_form = $request->file('application_form')->store('documents');
        }
        if ($request->hasFile('pre_numbered_tickets')) {
            $document->pre_numbered_tickets = $request->file('pre_numbered_tickets')->store('documents');
        }
        if ($request->hasFile('official_receipts')) {
            $document->official_receipts = $request->file('official_receipts')->store('documents');
        }
        if ($request->hasFile('control_sheets')) {
            $document->control_sheets = $request->file('control_sheets')->store('documents');
        }
        if ($request->hasFile('reservation_slip')) {
            $document->reservation_slip = $request->file('reservation_slip')->store('documents');
        }
        if ($request->hasFile('goods_services_inspection')) {
            $document->goods_services_inspection = $request->file('goods_services_inspection')->store('documents');
        }
        if ($request->hasFile('statement_of_projected_net')) {
            $document->statement_of_projected_net = $request->file('statement_of_projected_net')->store('documents');
        }

        $document->save();

        return back()->with('success', 'Files uploaded successfully!');
    }
}
