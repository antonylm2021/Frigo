<link href="/css/app.css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
@include('Header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <div class='.container-fluid ' id='c2'>
        <br>
        <h5>Pagamentos Parciais</h5>
</head>

<body>

    <table id="tabelaPedidos" class="table table-bordered table-condensed " style="font-size: 15px; width:100%;">
        <thead class="thead-DARK">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Conta Original</th>
                <th scope="col">Conta</th>
                <th scope="col">Tipo</th>
                <th scope="col">Usuário</th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($Extrato as $row)

                <td>{{ $row->id }}</td>
                <td>{{ $row->valor }}</td>
                <td>{{ $row->data }}</td>
                <td>{{ $row->id_original}}</td>
                <td>{{ $row->conta }}</td>
                <td>{{ $row->pessoa }}</td>
                <td>{{ $row->usuario }}</td>


                <td>
                    <form action="/ContasaReceber/EstornarParcial" method="post">
                        @csrf
                        <input class="btn btn-warning" name="" type="submit" Value='Estornar'>
                        <input name='id'type='hidden'value='{{ $row->id }}'>
                        <input name='valor'type='hidden' value='{{ $row->valor }}'>
                        <input name='data'type='hidden'value='{{ $row->data }}'>
                        <input type='hidden' name='id_original' value='{{ $row->id_original}}'>
                        <input type='hidden'name='conta'value='{{ $row->conta }}'>
                        <input type='hidden' name='pessoa'value='{{ $row->pessoa }}'>
                        <input type='hidden'name='usuario'value='{{ $row->usuario }}'>
                    </form>
                </td>
            </tr>
            @endforeach
            <script></script>



</body>
{{ $Extrato->links() }}

@include('footer')

</html>
