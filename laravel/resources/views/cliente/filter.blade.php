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

        <!-- I Know this is ugly, it's temporary -->
        <div style="display: none;">{{ $urlAdd =  route('cliente.add')}}</div>
        <button onclick="optionAdd('{{$urlAdd}}', 'form_cliente')" class="action__add" id="btn-add">
            <i class="material-symbols-rounded">add</i>
            <span>Adicionar</span>
        </button>
        
    </form> 

</div>