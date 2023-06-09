<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customer_id
 * @property string $customer_name
 * @property string $customer_address
 * @property int $customer_postal
 * @property string $customer_suburb
 * @property string $customer_phonenumber
 * @property string $customer_email
 */
class Customer extends Entity
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
        'customer_name' => true,
        'customer_address' => true,
        'customer_postal' => true,
        'customer_suburb' => true,
        'customer_phonenumber' => true,
        'customer_email' => true,
    ];

    public array $virtualFields = array(
        'customer_id'=>'CONCAT(Customers.customer_id," ", Customers.customer_name)'
    );
}
