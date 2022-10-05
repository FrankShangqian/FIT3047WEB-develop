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
                'order_date' => '2022-10-05',
                'order_total' => 1.5,
                'progress_status' => 1,
                'customer_id' => 1,
                'order_paid' => 1,
            ],
        ];
        parent::init();
    }
}
