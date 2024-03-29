<?php

namespace App\Models;

use App\helpers\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property int|null $new_price
 * @property int $in_stock
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNewPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'new_price', 'in_stock', 'description'];

    public function getStatus()
    {
        return Arr::get(self::getStatusList(), $this->in_stock);
    }

    public static function getStatusList()
    {
        return [
            Status::OUT_OF_STOCK => __('Out of stock'),
            Status::IN_STOCK => __('In stock'),
        ];
    }
}
