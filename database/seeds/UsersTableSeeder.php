<?php
# @Date:   2019-10-29T16:26:18+00:00
# @Last modified time: 2019-12-07T20:33:15+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_patient = Role::where('name', 'patient')->first();
        $role_doctor = Role::where('name', 'doctor')->first();

        $admin = new User();
        $admin->name = 'Marcus Fitzs';
        $admin->email = 'admin@hospital.ie';
        $admin->phone = '0873691234';
        $admin->address = '9 November road';
        $admin->password = bcrypt('secret');
        $admin->insurance = false;
        $admin->startDate = '2018-11-11';
        $admin->save();
        $admin->roles()->attach($role_admin);


        $patient = new User();
        $patient->name = 'John Jones';
        $patient->email = 'patient@hospital.ie';
        $patient->phone = '0871473214';
        $patient->address = '10 November road';
        $patient->password = bcrypt('secret');
        $patient->insurance = false;
        $patient->startDate = '2018-11-11';
        $patient->save();
        $patient->roles()->attach($role_patient);

        $doctor = new User();
        $doctor->name = 'Dr Doctor';
        $doctor->email = 'Doctor@hospital.ie';
        $doctor->phone = '0872589874';
        $doctor->address = '11 November road';
        $doctor->password = bcrypt('secret');
        $doctor->insurance = true;
        $doctor->startDate = '2018-11-11';
        $doctor->save();
        $doctor->roles()->attach($role_doctor);
    }
}
