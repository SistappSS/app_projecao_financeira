<x-app-layout>
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="display table" style="width:100%">
                        <thead>
                        <tr class="text-uppercase text-nowrap">
                            <th></th>
                            <th>Conduções</th>
                            <th>Saldo Bilhete</th>
                            <th>Despesa</th>
                            <th>Entrada</th>
                            <th>Poupança</th>
                            <th>Ações</th>
                            <th>Despesa Apto</th>
                            <th>Conta Apto</th>
                            <th>Saldo</th>
                        </tr>
                        </thead>
                        <tbody id="loadDatatable">
                        @foreach ($balances as $balance)
                            <tr class="text-nowrap">
                                <td>{{$balance['date']}}</td>
                                <td style="background: #eae2ff;">R$ 7.20</td>
                                <td style="background: #eae2ff;">R$ 100.00</td>
                                <td style="background: #ffc0c0;">{{brlPrice($balance['despesa'])}}</td>
                                <td style="background: #ccffcc;">{{brlPrice($balance['entrada'])}}</td>
                                <td style="background: #ffffdc;">R$ 0.00</td>
                                <td style="background: #ffd6ff;">R$ 0.00</td>
                                <td style="background: #ffdddd;">R$ 0.00</td>
                                <td style="background: #ffdddd;">R$ 0.00</td>
                                <td style="background: #ccffcc;">{{brlPrice($balance['balance'])}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
