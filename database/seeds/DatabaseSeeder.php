<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductReviewsTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(SlideShowTableSeeder::class);
        $this->call(OrderTableTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(TopProductsTableSeeder::class);
        $this->call(TopUsersTableSeeder::class);
    }
}
