<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $order_id
 * @property \Cake\I18n\FrozenTime $order_date
 * @property string $order_total
 * @property bool $order_status
 * @property int $order_item
 * @property int $customer_id
 *
 * @property \App\Model\Entity\Customer $customer
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'order_date' => true,
        'order_total' => true,
        'order_status' => true,
        'order_item' => true,
        'customer_id' => true,
        'customer' => true,
    ];
}
