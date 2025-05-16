<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Permission;

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

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function assignPermission(string $permission): void
    {
        $permission = $this->permissions()
            ->firstOrCreate(
                [
                    'name' => $permission,
                ]
            );

        $this->permissions()->attach($permission);
    }

    public function hasPermission(string $permission): bool
    {
        return $this->permissions()
            ->where(
                'name',
                $permission
            )->exists();
    }

    public function isAdmin(): bool
    {
        return $this->hasPermission('admin');
    }
}


/* 

Analisando o arquivo `app/Models/User.php` do repositório lista_presentes_casamento, o modelo User encontra as permissões do usuário através de um relacionamento many-to-many (muitos para muitos) com o modelo Permission.

Aqui está como funciona:

1. O modelo User define um relacionamento many-to-many com o modelo Permission através do método `permissions()`:

```php
public function permissions(): BelongsToMany
{
    return $this->belongsToMany(Permission::class);
}
```

2. Este relacionamento utiliza uma tabela pivot (intermediária) que conecta usuários e permissões (provavelmente chamada `permission_user`).

3. Para verificar se um usuário tem uma permissão específica, o modelo User possui o método `hasPermission()`:

```php
public function hasPermission(string $permission): bool
{
    return $this->permissions()
        ->where(
            'name',
            $permission
        )->exists();
}
```

Este método verifica se existe alguma permissão com o nome especificado associada ao usuário atual.

4. O modelo também possui um método `assignPermission()` para atribuir permissões a um usuário:

```php
public function assignPermission(string $permission): void
{
    $permission = $this->permissions()
        ->firstOrCreate(
            [
                'name' => $permission,
            ]
        );

    $this->permissions()->attach($permission);
}
```

Este método primeiro procura uma permissão com o nome especificado ou cria uma nova se não existir, e depois associa essa permissão ao usuário atual.

Em resumo, o modelo User encontra as permissões do usuário através de um relacionamento many-to-many com o modelo Permission, e fornece métodos para verificar e atribuir permissões.

*/