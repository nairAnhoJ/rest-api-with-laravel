<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'departmentId' => ['required', 'integer'],
            'siteId' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'department_id' => $this->departmentId,
            'site_id' => $this->siteId,
        ]);
    }
}
