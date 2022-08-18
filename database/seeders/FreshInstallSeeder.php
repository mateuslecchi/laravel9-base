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
        Permission::create(['name' => 'ver_funcionarios']);
        Permission::create(['name' => 'ver_ferramentas']);
        Permission::create(['name' => 'ver_paradas']);
        Permission::create(['name' => 'ver_emprestimos']);
        Permission::create(['name' => 'ver_avaliacoes']);
        Permission::create(['name' => 'ver_usuarios']);
        Permission::create(['name' => 'ver_relatorios']);

        /**
         * Permissões para editar
         */
        Permission::create(['name' => 'editar_funcionarios']);
        Permission::create(['name' => 'editar_ferramentas']);
        Permission::create(['name' => 'editar_paradas']);
        Permission::create(['name' => 'editar_emprestimos']);
        Permission::create(['name' => 'editar_avaliacoes']);
        Permission::create(['name' => 'editar_usuarios']);
        Permission::create(['name' => 'editar_relatorios']);

        /**
         * Permissões para deletar
         */
        Permission::create(['name' => 'deletar_funcionarios']);
        Permission::create(['name' => 'deletar_ferramentas']);
        Permission::create(['name' => 'deletar_paradas']);
        Permission::create(['name' => 'deletar_emprestimos']);
        Permission::create(['name' => 'deletar_avaliacoes']);
        Permission::create(['name' => 'deletar_usuarios']);
        Permission::create(['name' => 'deletar_relatorios']);

        /**
         * Papeis para consulta
         */
        $consultar_funcionario = Role::create(['name' => 'Funcionários - Consultar']);
        $consultar_funcionario->givePermissionTo('ver_funcionarios');

        $consultar_ferramentas = Role::create(['name' => 'Ferramentas - Consultar']);
        $consultar_ferramentas->givePermissionTo('ver_ferramentas');


        $consultar_paradas = Role::create(['name' => 'Paradas - Consultar']);
        $consultar_paradas->givePermissionTo('ver_paradas');


        $consultar_emprestimos = Role::create(['name' => 'Empréstimos - Consultar']);
        $consultar_emprestimos->givePermissionTo('ver_emprestimos');


        $consultar_avaliacoes = Role::create(['name' => 'Avaliações - Consultar']);
        $consultar_avaliacoes->givePermissionTo('ver_avaliacoes');


        $consultar_usuarios = Role::create(['name' => 'Usuários - Consultar']);
        $consultar_usuarios->givePermissionTo('ver_usuarios');


        $consultar_relatorios = Role::create(['name' => 'Relatórios - Consultar']);
        $consultar_relatorios->givePermissionTo('ver_relatorios');

        /**
         * Papeis para Edição
         */
        $editar_funcionario = Role::create(['name' => 'Funcionários - Editar']);
        $editar_funcionario->givePermissionTo('ver_funcionarios');
        $editar_funcionario->givePermissionTo('editar_funcionarios');

        $editar_ferramentas = Role::create(['name' => 'Ferramentas - Editar']);
        $editar_ferramentas->givePermissionTo('ver_ferramentas');
        $editar_ferramentas->givePermissionTo('editar_ferramentas');


        $editar_paradas = Role::create(['name' => 'Paradas - Editar']);
        $editar_paradas->givePermissionTo('ver_paradas');
        $editar_paradas->givePermissionTo('editar_paradas');


        $editar_emprestimos = Role::create(['name' => 'Empréstimos - Editar']);
        $editar_emprestimos->givePermissionTo('ver_emprestimos');
        $editar_emprestimos->givePermissionTo('editar_emprestimos');


        $editar_avaliacoes = Role::create(['name' => 'Avaliações - Editar']);
        $editar_avaliacoes->givePermissionTo('ver_avaliacoes');
        $editar_avaliacoes->givePermissionTo('editar_avaliacoes');


        $editar_usuarios = Role::create(['name' => 'Usuários - Editar']);
        $editar_usuarios->givePermissionTo('ver_usuarios');
        $editar_usuarios->givePermissionTo('editar_usuarios');


        $editar_relatorios = Role::create(['name' => 'Relatórios - Editar']);
        $editar_relatorios->givePermissionTo('ver_relatorios');
        $editar_relatorios->givePermissionTo('editar_relatorios');

        /**
         * Papel de Administrador
         */
        $administrador = Role::create(['name' => 'Administrador']);
        $administrador->givePermissionTo('ver_funcionarios');
        $administrador->givePermissionTo('ver_ferramentas');
        $administrador->givePermissionTo('ver_paradas');
        $administrador->givePermissionTo('ver_emprestimos');
        $administrador->givePermissionTo('ver_avaliacoes');
        $administrador->givePermissionTo('ver_usuarios');
        $administrador->givePermissionTo('ver_relatorios');
        $administrador->givePermissionTo('editar_funcionarios');
        $administrador->givePermissionTo('editar_ferramentas');
        $administrador->givePermissionTo('editar_paradas');
        $administrador->givePermissionTo('editar_emprestimos');
        $administrador->givePermissionTo('editar_avaliacoes');
        $administrador->givePermissionTo('editar_usuarios');
        $administrador->givePermissionTo('editar_relatorios');
        $administrador->givePermissionTo('deletar_funcionarios');
        $administrador->givePermissionTo('deletar_ferramentas');
        $administrador->givePermissionTo('deletar_paradas');
        $administrador->givePermissionTo('deletar_emprestimos');
        $administrador->givePermissionTo('deletar_avaliacoes');
        $administrador->givePermissionTo('deletar_usuarios');
        $administrador->givePermissionTo('deletar_relatorios');
    }
}
