<?php

namespace App\Models\Model;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuarios';

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "email",
            "data_cadastro"
        ])
        ->limit($limite);

        dd($sql->toSql());
    }

    public static function insert(Request $request)
    {
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email"=> $request->input('email'),
            "data_cadastro" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(),$request->all());
    }
}
