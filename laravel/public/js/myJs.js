
    function showModal() {
        $('#modal_container').removeClass('hide');
    }

    function hideModal(fields) {
        $('#modal_container').addClass('hide');
        fields.forEach( key => {
            let element = document.getElementById(key);
            $(element).val('');
            $(element).attr('readonly', false);
        })
    }

    function optionAdd(urlAddAction, formAddId) {

        $('#btn_save').click(function() {
            $('#loading').show();
            let form = $('#' + formAddId);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: urlAddAction,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $('#loading').hide();
                    $('#msg_list').html('Cadastro adicionado com sucesso!');
                    $('#modal_container').addClass('hide');
                    console.log(data); // show response from the php script.
                }
            });
        });

        $('#modal_title').html('Adicionar');
        $('#btn_remove').hide();
        $('#btn_save').show();
        $('#btn_reset').show();
        $('#control_save').show();
        $('#modal_container').removeClass('hide');

    }

    function optionView(idView, urlView) {
        $('#loading').show();
        let url = urlView + '/' + idView;
        $.get(url, function(data, status){
            let keys = Object.keys(data);
            keys.forEach( key => {
                let element = document.getElementById(key);
                $(element).val(data[key]);
                $(element).attr('readonly', true);
            })
            $('#loading').hide();
        });

        $('#modal_title').html('Visualizar');
        $('#control_save').hide();
        $('#modal_container').removeClass('hide');
    }

    function optionEdit(idEdit, urlEdit, urlEditAction, formEditId) {
        $('#loading').show();
        let url = urlEdit + '/' + idEdit;
        $.get(url, function(data, status){
            let keys = Object.keys(data);
            keys.forEach( key => {
                let element = document.getElementById(key);
                $(element).val(data[key]);
                $(element).attr('readonly', false);
            })
            $('#loading').hide();
        });

        $('#btn_save').click(function() {
            $('#loading').show();
            let formEl = document.getElementById(formEditId);
            let form = $(formEl);
            let urlAction = urlEditAction + '/' + idEdit;
            console.log(form.serialize());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: urlAction,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    console.log(data); // show response from the php script.
                    $('#loading').hide();
                    $('#msg_list').html('Cadastro atualizado com sucesso!');
                    $('#modal_container').addClass('hide');
                }
            });
        });

        $('#modal_title').html('Editar');
        $('#btn_remove').hide();
        $('#btn_save').show();
        $('#btn_reset').show();
        $('#control_save').show();
        $('#modal_container').removeClass('hide');
    }

    function optionRemove(idRemove, urlRemove, urlRemoveAction) {
        $('#loading').show();
        let url = urlRemove + '/' + idRemove;
        $.get(url, function(data, status){
            let keys = Object.keys(data);
            keys.forEach( key => {
                let element = document.getElementById(key);
                $(element).val(data[key]);
                $(element).attr('readonly', true);
            })
            $('#loading').hide();
        });

        $('#btn_remove').click(function() {
            $('#loading').show();
            let url = urlRemoveAction + '/' + idRemove;
            $.get(url, function(data, status){
                $('#modal_container').addClass('hide');
                $('#loading').hide();
                $('#msg_list').html('Cadastro removido com sucesso!');
            });
        });

        $('#modal_title').html('Remover');
        $('#btn_remove').show();
        $('#btn_save').hide();
        $('#btn_reset').hide();
        $('#control_save').show();
        $('#modal_container').removeClass('hide');
    }