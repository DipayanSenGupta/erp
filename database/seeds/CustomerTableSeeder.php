<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
        $faker->addProvider(new Faker\Provider\ar_SA\Payment($faker));
        $faker->addProvider(new Faker\Provider\de_DE\Payment($faker));
        $faker->addProvider(new Faker\Provider\en_US\Text($faker));

        foreach (range(1, 50) as $index) {
            Customer::create([
                'refNo' => $faker->creditCardNumber,
                'customer_name' => $faker->name,
                'city' => $faker->city,
                'country' => $faker->country,
                'telephone' => $faker->phoneNumber,
                'mobile' =>  $faker->phoneNumber,
                'fax' => $faker->e164PhoneNumber,
                'contact_person' => $faker->name,
                'email_id' => $faker->email,
                'address' => $faker->address,
                'account_number' => $faker->bankAccountNumber,
                'swift_code' => $faker->swiftBicNumber,
                'bank_name' => $faker->bank,
                'account_details' => $faker->realText($maxNbChars = 40, $indexSize = 2)
            ]);
        }
    }
}
