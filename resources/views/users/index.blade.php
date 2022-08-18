<x-app-layout>
    @include('users.menu')

    <div class="bg-white shadow rounded p-2 background-table">
        <table class="table table-hover table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="col-4">Usuário</th>
                    <th scope="col" class="col-3 text-center">Atribuições</th>
                    <th scope="col" class="col-2 text-center">Último Acesso</th>
                    <th scope="col" class="col-3 text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(empty($users))
                <tr>
                    <th>Nenhum funcionário cadastrado</th>
                </tr>
                @else
                @foreach($users as $user)
                <tr>
                    <th scope="row" class="align-middle">{{ $user->name }}</th>
                    <td class="align-middle text-center" title="{{ $user->roles->implode('name', ' / ') }}">
                        {{ Str::limit($user->roles->implode('name', ' / '), 45 ,'...') }}
                    </td>
                    <td class="align-middle text-center">{{ $user->last_login_time }}</td>
                    <td class="align-middle text-center">
                        <a href="{{ route('usuarios.show', ['usuario' => $user->id]) }}"
                            class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i> Detalhes</a>
                        <a href="{{ route('usuarios.edit', ['usuario' => $user->id]) }}"
                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Editar</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>