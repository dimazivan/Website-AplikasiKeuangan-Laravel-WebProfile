<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public $status;
    public $message;

    public function __construct($status, $message, $skip, $limit, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
        $this->skip = $skip;
        $this->limit = $limit;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'status'   => $this->status,
            'message'   => $this->message,
            'skip'   => $this->skip,
            'limit'   => $this->limit,
            'data'      => $this->resource
        ];

        // return parent::toArray($request);
    }
}
