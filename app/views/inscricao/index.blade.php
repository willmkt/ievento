@section('content')
<div class="row">
    <h1>Todos os inscritos</h1>
    <a class="btn btn-success" href="{{ url('inscricao/create') }}">Nova Inscrição</a>
</div>
<div class="row">
    {{ $inscricaos->links() }}
</div>
<div class="row">
    <table class="table">
        <thead>

            <th>Nome</th>
            <th>Cpf</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Instituicao</th>
        </thead>
        <tbody>
            @foreach($inscricaos as $inscricao)
	           <tr>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->nome }}</a>
                    </td>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->cpf }}</a>
                    </td>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->email }}</a>
                    </td>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->telefone }}</a>
                    </td>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->instituicao }}</a>
                    </td>

                    <td>
        <input type="button" class="btn btn-success" onclick="printDiv('printableArea-{{ $inscricao->id }}')" value="Imprimir" />

                    <div id="printableArea-{{ $inscricao->id }}" class="hidden">
                        <div class="cracha">
                         <p id="nomep">{{ $inscricao->nome }}</p>
                         <p id="empresap">{{ $inscricao->instituicao }}</p>
                         <?php echo DNS1D::getBarcodeSVG($inscricao->cpf, "C39" ,1,33);?>
                         <?php //echo DNS2D::getBarcodeSVG($inscricao->id, "QRCODE");?>
                        </div>
                    </div>

                    </td>

	           </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
