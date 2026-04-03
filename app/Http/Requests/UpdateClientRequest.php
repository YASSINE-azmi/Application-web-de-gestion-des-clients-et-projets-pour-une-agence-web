<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $client = $this->route('client');

        return [
            'nom' => ['required', 'string', 'max:255'],
            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('clients', 'email')->ignore($client?->id),
            ],
            'telephone' => ['nullable', 'string', 'max:50'],
            'entreprise' => ['nullable', 'string', 'max:255'],
        ];
    }
}
