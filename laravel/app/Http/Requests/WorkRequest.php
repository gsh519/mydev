<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'title' => 'required | max:255',
            'summary' => 'required | max:255',
            'body' => 'required',
            'service_url' => 'required | url',
            'twitter_check' => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'summary' => 'プロジェクトの概要',
            'body' => '本文',
            'service_url' => 'サービスURL',
            'twitter_check' => 'ツイッター投稿の確認',
        ];
    }
}
