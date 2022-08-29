<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'customer_id' => 1,
                'customer_name' => 'Lorem ipsum dolor sit amet',
                'customer_address' => 'Lorem ipsum dolor sit amet',
                'customer_postcode' => 1,
                'customer_city' => 'Lorem ipsum dolor sit amet',
                'customer_phonenumber' => 'Lorem ipsum dolor ',
                'customer_email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
