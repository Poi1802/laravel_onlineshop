<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
      'name' => 'required|string',
      'last_name' => 'required|string',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|confirmed',
      'adress' => 'required|string',
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Обязательное поле',
      'name.string' => 'Должна быть строка',
      'last_name.required' => 'Обязательное поле',
      'last_name.string' => 'Должна быть строка',
      'email.required' => 'Обязательное поле',
      'email.email' => 'Должно быть в виде something@mail.ru или т.п.',
      'email.unique' => 'Такой email уже есть',
      'password.required' => 'Обязательное поле',
      'password.string' => 'Должна быть строка',
      'password.confirmed' => 'Пароли не идентичны',
      'adress.required' => 'Обязательное поле',
      'adress.string' => 'Должна быть строка',
    ];
  }
}