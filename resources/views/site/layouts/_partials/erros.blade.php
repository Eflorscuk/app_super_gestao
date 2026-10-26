@if($errors->any())
    <div class="faixa-erros">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
