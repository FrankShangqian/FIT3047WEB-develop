<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderLineFixture
 */
class OrderLineFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'order_line';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'orderline_id' => 1,
                'product_id' => 1,
                'order_quantity' => 1,
                'order_id' => 1,
            ],
        ];
        parent::init();
    }
}
