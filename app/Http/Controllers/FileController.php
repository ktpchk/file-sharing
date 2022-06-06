<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    // Upload File
    public function store(Request $request)
    {
        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg'];
        $input = $request->validate([
            'file' => 'required|file',
            'comment' => 'nullable|max:255'
        ]);
        $data = [
            'user_id' => 1,
            'name' => $input['file']->getClientOriginalName(),
            'path' => $input['file']->store('uploads/' . date('Y-m')),
            'imagePath' =>  in_array($input['file']->extension(), $imageExtensions) ? $request->file('file')->store('images', 'public') : null,
            'size' => $input['file']->getSize(),
            'comment' => $input['comment']
        ];
        File::create($data);

        return redirect('/')->with('message', 'Файл успешно загружен!');
    }

    // Download File
    public function download(File $file)
    {
        $filePath = $file->path;

        $fileName = $file->name;
        return Storage::download($filePath, $fileName);
    }
}
