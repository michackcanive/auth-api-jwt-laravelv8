<?php

namespace App\Repository\QueryBuild;

use Illuminate\Support\Facades\DB;

abstract class AbstracaoRepositorioQueryBuild
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function resolveModel()
    {
        return app($this->model);
    }

    public function getAllCompras(int $id_user):array
    {
        $query = "SELECT * FROM tb_sms WHERE id_parceiro=:id_parceiro ";
        $result= DB::select($query, [
            $id_user
        ]);
        return $result;
    }

    public function findRouteName($nome_rota):array{
        $query = "select * from rotas_controllers where nome_rota=:name_rota";
        return $Routes= DB::select($query, [
            $nome_rota
        ]);
    }
    public function getrotasAll():array{
        $query = "select * from rotas_controllers ";
        return $result = DB::connection()->select($query, [
        ]);
    }
}
