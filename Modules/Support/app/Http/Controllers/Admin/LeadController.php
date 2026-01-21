<?php

namespace Modules\Support\app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Modules\Core\Http\Requests\DeleteMultiRequest;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->setActive('support');
        $this->setActive('leads');
    }

    public function index()
    {
        $model = Lead::latest()->paginate(config('core.page_size'));

        return view('support::admin.lead.index', compact('model'));
    }

    public function show(Lead $lead)
    {
        return view('support::admin.lead.show', compact('lead'));
    }

    public function deleteMulti(DeleteMultiRequest $request)
    {
        Lead::destroy($request->ids);
        session()->flushMessage(true);

        return redirect()->back();
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        session()->flushMessage(true);

        return redirect()->route('admin.leads.index');
    }

    public function block(Lead $lead)
    {
        $lead->update(['blocked' => true]);
        session()->flushMessage(true);

        return redirect()->back();
    }

    public function unblock(Lead $lead)
    {
        $lead->update(['blocked' => false]);
        session()->flushMessage(true);

        return redirect()->back();
    }
}
