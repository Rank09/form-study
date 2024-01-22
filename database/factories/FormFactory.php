<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //日本語のダミーデータを作成する場合には、/config/app.phpにあるコードを編集する。　’faker_locale’ => 'ja_JP'に修正
    {
        return [
            'first_name' => $this->faker->lastname,  //firstnameで名前のみ
            'last_name' => $this->faker->firstname,   //lastnameで苗字のみ
            'gender' => $this->faker->numberBetween(0, 2)
        ];
    }
}
