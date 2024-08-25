<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orden extends Model
{
    use HasFactory;
    protected $table = 'ordenes';
    protected $primaryKey = 'idOrdenes';
    protected $fillable = [
        'idClientes',
        'fecha',
        'metodoPago',
        'tipoFactura',
        'paymentAmount'
    ];
}
