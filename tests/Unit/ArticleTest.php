<?php

namespace Tests\Unit;

use App\Models\CategoryArticle;
use App\Models\User;
use Database\Factories\UserFactory;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store()
    {
        $userCount = User::all()->count();
        $categoryCount = CategoryArticle::all()->count();
        $data = [
            "title" => $this->faker->sentence,
            "content" => $this->faker->paragraph,
            "image" => "/images/articles/m1.jpg",
        ];

        $user = User::factory()->create();
        $this->actingAs($user, "api")
            ->post(route('articles.store'), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }
}
