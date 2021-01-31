<?php

namespace App\Http\Requests\Result;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResultRequest extends FormRequest
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
            'name' => 'required|max:20',
            'time' => 'required|different:あなた',
        ];
    }

    public function attributes() {
        return [
            'name' => '名前',
            'time' => '時間',
        ];
    }
}
