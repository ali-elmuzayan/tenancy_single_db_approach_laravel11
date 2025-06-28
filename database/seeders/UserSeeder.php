<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::factory()->count(10)->create();
        // get the name of all tenants
        $tenants = Tenant::all()->pluck('id')->toArray();

        // create users for each tenant
        foreach ($tenants as $tenant) {
            User::factory()->count(5)->create([
                'tenant_id' => $tenant,
            ]);
              Article::factory()->count(5)->create([
                'tenant_id' => $tenant,
            ]);
        }




    }
}
