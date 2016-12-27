<?php defined('BASEPATH') OR exit('No direct script acess allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Signatures
 */
class Signatures extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'sign_asiel_petitie';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['naam', 'email', 'wonend'];

    /**
     * Disable the timestamps used in laravel.
     *
     * @var bool
     */
    public $timestamps = false;
}
