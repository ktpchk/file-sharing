<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
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
        $audioExtensions = ['mp3', 'wav'];
        $videoExtensions = ['mp4'];
        $mediaExtensions = array_merge($imageExtensions, $audioExtensions, $videoExtensions);

        $input = $request->validate([
            'file' => 'required|file|max:8192',
            'description' => 'nullable|max:255'
        ]);

        $fileData = [
            'user_id' => auth()->id(),
            'name' => $input['file']->getClientOriginalName(),
            'path' => $input['file']->store('uploads/' . date('Y-m')),
            'size' => $input['file']->getSize(),
            'description' => $input['description']
        ];
        $file = File::create($fileData);

        if (in_array($input['file']->extension(), $mediaExtensions)) {
            if (in_array($input['file']->extension(), $imageExtensions)) {
                $type = 'image';
            } elseif (in_array($input['file']->extension(), $audioExtensions)) {
                $type = 'audio';
            } elseif (in_array($input['file']->extension(), $videoExtensions)) {
                $type = 'video';
            }

            $contentData = [
                'file_id' => $file->id,
                'type' => $type,
                'path' => $input['file']->store($type, 'public')
            ];
            Content::create($contentData);
        }

        return redirect('/')->with('message', 'File uploaded successfully !');
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
            'description' => 'nullable|max:255'
        ]);
        $data = [
            'description' => $input['description']
        ];
        $file->update($data);
        return redirect('/files/manage')->with('message', 'File edited successfully!');
    }

    // Delete File
    public function destroy(File $file)
    {
        // Make sure logged in user is owner
        if ($file->user_id != auth()->id()) {
            abort(403, 'Недоступное действие');
        }

        if ($file->content) {
            Storage::delete('public/' . $file->content->path);
        }
        $file->delete();
        Storage::delete($file->path);


        return redirect('/files/manage')->with('message', 'File deleted successfully!');
    }

    // Add comment
    public function addComment(Request $request, File $file)
    {
        $formFields = $request->validate([
            'body' => 'required|max:3000'
        ]);

        $formFields['parent_id'] = $request->parent_id ?? null;
        $formFields['user_id'] = auth()->id();
        $formFields['file_id'] = $file->id;


        Comment::create($formFields);

        return back()->with('message', 'Comment successfully leaved!');
    }
}
