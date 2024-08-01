<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    public function rules(): array {
        $method = $this->method;
        if($method == "PUT"){
            return [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'departmentId' => ['required'],
                'siteId' => ['required'],
            ];
        }else{
            return [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'departmentId' => ['sometimes', 'required', 'integer'],
                'siteId' => ['sometimes', 'required', 'integer'],
            ];
        }
    }

    protected function prepareForValidation() {
        if($this->departmentId){
            $this->merge([
                'department_id' => $this->departmentId,
            ]);
        }
        if($this->siteId){
            $this->merge([
                'site_id' => $this->siteId,
            ]);
        }
    }
}
