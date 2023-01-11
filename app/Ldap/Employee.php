<?php

namespace App\Ldap;

use LdapRecord\Models\Model;
use LdapRecord\Models\Concerns\CanAuthenticate;
use Illuminate\Contracts\Auth\Authenticatable;

class Employee extends Model implements Authenticatable
{

    use CanAuthenticate;
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [];

    protected $guidKey = 'guid';

    protected $table = 'tbl_employee';
}
