<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaperResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {return[

        'id'=> $this->id,
        'paper_name'=>$this->paper_name,
        'paper_type'=> $this->paper_type,
        'paper_sourcetitle'=>$this->paper_sourcetitle,
        'paper_url'=> $this->paper_url,
        'paper_yearpub'=> $this->paper_yearpub,
        'paper_volume' => $this->paper_volume ,
        'paper_issue' => $this->paper_issue ,
        'paper_citation' => $this->paper_citation ,
        'paper_page' => $this->paper_page ,
        'paper_doi' => $this->paper_doi ,
        'author'=>$this->author

    ];
        return parent::toArray($request);
    }
}
