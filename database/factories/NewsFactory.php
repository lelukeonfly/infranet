<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $imgUrl = $this->faker->imageUrl();
        $imgUrl = 'http://placekitten.com/300/100';

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
        $path = 'banner/img_'.$this->faker->word . '.png';
        file_put_contents(storage_path('app/public/').$path, $output);

        return [
            'banner' => $path,
            'title_de' => $this->faker->sentence,
            'slug_de' => $this->faker->slug,
            'content_de' => $this->faker->text,
            'title_it' => $this->faker->sentence,
            'slug_it' => $this->faker->slug,
            'content_it' => $this->faker->text
        ];
    }
}
