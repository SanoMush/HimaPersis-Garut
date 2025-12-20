<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
       return [
    'title' => 'required|string|max:255',
    'thumbnail' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
    'content' => 'required|string',
    'author_name' => 'required|string|max:255', 
    'pdf_file' => 'sometimes|file|mimes:pdf|max:5120',
];
    }
}