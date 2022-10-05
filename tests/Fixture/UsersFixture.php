<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'users_id' => 1,
<<<<<<< HEAD
                'users_email' => 'Lorem ipsum dolor sit amet',
                'users_password' => 'Lorem ipsum dolor sit amet',
=======
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
>>>>>>> c0ea659d6275c076954bf40185d147f695db343c
            ],
        ];
        parent::init();
    }
}
