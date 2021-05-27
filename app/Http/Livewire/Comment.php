<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comment;

    public $comments = [
        [
            'content'       => 'With supporting text below as a natural lead-in to additional content.',
            'created_at'    => '5 min ago',
            'created_by'    => 'Limon Rana'
        ]
    ];

    public function addComment()
    {
        if ($this->comment == "") {
            return;
        }
        array_unshift($this->comments,
            [
                'content'       => $this->comment,
                'created_at'    => Carbon::now()->diffForHumans(),
                'created_by'    => 'Limon Rana'
            ]
        );
        $this->comment = "";
    }


    public function render()
    {
        return view('livewire.comment');
    }
}
