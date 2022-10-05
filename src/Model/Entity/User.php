<?php
declare(strict_types=1);

namespace App\Model\Entity;
<<<<<<< HEAD

=======
use Authentication\PasswordHasher\DefaultPasswordHasher;
>>>>>>> c0ea659d6275c076954bf40185d147f695db343c
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $users_id
<<<<<<< HEAD
 * @property string $users_email
 * @property string $users_password
=======
 * @property string $email
 * @property string $password
>>>>>>> c0ea659d6275c076954bf40185d147f695db343c
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
<<<<<<< HEAD
        'users_email' => true,
        'users_password' => true,
    ];
=======
        'email' => true,
        'password' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
>>>>>>> c0ea659d6275c076954bf40185d147f695db343c
}
