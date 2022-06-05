<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // Show Latest Files
    public function index(Request $request)
    {
        $searchValue = $request->search;

        return view('files.index', [
            'files' => File::latest()->limit(100)->filter(request('search'))->get(),
            'searchValue' => $searchValue
        ]);
    }

    // Show Single File
    public function show(File $file)
    {
        return view('files.show', [
            'file' => $file
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('files.create');
    }

    // Store File Data
    public function store(Request $request)
    {

        $input = $request->validate([
            'file' => 'required|file',
            'comment' => 'nullable|max:255'
        ]);

        $data = [
            'user_id' => 1,
            'name' => $input['file']->getClientOriginalName(),
            'path' => $input['file']->store('uploads/' . date('Y-m')),
            'size' => $input['file']->getSize(),
            'comment' => $input['comment']
        ];



        File::create($data);

        return redirect('/latest')->with('message', 'Файл успешно загружен!');
    }
}
