<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            "name" => ['required', 'string', 'min:2', 'max:255'],
            "email" => ['required', 'string', 'min:2', 'max:255', 'email'],
            "content" => ['required', 'string', 'min:2',],
        ];
    }
    public function messages(): array {
        return [
            'name.required' => 'Please enter your name.|الرجاء إدخال اسمك.',
            'email.required' => 'We need your email so we can reply!|نحتاج إلى بريدك الإلكتروني للرد عليك.',
            'content.required' => 'You forgot to write your message.|نسيت كتابة الرسالة.',
            'content.min' => 'Your message seems too short. Please elaborate a bit more.|الرسالة قصيرة جدًا، يرجى التوضيح أكثر.',
            'content.max' => 'Whoa! This is long. Try to keep it under 255 characters.|"واو! هذا طويل. حاول أن تبقيه أقل من 255 حرفًا."',
        ];
    }
}
