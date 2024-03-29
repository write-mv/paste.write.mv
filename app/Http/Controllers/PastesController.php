<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasteRequest;
use App\Models\Paste;
use Illuminate\Support\Str;

class PastesController extends Controller
{
    public function post(PasteRequest $request)
    {
        $paste = Paste::fromRequest($request);

        return redirect()->route('show', $paste->hash);
    }

    public function show(Paste $paste)
    {
        $paste->content = Str::replace("\n", '<br />', $paste->content);

        return view('show', compact('paste'));
    }

    public function raw(Paste $paste)
    {
        return view('raw', compact('paste'));
    }

    public function edit(Paste $paste)
    {
        return view('edit', compact('paste'));
    }

    public function fork(PasteRequest $request, Paste $paste)
    {
        $paste = Paste::fromFork($paste, $request);

        return redirect()->route('show', $paste->hash);
    }
}
