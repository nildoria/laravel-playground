<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'CEO',
                'company' => 'Google',
                'salary' => '$200,000',
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'company' => 'XYZ Company',
                'salary' => '$100,000',
            ],
            [
                'id' => 3,
                'title' => 'API Developer',
                'company' => 'ABC Company',
                'salary' => '$150,000',
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}