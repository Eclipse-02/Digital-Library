<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desc = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptatum exercitationem deleniti ducimus odio doloremque. Laudantium, velit est. Voluptatum deleniti amet quisquam enim possimus ullam tempora, perferendis nulla fugiat excepturi.";

        \App\Models\Book::create([
            'publisher_id' => 1,
            'category_id' => 1,
            'file_name' => "file-2025-11-16-130831.pdf",
            'cover' => "cover-2025-11-16-130831.png",
            'title' => "Kami (Bukan) Sarjana Kertas",
            'writer' => "J.S. Khairen",
            'desc' => $desc,
            'isbn' => null,
            'year' => 2020,
            'book_count' => 2,
        ]);

        \App\Models\Book::create([
            'publisher_id' => 1,
            'category_id' => 1,
            'file_name' => "file-2025-11-16-121115.pdf",
            'cover' => "cover-2025-11-16-121115.png",
            'title' => "Hujan",
            'writer' => "Tere Liye",
            'desc' => $desc,
            'isbn' => 9786239987879,
            'year' => 2019,
            'book_count' => 3,
        ]);
    }
}
