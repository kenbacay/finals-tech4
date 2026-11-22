<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosReferenceSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917 123 4567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'John Reyes', 'email' => 'john.reyes@example.com', 'phone' => '0918 234 5678', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0919 345 6789', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '0920 456 7890', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Sofia Flores', 'email' => 'sofia.flores@example.com', 'phone' => '0921 567 8901', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin', 'full_name' => 'Admin User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'liza.mendoza', 'full_name' => 'Liza Mendoza', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'carlo.navarro', 'full_name' => 'Carlo Navarro', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'nina.torres', 'full_name' => 'Nina Torres', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'ben.aquino', 'full_name' => 'Ben Aquino', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
