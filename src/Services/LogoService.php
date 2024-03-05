<?php

namespace App\Services;

use App\Entity\Logo;
use App\Repository\LogoRepository;

class LogoService
{
  private $repos;

  public function __construct(LogoRepository $Repos)
  {
    $this->repos = $Repos;
  }

  public function getLogo(): Logo
  {

    $Logo = $this->repos->findOneBy(['id' => 1]);

    return $Logo;
  }
  public function getFavicon(): Logo
  {

    $Logo = $this->repos->findOneBy(['id' => 2]);

    return $Logo;
  }
}
