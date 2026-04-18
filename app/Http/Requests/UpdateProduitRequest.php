<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProduitRequest extends FormRequest
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
            'nom' => 'sometimes|string|max:255',
            'prix' => 'sometimes|numeric|min:0',
            'description' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
          return [
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'prix.numeric' => 'Le prix doit être un nombre.',
            'prix.min' => 'Le prix doit être supérieur ou égal à 0.'
        ];
    }
}
