<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Desafio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script   script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.4/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.4/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/21.1.4/js/dx.all.js"></script>


    <script src="{{ asset('js/Utils/TestaCpf.js') }}"></script>
    <script src="{{ asset('js/Site/gerarTabela.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/modal.css')}}" />

</head>
<body class="dx-viewport">
    <div class="demo-container">

        <div id="gridContainer"></div> <!-- tabela com os dados -->


        <div id="myModal" class="modal" style="display:none">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <div class="demo-container">
                    <div class="form">
                        <div class="dx-fieldset">
                            <div class="dx-fieldset-header">Dados:</div>

                            <div class="dx-field">
                                <div class="dx-field-label" >Nome</div>
                                <div class="dx-field-value-static"><span id="pessoaNome"></span></div>
                            </div>

                            <div class="dx-field">
                                <div class="dx-field-label">Cpf</div>
                                <div class="dx-field-value-static"><span id="pessoaCpf"></span></div>
                            </div>

                            <div class="dx-field">
                                <div class="dx-field-label">Data de Nascimento</div>
                                <div class="dx-field-value-static"><span id="pessoaData"></span></div>
                            </div>

                            <div class="dx-field">
                                <div class="dx-field-label">Email</div>
                                <div class="dx-field-value-static"><span id="pessoaEmail"></span></div>
                            </div>
                        </div>

                        <div class="dx-fieldset">
                            <div class="dx-fieldset-header">Endereço:</div>

                            <div class="dx-field">
                                <div class="dx-field-label">Estado</div>
                                <div class="dx-field-value-static"><span id="pessoaEstado"></span></div>
                            </div>

                            <div class="dx-field">
                                <div class="dx-field-label">Cidade</div>
                                <div class="dx-field-value-static"><span id="pessoaCidade"></span></div>
                            </div>

                            <div class="dx-field">
                                <div class="dx-field-label">Logradouro</div>
                                <div class="dx-field-value-static"><span id="pessoaLogradouro"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


            </div>


        </div>

        </div>

    </div>
</body>
</html>

<script>




</script>
