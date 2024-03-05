<?php

namespace App\Services;

use App\Repository\InfoApeRepository;

class InfoService
{
  private $repos;

  public function __construct(InfoApeRepository $Repos)
  {
    $this->repos = $Repos;
  }

  public function getInfos(): array
  {

    $infos = $this->repos->findAll();

    dump($infos);
    return $infos;
  }
}
