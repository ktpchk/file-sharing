<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Content;
use App\Models\File;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        $file = File::factory()->create([
            'user_id' => $user->id
        ]);

        Content::factory()->create([
            'file_id' => $file->id
        ]);

        Comment::factory()->create([
            'user_id' =>  $user->id,
            'file_id' => $file->id
        ]);
    }
}
