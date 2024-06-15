<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function store(Request $request, $formId)
    {
        $form = Form::findOrFail($formId);
        $user = Auth::user();
        $bookmarked = false;

        if ($user->bookmarks()->where('form_id', $formId)->exists()) {
            $user->bookmarks()->detach($form);
            $message = 'Form unbookmarked successfully.';
        } else {
            $user->bookmarks()->attach($form);
            $bookmarked = true;
            $message = 'Form bookmarked successfully.';
        }

        return response()->json(['message' => $message, 'bookmarked' => $bookmarked]);
    }

    public function destroy(Request $request, $formId)
    {
        $form = Form::findOrFail($formId);
        Auth::user()->bookmarks()->detach($form);

        return response()->json(['message' => 'Form unbookmarked successfully.']);
    }
    public function index()
    {
        $bookmarks = Auth::user()->bookmarks; // Retrieve all bookmarked forms for the authenticated user

        return view('bookmark', compact('bookmarks'));
    }
}
