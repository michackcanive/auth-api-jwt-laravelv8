<?php
namespace App\Repository\Contracts;

/**
 * ICrompraSmsRepositorio
 */
interface ICrompraSmsRepositorio{
public function getAllCompras(int $id_user):array;
public function findRouteName(String $nome_route):array;
public function getrotasAll():array;
}
