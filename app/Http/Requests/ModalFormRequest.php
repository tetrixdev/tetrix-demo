<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class ModalFormRequest extends FormRequest
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
        $june2025 = Carbon::parse('2025-06-01');
        $date1Required = $this->input('date1') && Carbon::parse($this->input('date1'))->lt($june2025);

        Log::debug('We\'re in the rules method');

//        dump('Session ID:', [session()->getId()]);
//        dump('Request is Precognition:', [$this->header('Precognition')]);
//        dump('Old input:', [session()->getOldInput()]);
//        dump('Validation errors:', session('errors') ? session('errors')->all() : []);
//        dd('Full session:', session()->all());

        return [
            'date1' => 'required|date',
            'date2' => [
                'required',
                'date',
                'after_or_equal:date1',
            ],
            'text' => [
                Rule::requiredIf($date1Required),
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'date1.required' => 'The start date is required',
            'date2.required' => 'The end date is required',
            'date2.after_or_equal' => 'The end date must be after or equal to the start date',
            'text.required' => 'Text is required when the start date is before June 1, 2025',
        ];
    }
}
