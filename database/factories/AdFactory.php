<?php

namespace Database\Factories;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    
    /**
     *The name of the factory's corresponding model. 
     * @var string
     *  
     */

    protected $model = Ad::class;
    
    
    
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),			
		    'description'=>$this->faker->paragraph(), 		
		    'image'=>'full.png',
            'price'=> 14.5,
            'created_at'=>now(),
            'user_id' => 4
        ];
    }
}




