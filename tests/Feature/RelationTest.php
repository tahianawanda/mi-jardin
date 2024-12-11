<?php

use App\Models\Kingdom;
use App\Models\User;
use App\Models\Plantae;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows a user to have many plants', function () {
    //Create a user
    $user = User::factory()->create();

    //Create three plants asociate the user
    $plants = Plantae::factory()->count(3)->create(['user_id' => $user->id]);

    //Verify the user have three plants
    expect($user->plants)->toHaveCount(3);

    // Verify that the plants belong to user
    expect($user->plants->first()->user->is($user))->toBeTrue();
});

it('ensures a plant belongs to a user', function () {
    //Create a user
    $user = User::factory()->create();

    //Create a plant
    $plants = Plantae::factory()->create(['user_id' => $user->id]);

    //Verify that the plant belong to user
    expect($plants->user->is($user))->toBeTrue();
});


it('ensures a plant belongs to a kingdom', function () {
    $kingdom = Kingdom::factory()->create();
    $user = User::factory()->create();
    $plants = Plantae::factory()->create([
        'kingdom_id' => $kingdom->id,
        'user_id' => $user->id
    ]);

    expect($plants->kingdom->is($kingdom))->toBeTrue();
});

it('ensures a kingdom has many plants', function () {
    $kingdom = Kingdom::factory()->create();
    $user = User::factory()->create();
    $plants = Plantae::factory()->count(3)->create([
        'kingdom_id' => $kingdom->id,
        'user_id' => $user->id
    ]);

    expect($kingdom->plants)->toHaveCount(3);
    expect($kingdom->plants->first())->toBeInstanceOf(Plantae::class);
});
