<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Extras\Append;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'role',
        'email',
        'phone',
        'password',
    ];

    /**
     * The additional attributes
     */
    protected $appends = [
        'firstname',
        'surname', 
        'online', 
        'last_session',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /*----------------------------------------------------------------------------------------------------------------
    | RELATIONSHIPS
    |----------------------------------------------------------------------------------------------------------------*/
    /* Each User may have [*] Session */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    /*----------------------------------------------------------------------------------------------------------------
    | GETTERS AND SETTERS
    |----------------------------------------------------------------------------------------------------------------*/
    /**
    * Get Surname
    * @return string
    */
    public function getSurnameAttribute(){

        return Append::lastName($this->name);
    }

    /**
    * Get Firstname
    * @return string
    */
    public function getFirstnameAttribute(){

        return Append::firstName($this->name);
    }

    /**
    * Check weather the user is online or not
    * @return string
    */
    public function getOnlineAttribute(){

        $result= false;
        if($this->last_session)
            $result= $this->last_session->minutes < 26;
        return $result;
    }

    /**
    * Get last session time
    * @return string
    */
    public function getLastSessionAttribute(){

        $result= null;
        if($this->sessions->count()){
            $la= $this->sessions->max('last_activity');
            $result= $this->sessions->where('last_activity', $la)->first();
        }
        return $result;
    }
}
