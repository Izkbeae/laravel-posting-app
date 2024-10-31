<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@example.com'], // 条件
            [
                'name' => 'テストユーザー', // 任意の名前
                'email' => 'test@example.com',
                'password' => Hash::make('samurai1234'), // パスワードをハッシュ化
            ]
        );
}
}