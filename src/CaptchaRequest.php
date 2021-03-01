<?php

namespace Masoud5070\Captcha;

use Illuminate\Foundation\Http\FormRequest;

class CaptchaRequest extends FormRequest
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
        if (config('captcha.validation.is_enabled')){
            $rules = [];
            foreach (config('captcha.validation.rules') as $key => $rule) {
                $rules[$key] = $rule;
            }

            return $rules;
        }

        return [];
    }
}
