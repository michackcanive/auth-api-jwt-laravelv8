<?php
namespace App\Repository\QueryBuild;
use App\Models\RotasController;
use App\Repository\Contracts\ICrompraSmsRepositorio;

class CompraSmsRepositorioQueryBuild extends AbstracaoRepositorioQueryBuild implements ICrompraSmsRepositorio {
    protected $model=RotasController::class;
}
