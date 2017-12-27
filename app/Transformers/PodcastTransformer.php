<?php

namespace App\Transformers;

use App\Models\Podcast;
use League\Fractal\TransformerAbstract;

class PodcastTransformer extends TransformerAbstract
{
    public function transform(Podcast $podcast)
    {
        return [
            'id' => $podcast->id,
            'title' => $podcast->title,
            'description' => $podcast->description,
            'files' => $podcast->files,
            'created_at' => $podcast->created_at->toDateTimeString(),
            'updated_at_human' => $podcast->updated_at->diffForHumans(),
            
        ];
    }
}