@extends('templates.middleware', ['titulo' => "PACIENTES", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') PACIENTES @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')
<div class="col d-flex justify-content-end">
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
        </svg>
    </a>
</div>
<div class="row">
    <div class="col">
        <table class="table align-middle caption-top table-striped">
            <caption>Tabela de <b>Pacientes</b></caption>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Dias Internamento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $item)
                <tr>
                    <td scope="col">{{$item->nome}}</td>
                    <td scope="col">{{$item->idade}}</td>
                    <td scope="col">{{$item->sexo}}</td>
                    <td scope="col">{{$item->altura}}</td>
                    <td scope="col">{{$item->diasInter}}</td>
                    <td>
                        @can('update',$item)
                        <a href="{{ route('clientes.edit', $item->id) }}" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
                            </svg>
                        </a>
                        @endcan
                        @can('delete',$item)

                        <a nohref style="cursor:pointer" onclick="showRemoveModal('{{ $item->id }}', '{{ $item->nome }}', '{{ $item->idade }}', '{{ $item->sexo }}', '{{ $item->dataInter }}', '{{ $item->diagnosticoInter }}', '{{ $item->diagnosticoClin }}', '{{ $item->dataIOT }}', '{{ $item->altura }}', '{{ $item->pesoIdeal }}', '{{ $item->diasInter }}')" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                        @endcan

                    </td>
                    <form action="{{ route('clientes.destroy', $item->id) }}" method="POST" id="form_{{$item->id}}">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection