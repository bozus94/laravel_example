<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            "type" => "notes",
            "id" => $this->id,
            "attributes" => [
                "title" => $this->title,
                "content" => $this->content,
                "timestamps" => [
                    "created" => $this->created_at,
                    "modified" => $this->updated_at
                ]
            ],
            "links" => [
                "self" => "http://example-app.test/api/note/" . $this->id
            ]
        ];
    }
}
