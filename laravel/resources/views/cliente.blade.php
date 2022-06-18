
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/myCss.css')}}">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    <!-- csrf token to be able to send ajax requests with axios -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

    <div id='content'>teste</div>

    <nav>

        <section>

            <div class="header">
                <i class="material-symbols-rounded">auto_mode</i>
                <span>Neo Guide</span>
            </div>
    
            <div class="menu">
                
                <button class="menu__btn">
                    <span>Dashboard</span>
                </button>
                
                <button class="menu__btn">
                    <span>Projetos</span>
                </button>
    
                <button class="menu__btn">
                    <span>Clientes</span>
                </button>
                
                <button class="menu__btn">
                    <span>Fornecedores</span>
                </button>
                
            </div>
    
            <div class="tools">
    
                <button class="tools__btn tooltip">
                    <i class="material-symbols-rounded">notifications</i>
                    <span class="tooltiptext">Notificações</span>
                </button>
    
                <button class="tools__btn tooltip">
                    <i class="material-symbols-rounded">settings</i>
                    <span class="tooltiptext">Configurações</span>
                </button>
    
                <button class="tools__img">
                    <i class="material-symbols-rounded">person</i>
                </button>
    
            </div>

        </section>

    </nav>

    <main>

        <section>

            <div class="filter">

                <form action="#">

                    <div class="filter__search">
                        <input type="text" id="fname" name="fname" placeholder="Procurar por...">
                        <i class="material-symbols-rounded">search</i>
                    </div>

                    <div class="filter__order">
                        <select name="cars" id="cars">
                            <option value="" selected>Ordenar por</option>
                            <option value="1">Data Crescente</option>
                            <option value="2">Data Decrescente</option>
                            <option value="3">Título</option>
                        </select>
                    </div>

                    <button onclick="$('#modal_cliente').show()" class="action__add">
                        <i class="material-symbols-rounded">add</i>
                        <span>Adicionar</span>
                    </button>
                    
                </form> 

            </div>

            <div class="section__table">
        
                <table>
        
                    <thead>
                        <tr>                                                                                                                    
                            <th>Nome</th>
                            <th>Segmento</th>
                            <th>Contato</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    
                    <tbody id="table_body"></tbody>
        
                </table>
        
            </div>

        </section>

    </main>

    <!-- Incluindo Javascript -->
    <script language="JavaScript">

        // Carrega o conteúdo na tabela
        window.onload = function(){
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
                    row += '</tr>';
                    tableContent += row;
                })

                $('#table_body').html(tableContent);
            });
        }

    </script>
</body>
</html>