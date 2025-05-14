<?php

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('can store a new contact', function () {
    $payload = [
        'first_name' => fake()->firstName(),
        'last_name' => fake()->lastName(),
        'email' => fake()->email(),
        'phone' => fake()->phoneNumber(),
        'address' => fake()->address(),
        'city' => fake()->city(),
        'region' => fake()->state(),
        'country' => fake()->countryCode(),
        'postal_code' => fake()->postcode(),
    ];

    login()
        ->post(route('contacts.store'), $payload)
        ->assertRedirect(route('contacts'))
        ->assertSessionHas('success', 'Contact created.');

    expect(Contact::count())->toBe(1);

    expect(Contact::first())
        ->first_name->toBe($payload['first_name'])
        ->last_name->toBe($payload['last_name'])
        ->email->toBe($payload['email'])
        ->phone->toBe($payload['phone'])
        ->address->toBe($payload['address'])
        ->city->toBe($payload['city'])
        ->region->toBe($payload['region'])
        ->country->toBe($payload['country'])
        ->postal_code->toBe($payload['postal_code']);

});


test('store contact using dataset', function (string $first_name, string $last_name, string $email, string $phone, string $address, string $city, string $region, string $country, string $postal_code) {
    login()
        ->post(route('contacts.store'),
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'city' => $city,
                'region' => $region,
                'country' => $country,
                'postal_code' => $postal_code,
            ])
        ->assertRedirect(route('contacts'))
        ->assertSessionHas('success', 'Contact created.');

    expect(Contact::first())
        ->first_name->toBe($first_name)
        ->last_name->toBe($last_name)
        ->email->toBe($email)
        ->phone->toBe($phone)
        ->address->toBe($address)
        ->city->toBe($city)
        ->region->toBe($region)
        ->country->toBe($country)
        ->postal_code->toBe($postal_code);
})->with('contacts');
