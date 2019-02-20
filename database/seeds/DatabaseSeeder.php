<?php

use FourtyTwoConnect\Coral\Database\Seeds\AssetTypeTableSeeder;
use FourtyTwoConnect\Coral\Database\Seeds\CategoryTableSeeder;
use FourtyTwoConnect\Coral\Database\Seeds\PostTableSeeder;
use FourtyTwoConnect\Coral\Database\Seeds\RoleTableSeeder;
use FourtyTwoConnect\Coral\Database\Seeds\UserTableSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AssetTypeTableSeeder::class);
        $this->call(RoleTableSeeder::class);

        /** Dev Only */
        if(env("APP_ENV") == 'local') {
            $this->call(UserTableSeeder::class);
            $this->call(PostTableSeeder::class);
            $this->call(CategoryTableSeeder::class);
        }

        Model::reguard();
    }
}
