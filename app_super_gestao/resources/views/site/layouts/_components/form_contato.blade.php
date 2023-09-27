{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}" name="nome">
    @if ($errors->has('nome')) {{ $errors->first('nome') }} @endif
    <br>
    <input type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    @if ($errors->has('telefone')) {{ $errors->first('telefone') }} @endif
    <br> 
    <input type="text" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}" name="email">
    @if ($errors->has('email')) {{ $errors->first('email') }} @endif
    <br>
    <select class="{{ $classe }}" name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivos_contato as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id')) {{ $errors->first('motivo_contatos_id') }} @endif
    <br>
    <textarea class="{{ $classe }}" name="mensagem" placeholder="Preencha aqui a sua mensagem"> {{ (old('mensagem') != '') ? old('mensagem') : '' }}</textarea>
    @if ($errors->has('mensagem')) {{ $errors->first('mensagem') }} @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

    @if ($errors->any())
        <div style="position:absolute; top:0px; left:0px; width:100%; background: red; text-align: center"> 
            @foreach ($errors->all() as $erro)
                {{ $erro }}
                <br>
            @endforeach
        </div>
    @endif
