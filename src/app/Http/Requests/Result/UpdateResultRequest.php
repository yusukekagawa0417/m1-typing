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
        // バリデーションで引っかかった際、routeが違うかなんかでエラーになる？？けどまあ、inputタグでバリデーションしてるのでOK
        return [
            'name' => 'required',
        ];
    }

    public function attributes() {
        return [
            'name' => '名前',
        ];
    }
}
