<form action="{{ route('site.contato')}}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if($errors->has('nome'))
        <span class="text-danger">{{ $errors->first('nome') }}</span>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    @if($errors->has('telefone'))
        <span class="text-danger">{{ $errors->first('telefone') }}</span>
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    @if($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') }}</textarea>
    @if($errors->has('mensagem'))
        <span class="text-danger">{{ $errors->first('mensagem') }}</span>
    @endif
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
