<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;


/**
 * User Entity
 *
 * @property int $users_id
 * @property string $users_email
 * @property string $users_password
 * @property string $users_name
 * @property string|null $users_mobile_phone
 * @property int $users_role
 */
class User extends Entity
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
        'users_email' => true,
        'users_password' => true,
        'users_name' => true,
        'users_mobile_phone' => true,
        'users_role' => true,
    ];

    protected function _setPassword(string $users_password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($users_password);
    }

}
