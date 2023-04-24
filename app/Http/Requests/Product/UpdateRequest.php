<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Summary of UpdateRequest
 */
class UpdateRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required|string',
      'last_name' => 'required|string',
      'email' => 'required|email|unique:users,email,' . $this->user->id,
      'adress' => 'required|string',
    ];
  }

  /**
   * Summary of messages
   * @return array<string>
   */
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
      'adress.required' => 'Обязательное поле',
      'adress.string' => 'Должна быть строка',
    ];
  }
}