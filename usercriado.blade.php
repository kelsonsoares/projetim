@extends('eventos.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@if(isset($users)){{ __('Atualizar usuário') }}@else{{ __('Cadastrar usuário') }}@endif</div>

                <div class="card-body">
                    @if(isset($users))
                         <form method="POST" action="{{url("usuarios/$users->id")}}">
                         @method('PUT')
                    @else
                         <form method="POST" action="{{url('usuarios')}}">
                    @endif
                        @csrf
                        
                        <div class="center">
                             <div class="form-check form-check-inline">
                                <input id="is_admin" class="form-check-input @error('is_admin') is-invalid @enderror" value="1" required autocomplete="is_admin" type="radio" name="is_admin">Nível Admin
                            </div>
                               
                             <div class="form-check form-check-inline">
                                <input id="is_admin" class="form-check-input @error('is_admin') is-invalid @enderror" value="0" required autocomplete="is_admin" type="radio" name="is_admin">Nível User
                            </div>
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name ?? ''}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="curso" class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>

                            <div class="col-md-6">
                                <input id="curso" type="text" class="form-control @error('curso') is-invalid @enderror" name="curso" value="{{$users->curso ?? ''}}" required autocomplete="curso" autofocus>

                                @error('curso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{$users->telefone ?? ''}}" required autocomplete="telefone" autofocus>

                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email ?? ''}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Digite sua senha" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="@if(isset($users)) Salvar @else Cadastrar @endif" class="btn btn-primary">
                                    
                                </input>
                                <a href="{{ url('usuarios') }}" type="button" class="btn btn-primary">
                                    {{ __('Voltar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection