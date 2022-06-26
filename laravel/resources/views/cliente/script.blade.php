<script language="JavaScript">

    clientFields = [
        'cliente_razao_social',
        'cliente_nome_fantasia',
        'cliente_tipo_pessoa',
        'cliente_inscricao',
        'cliente_endereco',
        'cliente_cidade',
        'cliente_uf',
        'cliente_nome_contato',
        'cliente_celular',
        'cliente_telefone',
        'cliente_email',
        'cliente_segmento',
        'cliente_obs',
    ]



    var columns = ['cliente_nome_fantasia', 'cliente_segmento', 'cliente_nome_contato', 'cliente_telefone'];

    function loadDataTable(url) {
        var url = "{{ route('cliente.list') }}";
        $.get(url, function(data, status){

            tableContent = '';
            rows = Object.values(data);
            rows.forEach(item => {
                row  = '<tr>';
                row += '<td>' + item.cliente_nome_fantasia + '</td>';
                row += '<td>' + item.cliente_segmento + '</td>';
                row += '<td>' + item.cliente_contato + '</td>';
                row += '<td>' + item.cliente_telefone + '</td>';
                row += '<td>' + options + '</td>';
                row += '</tr>';
                tableContent += row;
            })

            $('#table_body').html(tableContent);
        });
    }


    // Carrega o conteúdo na tabela
    window.onload = function(){

        $('#btn_clientes').addClass('active');

        var url = "{{ route('cliente.list') }}";
        $.get(url, function(data, status){
            console.log(data);

            tableContent = '';
            rows = Object.values(data);
            rows.forEach(item => {
                options = mountOptionMenu(item.cliente_id);
                row  = '<tr>';
                row += '<td>' + item.cliente_nome_fantasia + '</td>';
                row += '<td>' + item.cliente_segmento + '</td>';
                row += '<td>' + item.cliente_nome_contato + '</td>';
                row += '<td>' + item.cliente_telefone + '</td>';
                row += '<td>' + options + '</td>';
                row += '</tr>';
                tableContent += row;
            })

            $('#table_body').html(tableContent);
            $('#loading').hide();
        });
    }

    
    function mountOptionMenu(id) {

        let routeV = "{{ route('cliente.view')}}";
        let routeE = "{{ route('cliente.edit')}}";
        let routeR = "{{ route('cliente.remove')}}";
        let menu   = '<div class="table__options">';
        let formId = 'form_cliente';

        menu += '<button class="tooltip" onclick="optionView(\'' + id + '\', \'' + routeV + '\')">';
        menu += '<i class="material-symbols-rounded">visibility</i>';
        menu += '<span class="tooltiptext">Visualizar</span>';
        menu += '</button>';

        menu += '<button class="tooltip" onclick="optionEdit(\'' + id + '\', \'' + routeV + '\', \'' + routeE + '\', \'' + formId + '\')">';
        menu += '<i class="material-symbols-rounded">edit</i>';
        menu += '<span class="tooltiptext">Editar</span>';
        menu += '</button>';

        menu += '<button class="tooltip remove" onclick="optionRemove(\'' + id + '\', \'' + routeV + '\', \'' + routeR + '\', \'' + formId + '\')">';
        menu += '<i class="material-symbols-rounded">close</i>';
        menu += '<span class="tooltiptext">Excluir</span>';
        menu += '</button>';

        menu += '</div>';

        return menu;
    }

</script>