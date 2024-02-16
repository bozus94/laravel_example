<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    public function index(): JsonResource
    {
        return NoteResource::collection(Note::all());
    }

    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json(['note' => $note, 'success' => true], 201);
    }

    public function show(Note $note): JsonResponse
    {
        return response()->json(['note' => $note], 200);
    }

    public function update(NoteRequest $request, Note $note): JsonResponse
    {
        $noted = $note->update($request->all());
        return response()->json(['note' => $noted, 'success' => true], 200);
    }

    public function destroy(Note $note): JsonResponse
    {
        $note->delete();

        return response()->json(['note' => $note, 'success' => true]);
    }
}
