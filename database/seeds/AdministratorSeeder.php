<?php

use Illuminate\Database\Seeder;

use function GuzzleHttp\json_encode;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username    = "admin";
        $administrator->name        = "Adminstrator";
        $administrator->email       = "admin@lopotia.com";
        $administrator->roles       = json_encode(["ADMIN"]);
        $administrator->password    = \Hash::make("admin");
        $administrator->avatar      = "default.jpg";
        $administrator->phone       = "0274-864232";
        $administrator->address     = "Bandung, Indonesia";

        $administrator->save();

        $this->command->info("Akun Admin Berhasil Dibuat");

    }
}
