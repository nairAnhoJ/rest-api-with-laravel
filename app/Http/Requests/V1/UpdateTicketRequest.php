<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array{
        return [
            'userId' => ['sometimes','required', 'integer'],
            'status' => ['sometimes','required', Rule::in(['P', 'O', 'D'])],
            'startDateTime' => ['sometimes','required', 'date_format:Y-m-d H:i:s'],
            'endDateTime' => ['sometimes','required', 'date_format:Y-m-d H:i:s', 'after:startDateTime'],
        ];
    }

    protected function prepareForValidation() {
        if($this->userId){
            $this->merge([
                'user_id' => $this->userId,
            ]);
        }
        if($this->startDateTime){
            $this->merge([
                'start_date_time' => $this->startDateTime,
            ]);
        }
        if($this->endDateTime){
            $this->merge([
                'end_date_time' => $this->endDateTime,
            ]);
        }
    }
}
