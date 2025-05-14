<?php

dataset('contacts', [
    'generated' => [
        'first_name' => fake()->firstName(),
        'last_name' => fake()->lastName(),
        'email' => fake()->email(),
        'phone' => fake()->phoneNumber(),
        'address' => fake()->address(),
        'city' => fake()->city(),
        'region' => fake()->state(),
        'country' => fake()->countryCode(),
        'postal_code' => fake()->postcode(),
    ],
    'Martin' => [
        'first_name' => 'Martin',
        'last_name' => 'Abbott',
        'email' => 'martin.abbott@example.com',
        'phone' => '555-111-2222',
        'address' => '330 Glenda Shore',
        'city' => 'Murphyland',
        'region' => 'Tennessee',
        'country' => 'US',
        'postal_code' => '57851',
    ],

    'Lynn' => [
        'first_name' => 'Lynn',
        'last_name' => 'Kub',
        'email' => 'lynn.kub@example.com',
        'phone' => '555-333-4444',
        'address' => '199 Connelly Turnpike',
        'city' => 'Woodstock',
        'region' => 'Colorado',
        'country' => 'US',
        'postal_code' => '11623',
    ],

]);
