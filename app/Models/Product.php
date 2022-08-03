<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Caso não siga o padrão do Laravel
    // protected $table = "nome_tal";

    protected $fillable = [
        "description",
        "marca",
        "quantidade",
        "valor"
    ];
}
