<h2>Fornecedor</h2>

{{-- Fica Comentário--}}

@php



    @endphp

{{-- Fica Comentário--}}

@isset($fornecedores)
    @if(count($fornecedores) > 0)
        <h3>Existem alguns fornecedores cadastrados</h3>
        @foreach($fornecedores as $fornecedor)
            @if($fornecedor['status']=='S')
                <p>Nome: {{ $fornecedor['nome'] }}</p>
                <p>Status: {{ $fornecedor['status'] }}</p>
                <p> CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não cadastrado' }}</p>
                <p> DDD: {{ $fornecedor['ddd'] ?? 'Dado não cadastrado' }}</p>
{{--                @switch($fornecedor['ddd'])--}}
{{--                    @case(11)--}}
{{--                        <p> SÃO PAULO</p>--}}
{{--                        @break--}}
{{--                    @case(21)--}}
{{--                        <p> RIO DE JANEIRO</p>--}}
{{--                        @break--}}
{{--                    @case(31)--}}
{{--                        <p> BELO HORIZONTE</p>--}}
{{--                        @break--}}
{{--                    @default--}}
{{--                        <p> DDD NÃO CADASTRADO</p>--}}
{{--                @endswitch--}}
                <p> CONTATO: {{ $fornecedor['telefone'] ?? 'Dado não cadastrado' }}</p>
                <hr>
            @endif
        @endforeach
    @endif

    @unless(count($fornecedores) > 0)
        <h3>Não existem fornecedores cadastrados</h3>
    @endunless
@endisset

