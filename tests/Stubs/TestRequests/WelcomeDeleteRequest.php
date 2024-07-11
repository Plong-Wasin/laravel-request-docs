<?php

namespace Rakutentech\LaravelRequestDocs\Tests\Stubs\TestRequests;

use Illuminate\Foundation\Http\FormRequest;

class WelcomeDeleteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'message_param' => 'nullable|string',
        ];
    }
}
