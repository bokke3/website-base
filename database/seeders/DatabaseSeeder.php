<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random test users with personal teams
        User::factory(10)->withPersonalTeam()->create();

        // Create a specific test user
        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create an admin user
        $admin = User::factory()->withPersonalTeam()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Set a known password
            'email_verified_at' => now(),
        ]);

        // If using Jetstream Teams, promote the admin
        if ($admin->ownedTeams()->exists()) {
            $team = $admin->ownedTeams()->first();
            $team->users()->attach($admin, ['role' => 'admin']);
        }
    }
}
