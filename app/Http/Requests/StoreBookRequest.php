<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:50'],
            'author' => ['required', 'string', 'max:50'],
            'isbn' => ['required', 'string', 'max:13'],
            'genre_id' => ['nullable','exists:genres,id'],
            // 'plot' => ['required', '',''],
            'publishing_year' => ['required', 'numeric'],
            'pages' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.max' => 'Il titolo deve contenere massimo 50 caratteri',

            'author.required' => 'L\' autore è obbligatorio',
            'author.string' => 'L\' autore deve essere una stringa',
            'author.max' => 'L\'autore deve contenere massimo 50 caratteri',

            'isbn.required' => 'L\isbn è obbligatorio',
            'isbn.string' => 'L\isbn deve essere una stringa',
            'isbn.max' => 'L\isbn deve contenere massimo 13 caratteri',

            'genre.exists' => 'Il genere non è valido',
            

            'publishing_year.required' => 'La data è obbligatoria',
            'publishing_year.date' => 'Inserire solo l\'anno',

            'pages.required' => 'Il numero di pagine è obbligatorio',
            'pages.number' => 'Immettere numeri',

            'price.required' => 'Il prezzo è obbligatorio',
            'price.number' => 'Il prezzo deve essere un numero'
        ];
    }
}