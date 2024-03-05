<?php

namespace App\Services;


use App\Repository\UserRepository;

class BureauService
{
  private $repos;

  public function __construct(UserRepository $Repos)
  {
    $this->repos = $Repos;
  }

  public function getBureau(): array
  {

    $users = $this->repos->findBureau();

    dump($users);
    return $users;
  }
}
