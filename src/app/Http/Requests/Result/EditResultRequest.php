<?php

namespace App\Http\Requests\Result;

use Illuminate\Foundation\Http\FormRequest;

class EditResultRequest extends FormRequest
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

    public function rules()
    {
        return [
            'time' => 'required',
        ];
    }

    public function attributes() {
        return [
            'time' => '時間',
        ];
    }
}
