$(async function(){

    var estados = await $.ajax({
        url: "/api/estado/",
        type: "get",
        dataType: "json",
        success: function (data) {
        }
    }).done();


    var cidades = await $.ajax({
        url: "/api/cidade/",
        type: "get",
        dataType: "json",
        success: function (data) {
        }
    }).done();

    var values = await $.ajax({
        url: "/api/pessoa/",
        type: "get",
        dataType: "json",
        success: function (data) {
        }
    }).done();

    $("#gridContainer").dxDataGrid({
        dataSource: values.data,
        remoteOperations: { groupPaging: true },
        keyExpr: "pessoa_id",
        showBorders: true,
        paging: {
            pageSize: 10
        },
        selection: {
            mode: "single"
        },
        hoverStateEnabled: true,
        editing: {
            mode: "row",
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true,
            useIcons: true
        },
        columns: [
            {
                dataField: "pessoa_id",
                caption: "Id",
                visible: false
            },
            {
                dataField: "nome",
                caption: "Nome",
                validationRules: [
                    {
                        type: "required",
                        message: "Nome é obrigatorio"
                    }
                ]
            },{
                dataField: "cpf",
                caption: "CPF",
                validationRules: [
                    {
                        type: "required",
                        message: "Cpf é obrigatorio"
                    }, {
                        type: "custom",
                        validationCallback: function(params) {
                            return TestaCPF(params.value);
                        },
                        message: "CPF inválido"
                    },
                ]
            },{
                dataField: "data_nascimento",
                caption: "Data de Nascimento",
                validationRules: [
                    {
                        type: "required",
                        message: "Data de nascimento é obrigatorio"
                    }
                ],
                dataType: 'date',
                format: 'dd/MM/yyyy'
            },{
                dataField: "email",
                caption: "Email",
                validationRules: [
                    {
                        type: "required",
                        message: "Email é obrigatorio"
                    }, {
                        type: "email",
                        message: "Email inválido"
                    }
                ]
            },{
                dataField: "estado",
                caption: "Estado",
                validationRules: [
                    {
                        type: "required",
                        message: "Estado é obrigatorio"
                    }
                ],
                setCellValue: function(rowData, value) {
                    rowData.estado = value;
                    rowData.cidade = null;
                },
                lookup: {
                    dataSource: estados.data,
                    displayExpr: "estado",
                    valueExpr: "id"
                }
            },{
                dataField: "cidade",
                caption: "Cidade",
                validationRules: [
                    {
                        type: "required",
                        message: "Cidade é obrigatorio"
                    }
                ],
                lookup: {
                    dataSource: function(options) {
                        return {
                            store: cidades.data,
                            filter: options.data ? ["estado_id", "=", options.data.estado] : null
                        };
                    },
                    valueExpr: "id",
                    displayExpr: "cidade"
                }
            },{
                dataField: "logradouro",
                caption: "Logradouro",
                validationRules: [
                    {
                        type: "required",
                        message: "Logradouro é obrigatorio"
                    }
                ],
            },
        ],
        onEditorPreparing: function(e) {
            if(e.parentType === "dataRow" && e.dataField === "cidade") {
                e.editorOptions.disabled = (typeof e.row.data.estado !== "number");
            }
        },
        onRowInserting: function(e) {
            var dataNasc = new Date(e.data.data_nascimento)
            e.data.data_nascimento = dataNasc.getFullYear() + '-'+ dataNasc.getMonth() + '-' + dataNasc.getDate()
            $.ajax({
                url: "/api/pessoa/",
                type: "post",
                dataType: "json",
                data: e.data,
                success: function (data) {
                    setTimeout(function(){
                        DevExpress.ui.notify("Registro inserido com sucesso!", "success", 500);
                    }, 4000);
                },
                error: function (request, error){
                    DevExpress.ui.notify("Falha ao inserir", "error", 500);
                    setTimeout(function(){
                        window.location.reload();
                    }, 3000);
                }
            }).done();
        },
        onRowUpdating: function(e) {
            e.newData = $.extend({}, e.oldData, e.newData);
            $.ajax({
                url: "/api/pessoa/"+e.key,
                type: "put",
                dataType: "json",
                data: e.newData,
                success: function (data) {
                    DevExpress.ui.notify("Registro atualizado com sucesso!", "success", 500);
                },
                error: function (request, error){
                    DevExpress.ui.notify("Falha ao atualizar!", "error", 500);
                    setTimeout(function(){
                        window.location.reload();
                    }, 3000);
                }
            }).done();
        },
        onRowRemoving: function(e) {
            console.log(e);
            $.ajax({
                url: "/api/pessoa/"+e.data.cpf,
                type: "delete",
                success: function (data) {
                    DevExpress.ui.notify("Registro removido com sucesso!", "success", 500);
                },
                error: function (request, error){
                    DevExpress.ui.notify("Falha ao inserir!", "error", 500);
                    setTimeout(function(){
                        window.location.reload();
                    }, 4000);
                }
            }).done();
        },
        onSelectionChanged: function (selectedItems) {
            var data = selectedItems.selectedRowsData[0];
            if(data) {
                $("#pessoaNome").text(data.nome);
                $("#pessoaCpf").text(data.cpf);
                $("#pessoaData").text(data.data_nascimento);
                $("#pessoaEmail").text(data.email);
                $("#pessoaEstado").text(estados.data.find(x => x.id == data.estado).estado);
                $("#pessoaCidade").text(cidades.data.find(x => x.id == data.cidade).cidade);
                $("#pessoaLogradouro").text(data.logradouro);
            }

            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";

            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        },
    });
});
