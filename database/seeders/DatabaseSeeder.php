<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@perpus.test', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Diva', 'email' => 'siswa@perpus.test', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII RPL 3']);

        Book::create(['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang', 'year' => 2005, 'stock' => 4]);
        Book::create(['title' => 'Harry Potter and the Chamber of Secrets', 'author' => 'J.K. Rowling', 'publisher' => 'Gramedia', 'year' => 2002, 'stock' => 3]);
        Book::create(['title' => 'Tentang Kamu', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2016, 'stock' => 5]);
    }
}