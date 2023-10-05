<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
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

        //dd($this->route());
        // hamasho bebinid chie
        // dd($this->route()->originalParameter('book'));
        // dd($this->route()->originalParameters());
        //dd $this->route('book')->id
        return [
//            'name' => ['required', Rule::unique('books', 'name')->ignore($this->route('book')->id)],
            'name' => ['required', Rule::unique('books', 'name')->ignore($this->route()->originalParameter('book'))],
            'isbn' => ['required'],
            'price' => ['required']
        ];
    }
}
