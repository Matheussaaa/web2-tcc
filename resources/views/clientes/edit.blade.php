@extends('templates/middleware', ['titulo' => "PACIENTES", 'rota' => "clientes.create"])

@section('conteudo')

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST" id="formUpdate">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="container my-3">
            <h3 class="display-7 text-secondary"><b>Alterar clientes</b></h3>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('nome')) is-invalid @endif" name="nome"  value="{{$cliente->nome}}" placeholder="Nome" />
                        <label for="nome">Nome do clientes</label>
                        @if($errors->has('nome'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('nome') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control @if($errors->has('idade')) is-invalid @endif" name="idade" placeholder="idade" value="{{$cliente->idade}}" />
                        <label for="nome">Idade Paciente</label>
                        @if($errors->has('idade'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('idade') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('sexo')) is-invalid @endif" name="sexo" placeholder="sexo" value="{{$cliente->sexo}}" />
                        <label for="nome">Sexo do Paciente</label>
                        @if($errors->has('sexo'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('sexo') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control @if($errors->has('dataInternamento')) is-invalid @endif" name="dataInternamento" placeholder="dataInternamento" value="{{$cliente->dataInter}}" />
                        <label for="dataInternamento">Data internamento</label>
                        @if($errors->has('dataInternamento'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('dataInternamento') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('diagnosticoInt')) is-invalid @endif" name="diagnosticoInt" placeholder="diagnosticoInt" value="{{$cliente->diagnosticoInter}}" />
                        <label for="diagnosticoInt">Diagnostico Interno</label>
                        @if($errors->has('diagnosticoInt'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('diagnosticoInt') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('diagnosticoClin')) is-invalid @endif" name="diagnosticoClin" placeholder="diagnosticoClin" value="{{$cliente->diagnosticoClin}}" />
                        <label for="diagnosticoClin">Diagnostico Clinico</label>
                        @if($errors->has('diagnosticoClin'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('diagnosticoClin') }}
                        </div>
                        @endif
                    </div>
                </div>           
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control @if($errors->has('dataIOT')) is-invalid @endif" name="dataIOT" placeholder="dataIOT" value="{{$cliente->dataIOT}}" />
                        <label for="dataIOT">Data IOT</label>
                        @if($errors->has('dataIOT'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('dataIOT') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control @if($errors->has('altura')) is-invalid @endif" name="altura" placeholder="altura" value="{{$cliente->altura}}" />
                        <label for="altura">Altura do Paciente</label>
                        @if($errors->has('altura'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('altura') }}
                        </div>
                        @endif
                    </div>
                </div>            
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control @if($errors->has('pesoIdeal')) is-invalid @endif" name="pesoIdeal" placeholder="pesoIdeal" value="{{$cliente->pesoIdeal}}" />
                        <label for="pesoIdeal">Peso Ideal</label>
                        @if($errors->has('pesoIdeal'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('pesoIdeal') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control @if($errors->has('diasInter')) is-invalid @endif" name="diasInter" placeholder="diasInter" value="{{$cliente->diasInter}}" />
                        <label for="diasInter">Dias Internamento</label>
                        @if($errors->has('diasInter'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('diasInter') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{route('clientes.index')}}" class="btn btn-dark btn-block align-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                        </svg>
                        &nbsp; Voltar
                    </a>
                    <button href="javascript:document.querySelector('form').submit();" class="btn btn-success btn-block align-content-center">
                        Confirmar &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection