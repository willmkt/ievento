@section('content')
<div class="row">
</div>
<div class="row">
    {{ $inscricaos->links() }}
</div>
<div class="row">
    <table class="table">
        <thead>
            <th>Nome</th>
        </thead>
        <tbody>
            @foreach($inscricaos as $inscricao)
	           <tr>

                    <td>
                        <a href="{{ url('inscricao/details/'.$inscricao->id) }}">{{ $inscricao->nome }}</a>
                    </td>

                    <td>


                    <input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="Imprimir" />

                    </td>

	           </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
