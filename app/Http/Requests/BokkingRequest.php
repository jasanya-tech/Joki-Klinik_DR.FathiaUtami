<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BokkingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id'             => 'required|exists:users,id',
            'doctor_schedule_id'  => 'required|exists:doctor_schedule,id',
            'code'                => 'required|string|max:32|unique:booking,code',
            'complaint'           => 'required|string',
            'doctor_feedback'     => 'nullable|string',
            'booking_date'        => 'required|date|after_or_equal:today',
            'queue_number'        => 'nullable|integer|min:1',
            'estimated_time'      => 'nullable|date_format:H:i',
            'qr_code_path'        => 'nullable|string|max:255',
            'pdf_path'            => 'nullable|string|max:255',
        ];
    }
}
