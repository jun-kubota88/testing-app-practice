<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_be_created(): void
    {
        // ユーザー作成テスト（正常系）
        $user = User::factory()->create([
            'name' => 'テストユーザー',
            'email' => 'test@example.com',
]);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => $user->email,
        ]);
    }
    // メールアドレス重複テスト（異常系）
    public function test_duplicate_email_throws_exception()
{
        User::factory()->create([
        'email' => 'test@example.com',
]);

    $this->expectException(\Illuminate\Database\QueryException::class);

        User::factory()->create([
        'email' => 'test@example.com',
]);
}
}

