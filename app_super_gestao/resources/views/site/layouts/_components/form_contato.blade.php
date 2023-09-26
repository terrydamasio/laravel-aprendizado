{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" placeholder="Nome" class="{{ $classe }}" name="nome">
    <br>
    <input type="text" value="{{ old('telefone') }}" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    <br> 
    <input type="text" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}" name="email">
    <br>
    <select class="{{ $classe }}" name="motivo">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivos_contato as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach

    </select>
    <br>
    <textarea class="{{ $classe }}" name="mensagem" placeholder="Preencha aqui a sua mensagem"> {{ (old('mensagem') != '') ? old('mensagem') : '' }}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position:absolute; top:0px; left:0px; width:100%; background: red"> 
    <pre>
        {{ print_r($errors)}}
    </pre>
</div>
