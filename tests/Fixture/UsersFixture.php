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
                'users_email' => 'Lorem ipsum dolor sit amet',
                'users_password' => 'Lorem ipsum dolor sit amet',
                'users_name' => 'Lorem ipsum dolor sit amet',
                'users_mobile_phone' => 'Lorem ipsum dolor sit amet',
                'users_role' => 1,
                'users_created' => '2022-10-04 18:56:40',
                'users_modified' => '2022-10-04 18:56:40',
            ],
        ];
        parent::init();
    }
}
