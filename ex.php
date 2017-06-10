<?php

use Acme\users\Person;
use Acme\Business;
use Acme\Staff;

$jeffrey = new Person('Jeffrey way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());
