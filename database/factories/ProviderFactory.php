<?php

namespace Database\Factories;

use Faker\Core\File;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $imgUrl = $this->faker->imageUrl();
        $imgUrl = 'http://placekitten.com/100/100';

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $imgUrl);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        $path = 'img/img_'.$this->faker->word . '.png';
        $img = file_put_contents(storage_path('app/public/').$path, $output);

        return [
            'name' => $this->faker->name,
            //'img' => $img,
            'img' => $path,
            //'img' => $this->faker->image,
            'url' => $this->faker->url
        ];
    }
}
