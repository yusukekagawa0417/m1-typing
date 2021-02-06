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

    // バリデーションで引っかかった際、routeが違うかなんかでエラーになる？？けどまあ、inputタグでバリデーションしてるのでOK
    public function rules()
    {
        return [
            'time' => 'required',
            'time2' => 'required',
        ];
    }

    public function attributes() {
        return [
            'time' => '時間',
            'time2' => '時間2',
        ];
    }
}
