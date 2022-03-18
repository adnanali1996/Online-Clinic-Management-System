<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => 'We have a dedicated support center for all of your support needs. We usually get back to you within 12-24 hours.',
            'address' => 'SEO Agency, 343 Medick, #2214 cravel street, NY - 62617.',
            'contactnumber' => '+(92) 234 4567',
            'contactemail' => 'example@mail.com',
            'customersupport' => 'info@support.com',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
            'created_at' => now(),

        ];
    }
}
