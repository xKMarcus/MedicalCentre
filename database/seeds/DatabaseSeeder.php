<?php
# @Date:   2019-10-29T15:14:35+00:00
# @Last modified time: 2019-12-07T21:20:03+00:00




use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(InsuranceCompanyTableSeeder::class);

        factory(App\InsuranceCompany::class, 3)->create();



    //     factory(App\Models\User::class, 10)
    //         ->create()
    //         ->each(function ($user) {
    //             $user->relationNameOfUserAndRole()->save(factory(App\Models\Role::class)->make());
    // })
    }
}
