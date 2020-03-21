<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class PublishRequest extends FormRequest
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
            'subject' => 'required|min:5|max:40',
            'message' => 'required|min:15|max:500',
            'author' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:5|max:15',
        ];
    }
    

    public function messages() {
        return [
            'subject.required' => 'Поле заголовок является обязательным',
            'message.required' => 'Поле описания является обязательным',
            'author.required' => 'Поле вашего имени является обязательным',
            'email.required' => 'Поле E-mail является обязательным',
            'phone.required' => 'Поле телефон является обязательным'
        ];
    }



}
