<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return[
            'id'=> $this->id,
            'fname'=>$this->fname,
            'lname'=> $this->lname,
            'academic_pos'=>$this->academic_pos,
            'email'=> $this->email,
            'picture'=> $this->picture,
            'author_name' => $this->lname .' '. substr($this->fname,0,1).'.',
            'paper'=>$this->paper

        ];
        return parent::toArray($request);

    }
}
