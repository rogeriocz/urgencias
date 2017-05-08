<?php




class ExampleTest extends FeatureTestCase
{
    
   
   function test_basic_example()
    {

        $user = factory(\App\User::class)->create([
            'name' => 'Rogerio Cuervo',
            'email' => 'admin@pmx.com',
            ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
             ->see('Rogerio Cuervo')
             ->see('admin@pmx.com');
    }
}
