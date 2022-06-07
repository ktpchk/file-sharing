<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // Show Latest Files
    public function index(Request $request)
    {
        $searchValue = $request->search;

        return view('files.index', [
            'files' => File::latest()->limit(100)->filter($searchValue)->get(),
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
            'user_id' => auth()->id(),
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

    // Manage Files
    public function manage(Request $request)
    {
        $searchValue = $request->search;
        return view('files.manage', [
            'files' => Auth::user()->files()->latest()->filter($searchValue)->get(),
            'searchValue' => $searchValue
        ]);
    }

    // Show Edit Form
    public function edit(File $file)
    {
        return view('files.edit', ['file' => $file]);
    }

    // Update File Data
    public function update(Request $request, File $file)
    {
        $input = $request->validate([
            'comment' => 'nullable|max:255'
        ]);
        $data = [
            'comment' => $input['comment']
        ];
        $file->update($data);
        return redirect('/files/manage')->with('message', 'Файл успешно отредактирован!');
    }

    // Delete File
    public function destroy(File $file)
    {
        // Make sure logged in user is owner
        if ($file->user_id != auth()->id()) {
            abort(403, 'Недоступное действие');
        }
        $file->delete();
        return redirect('/files/manage')->with('message', 'Файл успешно удален!');
    }
}
