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
 * @property \Cake\I18n\FrozenTime|null $users_created
 * @property \Cake\I18n\FrozenTime|null $users_modified
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
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
    protected $_accessible = [
        'users_email' => true,
        'users_password' => true,
        'users_name' => true,
        'users_mobile_phone' => true,
        'users_role' => true,
        'users_created' => true,
        'users_modified' => true,
    ];
}
