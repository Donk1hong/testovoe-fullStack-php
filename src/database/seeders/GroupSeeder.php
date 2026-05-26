<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Решил взять готовые данные за основу. Так как через fake данные были бы на абум и это не выглядело бы презентабельно.
    private function groupData(): array
    {
        return [
            ['id' => 1, 'parent_id' => 0, 'name' => 'Электроника'],
            ['id' => 2, 'parent_id' => 0, 'name' => 'Одежда'],
            ['id' => 3, 'parent_id' => 0, 'name' => 'Бытовая техника'],
            ['id' => 4, 'parent_id' => 1, 'name' => 'Телефоны и смарт-часы'],
            ['id' => 5, 'parent_id' => 1, 'name' => 'Компьютеры и комплектующие'],
            ['id' => 6, 'parent_id' => 2, 'name' => 'Женщинам'],
            ['id' => 7, 'parent_id' => 2, 'name' => 'Мужчинам'],
            ['id' => 9, 'parent_id' => 3, 'name' => 'Крупная бытовая техника'],
            ['id' => 10, 'parent_id' => 3, 'name' => 'Встраиваемая бытовая техника'],
            ['id' => 11, 'parent_id' => 4, 'name' => 'Смартфоны'],
            ['id' => 12, 'parent_id' => 4, 'name' => 'Смарт-часы и фитнес-браслеты'],
            ['id' => 13, 'parent_id' => 5, 'name' => 'Комплектующие для ПК'],
            ['id' => 14, 'parent_id' => 5, 'name' => 'Моноблоки'],
            ['id' => 15, 'parent_id' => 5, 'name' => 'Системные блоки'],
            ['id' => 16, 'parent_id' => 6, 'name' => 'Блузы и рубашки'],
            ['id' => 17, 'parent_id' => 7, 'name' => 'Брюки'],
            ['id' => 18, 'parent_id' => 7, 'name' => 'Верхняя одежда'],
            ['id' => 19, 'parent_id' => 9, 'name' => 'Холодильники'],
            ['id' => 20, 'parent_id' => 9, 'name' => 'Морозильные камеры'],
            ['id' => 21, 'parent_id' => 10, 'name' => 'Стиральные машины'],
            ['id' => 22, 'parent_id' => 10, 'name' => 'Сушильные машины'],
            ['id' => 23, 'parent_id' => 10, 'name' => 'Посудомойки'],
            ['id' => 24, 'parent_id' => 12, 'name' => 'Смарт-часы'],
            ['id' => 25, 'parent_id' => 12, 'name' => 'Фитнес-браслеты'],
            ['id' => 26, 'parent_id' => 12, 'name' => 'Браслеты и кольца бесконтактной оплаты'],
            ['id' => 27, 'parent_id' => 13, 'name' => 'Жесткие диски, SSD и сетевые накопители'],
            ['id' => 28, 'parent_id' => 13, 'name' => 'Видеокарты и графические ускорители'],
            ['id' => 29, 'parent_id' => 13, 'name' => 'Оперативная память'],
            ['id' => 30, 'parent_id' => 13, 'name' => 'Материнские платы'],
            ['id' => 31, 'parent_id' => 13, 'name' => 'Процессоры'],
            ['id' => 32, 'parent_id' => 16, 'name' => 'Блузы'],
            ['id' => 33, 'parent_id' => 16, 'name' => 'Рубашки'],
        ];
    }

    public function run(): void
    {
        foreach ($this->groupData() as $item) {
            Group::query()->create($item);
        }
    }
}
