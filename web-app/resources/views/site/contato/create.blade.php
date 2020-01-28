@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contato</div>

                
                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contato') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid 
                                @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid
                                 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="tel" required pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                                class="form-control @error('telefone') is-invalid data-inputmask="'mask': '99-9999999'" 
                                 @enderror" name="telefone" value="{{ old('telefone') }}" autocomplete="telefone">

                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mensagem" class="col-md-4 col-form-label text-md-right">Mensagem</label>

                            <div class="col-md-6">
                                <textarea id="mensagem" required class="form-control @error('mensagem') is-invalid @enderror" name="mensagem" rows="3">{{ old('mensagem') }}</textarea>

                                @error('mensagem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="arquivo" class="col-md-4 col-form-label text-md-right">Anexo</label>

                            <div class="col-md-6">
                                 <input type="file" required class="form-control-file  @error('arquivo') is-invalid @enderror" 
                                 id="arquivo" name="arquivo" value="{{ old('arquivo') }}"
                                 accept=".pdf,.doc,.docx,.odt,.txt" size="500"
                                 placeholder="Selecione um arquivo .pdf, .doc, .docx, .odt ou .txt de 500kb.">

                                @error('arquivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onload = function() {    
        var selector = document.getElementById("telefone");
        Inputmask({"mask": "(99) 9999-9999"}).mask(selector)
    };
</script>

@endsection
