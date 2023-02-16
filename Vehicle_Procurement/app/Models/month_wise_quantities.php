<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class month_wise_quantities extends Model
{
    use HasFactory;

    protected $table = 'month_wise_quantities';

    protected $fillable = [
        'supplier_id',
        'whole_seller_id',
        'steering_type_id',
        'car_model_id',
        'car_sfx_id',
        'car_variant_id',
        'color_id',
        'year',
        'jan',
        'feb',
        'mar',
        'apr',
        'may',
        'jun',
        'jul',
        'aug',
        'sep',
        'oct',
        'nov',
        'dec',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function wholeSeller()
    {
        return $this->belongsTo(WholeSeller::class);
    }

    public function steeringType()
    {
        return $this->belongsTo(SteeringType::class);
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function carSfx()
    {
        return $this->belongsTo(CarSfx::class);
    }

    public function carVariant()
    {
        return $this->belongsTo(CarVariant::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
