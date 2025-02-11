<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required |min:12',
            'subtitle' => 'required',
            'body' => 'required',
            'img' => 'image | mimes:jpg,bmp,png',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il campo "Titolo" è obbligatorio',
            'title.min' => 'Il titolo deve essere almeno di 12 caratteri',
            'subtitle.required' => 'Il campo "Sottotitolo" è obbligatorio',
            'body.required' => 'Il campo "Corpo articolo" è obbligatorio',
            'img.image' => 'Formato non supportato',
            'img.mimes' => 'Formato non supportato'
        ];
    }
}
