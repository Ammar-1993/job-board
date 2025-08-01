<?php

namespace App\Models;


class Jop
{
  public static function all() {
    // This method should return all job entries
    // For now, it can return an empty array or a static list for testing
    return [
        // Example job entries
        ['title' => 'Software Engineer', 'company' => 'Tech Company', 'location' => 'Remote', 'salary' => '1000$'],
        ['title' => 'Product Manager', 'company' => 'Business Inc.', 'location' => 'Los Angeles', 'salary' => '120$'],
        ['title' => 'UX Designer', 'company' => 'Design Studio', 'location' => 'Chicago', 'salary' => '90$'],
        ['title' => 'Data Scientist', 'company' => 'Data Corp', 'location' => 'New York', 'salary' => '500$'],
        ['title' => 'Web Developer', 'company' => 'Web Solutions', 'location' => 'San Francisco', 'salary' => '700$'],
    ];

  }
}
