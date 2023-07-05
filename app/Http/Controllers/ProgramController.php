<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:program_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:program_update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:program_delete', ['only' => 'destroy']);
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string|unique:programs,title',
            'description' => 'required|string',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['thumbnail'] = parse_url($request->thumbnail)['path'];
        $data['status'] = $request->status;


        Program::create($data);
        Alert::toast('Program berhasil ditambahkan', 'success');

        return redirect()->route('program.index');
    }

    public function edit(Program $program)
    {

        return view('programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:programs,title,' . $program->id,
            'description' => 'required|string',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['status'] = $request->status;

        $program->update($data);
        Alert::toast('Program berhasil diubah', 'success');

        return redirect()->route('program.index');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        Alert::toast('Program berhasil dihapus', 'success');

        return back();
    }
}
