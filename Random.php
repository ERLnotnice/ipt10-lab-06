<?php

require_once 'vendor/autoload.php';

class Random {
    private $faker;

    public function __construct() {
        $this->faker = Faker\Factory::create('en_PH'); // Use Philippines locale
    }

    public function generatePersonData($count = 300) {
        $people = [];
        for ($i = 0; $i < $count; $i++) {
            $people[] = [
                $this->faker->uuid,
                $this->faker->title,
                $this->faker->firstName,
                $this->faker->lastName,
                $this->faker->streetAddress,
                $this->faker->barangay, // Custom method for PH locale
                $this->faker->city,
                $this->faker->province,
                $this->faker->country,
                $this->faker->phoneNumber,
                $this->faker->mobileNumber,
                $this->faker->company,
                $this->faker->url,
                $this->faker->jobTitle,
                $this->faker->safeColorName,
                $this->faker->date('Y-m-d'),
                $this->faker->email,
                $this->faker->password
            ];
        }
        return $people;
    }
}
