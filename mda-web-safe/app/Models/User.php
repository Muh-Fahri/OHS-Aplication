<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'email',
        'password',
        'role',
        'photo',
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

     public function adminlte_image()
    {
        return $this->avatar();
    }

    public function adminlte_desc()
{
    return ucfirst($this->role ?? 'User');
}

public function avatar()
{
    if ($this->photo) {
        return asset('storage/' . $this->photo);
    }

    $names = collect(explode(' ', strtoupper($this->name)));

    $initials = $names->count() >= 2
        ? $names[0][0] . $names[1][0]
        : $names[0][0];

    $bg = substr(md5($this->email), 0, 6);

    return "https://ui-avatars.com/api/?name={$initials}&background={$bg}&color=ffffff&size=128";
}
}
