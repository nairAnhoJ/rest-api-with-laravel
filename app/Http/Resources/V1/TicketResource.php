<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        
        return [
            'id' => $this->id,
            'number' => $this->number,
            'userId' => $this->user_id,
            'user' => $this->user,
            'subject' => $this->subject,
            'description' => $this->description,
            'status' => $this->status,
            'resolution' => $this->resolution,
            'startDateTime' => $this->start_date_time,
            'endDateTime' => $this->end_date_time,
        ];
    }
}
