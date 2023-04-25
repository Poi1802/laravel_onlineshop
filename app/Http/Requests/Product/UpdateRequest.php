<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Summary of UpdateRequest
 */
class UpdateRequest extends FormRequest
{
  /**
   * Determine if the Product is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'title' => 'required|string',
      'description' => 'required|string',
      'count' => 'required|numeric',
      'price' => 'required|numeric',
      'published' => 'boolean',
      'category_id' => 'required|numeric|exists:categories,id',
      'tags' => 'required|array',
      'colors' => 'required|array',
      'imgs' => 'array',
    ];
  }

  public function messages()
  {
    return [
      'title.required' => 'Обязательное поле',
      'title.string' => 'Должна быть строка',
      'description.required' => 'Обязательное поле',
      'description.string' => 'Должна быть строка',
      'count.required' => 'Обязательное поле',
      'count.numeric' => 'Должно быть число',
      'price.required' => 'Обязательное поле',
      'price.numeric' => 'Должно быть число',
      'published.required' => 'Обязательное поле',
      'published.boolean' => 'Должно быть да или нет',
      'category_id.required' => 'Обязательное поле',
      'category_id.numeric' => 'Должна быть строка',
      'category_id.exists' => 'Такой категории нет',
      'tags.required' => 'Обязательное поле',
      'tags.array' => 'Должен быть массив',
      'colors.required' => 'Обязательное поле',
      'colors.array' => 'Должен быть массив',
      'imgs.required' => 'Обязательное поле',
      'imgs.array' => 'Должен быть массив',
    ];
  }
}