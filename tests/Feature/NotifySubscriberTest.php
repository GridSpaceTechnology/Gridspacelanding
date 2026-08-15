<?php

namespace Tests\Feature;

use App\Mail\SubscriberConfirmation;
use App\Models\NotifySubscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NotifySubscriberTest extends TestCase
{
    use RefreshDatabase;

    public function test_subscribes_a_user_and_sends_confirmation_email(): void
    {
        Mail::fake();

        $response = $this->postJson('/notify-me', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '+2348000000000',
        ]);

        $response->assertOk()->assertJson(['success' => true]);

        $this->assertDatabaseHas('notify_subscribers', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '+2348000000000',
        ]);

        Mail::assertSent(SubscriberConfirmation::class, function ($mail) {
            return $mail->hasTo('jane@example.com');
        });
    }

    public function test_duplicate_email_returns_success_message_without_new_row(): void
    {
        Mail::fake();
        NotifySubscriber::create([
            'name' => 'Existing',
            'email' => 'jane@example.com',
        ]);

        $response = $this->postJson('/notify-me', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $response->assertOk()
            ->assertJson(['success' => true, 'message' => "You're already on the list!"]);

        $this->assertDatabaseCount('notify_subscribers', 1);
        Mail::assertNothingSent();
    }

    public function test_validation_fails_for_invalid_email(): void
    {
        $response = $this->postJson('/notify-me', [
            'name' => 'Jane Doe',
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(422)->assertJsonValidationErrors('email');
        $this->assertDatabaseCount('notify_subscribers', 0);
    }

    public function test_phone_is_optional(): void
    {
        Mail::fake();

        $response = $this->postJson('/notify-me', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $response->assertOk();
        $this->assertDatabaseHas('notify_subscribers', [
            'email' => 'jane@example.com',
            'phone' => null,
        ]);
    }
}
