<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceUpdateRequest extends FormRequest
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
        $service = $this->route('service');
        return [
            'title' => ['required', 'string', Rule::unique('services')->ignore($service->id)],
            'description' => ['required', Rule::unique('services')->ignore($service->id)],
            'image' => ['nullable'],
        ];
    }
}
