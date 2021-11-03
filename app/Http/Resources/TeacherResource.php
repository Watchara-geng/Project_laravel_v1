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
            'user_id'=> $this->user_id,
            'fname'=>$this->fname,
            'lname'=> $this->lname,
            'academic_pos'=>$this->academic_pos,
            'email'=> $this->email,
            'paper'=>$this->user,

        ];
        return parent::toArray($request);

    }
}
