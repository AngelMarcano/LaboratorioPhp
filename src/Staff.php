<?php
namespace Acme;
use Acme\users\Person;
class Staff{
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }
  //Método que agrega personas a la colección de staff
  public function add(Person $person)
  {
    $this->members[] = $person;
  }
  //Método que retorna el arreglo de members
  public function members()
  {
    return $this->members;
  }

}
