<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
  public static function all(): array {
    return [
      [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000'
      ],
      [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$40,000'
      ]
    ];
  }

    public static function find(int $id): array {
      // find first job with matching id
      $job = Arr::first(self::all(), fn ($job) => $job['id'] === $id);

      // if not found, throw 404
      if ($job === null) {
        abort(404, 'job not found');
      }

      return $job;
    }
}
