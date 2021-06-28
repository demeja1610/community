<?php

namespace App\Http\Requests\Admin;

use App\Enum\RequestMessagesEnum;
use Illuminate\Foundation\Http\FormRequest;

class ACategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => RequestMessagesEnum::REQUIRED,
            'max' => RequestMessagesEnum::MAX . ':max символов',
        ];
    }
}
