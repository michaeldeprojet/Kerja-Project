<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JurnalPklFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_siswa' => $this->faker->name(),
            'tgl_pkl' => $this->faker->date(),
            'pembimbing' => $this->faker->name(),
            'nis' => $this->faker->numerify('1190####'),
            'perusahaan' => $this->faker->company(),
            'divisi' => $this->faker->text(10),
            'minggu' => $this->faker->numberBetween(1, 36),
            'kegiatan' => $this->faker->text(300),
            'hasil' => $this->faker->text(300),
        ];
    }
}
