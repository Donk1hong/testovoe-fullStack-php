<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Решил взять готовые данные за основу. Так как через fake данные были бы на абум и это не выглядело бы презентабельно.
    private function priceData(): array
    {
        return [
            ['id' => 101, 'product_id' => 1, 'price' => 52490.00],
            ['id' => 102, 'product_id' => 2, 'price' => 5755.00],
            ['id' => 103, 'product_id' => 3, 'price' => 16480.00],
            ['id' => 104, 'product_id' => 4, 'price' => 96990.00],
            ['id' => 105, 'product_id' => 5, 'price' => 1896.00],
            ['id' => 106, 'product_id' => 6, 'price' => 1843.00],
            ['id' => 107, 'product_id' => 7, 'price' => 2356.00],
            ['id' => 108, 'product_id' => 8, 'price' => 259.00],
            ['id' => 109, 'product_id' => 9, 'price' => 308.00],
            ['id' => 110, 'product_id' => 10, 'price' => 3108.00],
            ['id' => 111, 'product_id' => 11, 'price' => 1616.00],
            ['id' => 112, 'product_id' => 12, 'price' => 1019.00],
            ['id' => 113, 'product_id' => 13, 'price' => 12739.00],
            ['id' => 114, 'product_id' => 14, 'price' => 960.00],
            ['id' => 115, 'product_id' => 15, 'price' => 1530.00],
            ['id' => 116, 'product_id' => 16, 'price' => 1542.00],
            ['id' => 117, 'product_id' => 17, 'price' => 61969.00],
            ['id' => 118, 'product_id' => 18, 'price' => 671.00],
            ['id' => 119, 'product_id' => 19, 'price' => 941.00],
            ['id' => 120, 'product_id' => 20, 'price' => 1294.00],
            ['id' => 121, 'product_id' => 21, 'price' => 1409.00],
            ['id' => 122, 'product_id' => 22, 'price' => 1645.00],
            ['id' => 123, 'product_id' => 23, 'price' => 11809.00],
            ['id' => 124, 'product_id' => 24, 'price' => 6373.00],
            ['id' => 125, 'product_id' => 25, 'price' => 5010.00],
            ['id' => 126, 'product_id' => 26, 'price' => 15539.00],
            ['id' => 127, 'product_id' => 27, 'price' => 3671.00],
            ['id' => 128, 'product_id' => 28, 'price' => 21150.00],
            ['id' => 129, 'product_id' => 29, 'price' => 12804.00],
            ['id' => 130, 'product_id' => 30, 'price' => 36537.00],
            ['id' => 131, 'product_id' => 31, 'price' => 20822.00],
            ['id' => 132, 'product_id' => 32, 'price' => 1777.00],
            ['id' => 133, 'product_id' => 33, 'price' => 7336.00],
            ['id' => 134, 'product_id' => 34, 'price' => 534473.00],
            ['id' => 135, 'product_id' => 35, 'price' => 3351.00],
            ['id' => 136, 'product_id' => 36, 'price' => 1100.00],
            ['id' => 137, 'product_id' => 37, 'price' => 1321.00],
            ['id' => 138, 'product_id' => 38, 'price' => 393.00],
            ['id' => 139, 'product_id' => 39, 'price' => 1625.00],
            ['id' => 140, 'product_id' => 40, 'price' => 6620.00],
            ['id' => 141, 'product_id' => 41, 'price' => 2967.00],
            ['id' => 142, 'product_id' => 42, 'price' => 1289.00],
            ['id' => 143, 'product_id' => 43, 'price' => 1914.00],
            ['id' => 144, 'product_id' => 44, 'price' => 924.00],
            ['id' => 145, 'product_id' => 45, 'price' => 4413.00],
            ['id' => 146, 'product_id' => 46, 'price' => 6128.00],
            ['id' => 147, 'product_id' => 47, 'price' => 6796.00],
            ['id' => 148, 'product_id' => 48, 'price' => 14090.00],
            ['id' => 149, 'product_id' => 49, 'price' => 10199.00],
            ['id' => 150, 'product_id' => 50, 'price' => 33503.00],
            ['id' => 151, 'product_id' => 51, 'price' => 11417.00],
            ['id' => 152, 'product_id' => 52, 'price' => 62944.00],
            ['id' => 153, 'product_id' => 53, 'price' => 19340.00],
            ['id' => 154, 'product_id' => 54, 'price' => 28499.00],
            ['id' => 155, 'product_id' => 55, 'price' => 33311.00],
            ['id' => 156, 'product_id' => 56, 'price' => 12990.00],
            ['id' => 157, 'product_id' => 57, 'price' => 16205.00],
            ['id' => 158, 'product_id' => 58, 'price' => 13837.00],
            ['id' => 159, 'product_id' => 59, 'price' => 19581.00],
            ['id' => 160, 'product_id' => 60, 'price' => 21055.00],
            ['id' => 161, 'product_id' => 61, 'price' => 16990.00],
            ['id' => 162, 'product_id' => 62, 'price' => 17795.00],
            ['id' => 163, 'product_id' => 63, 'price' => 13137.00],
            ['id' => 164, 'product_id' => 64, 'price' => 23674.00],
            ['id' => 165, 'product_id' => 65, 'price' => 23700.00],
            ['id' => 166, 'product_id' => 66, 'price' => 37051.00],
            ['id' => 167, 'product_id' => 67, 'price' => 19019.00],
            ['id' => 168, 'product_id' => 68, 'price' => 19628.00],
            ['id' => 169, 'product_id' => 69, 'price' => 69498.00],
            ['id' => 170, 'product_id' => 70, 'price' => 69999.00],
            ['id' => 171, 'product_id' => 71, 'price' => 30271.00],
            ['id' => 172, 'product_id' => 72, 'price' => 24170.00],
            ['id' => 173, 'product_id' => 73, 'price' => 25650.00],
            ['id' => 174, 'product_id' => 74, 'price' => 33205.00],
            ['id' => 175, 'product_id' => 75, 'price' => 23492.00],
            ['id' => 176, 'product_id' => 76, 'price' => 53450.00],
            ['id' => 177, 'product_id' => 77, 'price' => 35500.00],
            ['id' => 178, 'product_id' => 78, 'price' => 33750.00],
            ['id' => 179, 'product_id' => 79, 'price' => 86920.00],
            ['id' => 180, 'product_id' => 80, 'price' => 33800.00],
            ['id' => 181, 'product_id' => 81, 'price' => 419900.00],
            ['id' => 182, 'product_id' => 82, 'price' => 39810.00],
        ];
    }

    public function run(): void
    {
        foreach ($this->priceData() as $item) {
            Price::query()->create($item);
        }
    }
}
