<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $order_id
 * @property \Cake\I18n\FrozenDate $order_date
 * @property string|null $order_total
 * @property bool|null $progress_status
 * @property int $customer_id
 * @property bool|null $order_paid
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\User $user
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
        'progress_status' => true,
        'customer_id' => true,
        'order_paid' => true,
        'customer' => true,
        'user' => true,
    ];
}
