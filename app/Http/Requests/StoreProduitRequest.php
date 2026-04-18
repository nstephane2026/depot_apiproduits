<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProduitRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string'
        ];
    }

    public function messages():array
    {
        return [
            'nom.required' => 'le nom est obligatoire',
            'nom.string' => 'le nom doit etre une chaine de caractere',
            'prix.required' => 'le prix est obligatoire',
            'prix.numeric' => 'le prix doit etre un nombre',
            'prix.min' => 'le prix doit etre superieur ou egal a 0'
        ];
    }
}
