<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class FreshInstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Sistema de Permissões para uma instalação limpa
         */
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /**
         * Criando perfil de Super-Admin e Usuário padrão de Super-Admin
         */
        $superadmin = Role::create(['name' => 'Super Admin']);

        /**
         * Usuário padrão - Só faz login
         */
        $padrao = Role::create(['name' => 'Padrão']);

        /**
         * Permissões para consultar
         */
        Permission::create(['name' => 'ver_usuarios']);

        /**
         * Permissões para editar
         */
        Permission::create(['name' => 'editar_usuarios']);

        /**
         * Permissões para deletar
         */
        Permission::create(['name' => 'deletar_usuarios']);

        /**
         * Papeis para consulta
         */
        $consultar_usuarios = Role::create(['name' => 'Usuários - Consultar']);
        $consultar_usuarios->givePermissionTo('ver_usuarios');

        /**
         * Papeis para Edição
         */
        $editar_usuarios = Role::create(['name' => 'Usuários - Editar']);
        $editar_usuarios->givePermissionTo('ver_usuarios');
        $editar_usuarios->givePermissionTo('editar_usuarios');

        /**
         * Papel de Administrador
         */
        $administrador = Role::create(['name' => 'Administrador']);
        $administrador->givePermissionTo('ver_usuarios');
        $administrador->givePermissionTo('editar_usuarios');
        $administrador->givePermissionTo('deletar_usuarios');
    }
}
