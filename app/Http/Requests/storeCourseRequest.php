<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:15',
            'description' => 'required|max:60',
            'duration' => 'required|size:2 ',
            'image' => 'required|image'
            // 'imagen' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
        ];
    }
}
