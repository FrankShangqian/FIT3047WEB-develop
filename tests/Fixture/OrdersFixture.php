<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'order_id' => 1,
                'order_date' => '2022-08-29 06:54:02',
                'order_total' => 1.5,
                'order_status' => 1,
                'order_item' => 1,
                'customer_id' => 1,
            ],
        ];
        parent::init();
    }
}
