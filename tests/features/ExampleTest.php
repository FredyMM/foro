<?php


class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        
        $user = factory(\App\User::class)->create([
            'name' => 'Fredy Morga',
            'email' => 'fredy@gmail.com',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Fredy Morga')
            ->see('fredy@gmail.com');
    }
}

