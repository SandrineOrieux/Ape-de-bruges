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

    $Logo = $this->repos->findOneByFieldStartingWith('imageName', 'logo');

    return $Logo;
  }
  public function getFavicon(): Logo
  {

     $Logo = $this->repos->findOneByFieldStartingWith('imageName', 'favicon');

    return $Logo;
  }
}
