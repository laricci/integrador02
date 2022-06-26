<nav>

    <section>

        <div class="header">
            <i class="material-symbols-rounded">auto_mode</i>
            <span>Neo Helper</span>
        </div>

        <div class="menu">
            
            <button class="menu__btn" id="btn_dashboard" href="">
                <span>Dashboard</span>
            </button>
            
            <button class="menu__btn" id="btn_projetos" >
                <span>Projetos</span>
            </button>

            <button class="menu__btn" id="btn_clientes" onclick="location.href='{{route('cliente')}}'">
                <span>Clientes</span>
            </button>
            
            <button class="menu__btn" id="btn_fornecedores" onclick="location.href='{{route('fornecedor')}}'">
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