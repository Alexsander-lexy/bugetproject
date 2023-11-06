<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento instantâneo</title>
    <link rel="shortcut icon" href="./img/logo-maker-producoes-favicon.png" type="image/x-icon">
    <!--Conectando à biblioteca de ícones do google-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="doc">
        <header>
            <img class="main-logo header" src="./img/maker-producoes-retangular.png" alt="Maker Logo">
            <h3 class="header">Proposta Nº 189<br>24/10/2023</h3>
        </header>
        <main>
            <h1>Proposta <br>
                Produção de Conteúdo
            </h1>
            

            
            <!--INCLUIR INFORMAÇÕES PARA NF-->
            <div class="oculto">
                <form action="pesquisar_cliente.php" method="post">
                    <label for="cpf">Digite o CPF/CNPJ do cliente:</label><br>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" required>

                    <input type="submit" value="Pesquisar">
                </form>
                <a href="./cadastro_clientes.php">
                    <button>Novo Cliente</button>
                </a>
                <a href="./cadastro_servicos.php">
                    <button>Novo Serviço</button>
                </a>
                <hr>
                <br>
            </div>
            <div id="cabecalho-cliente">

    </div>

            <div><!-- BOTÃO IMPRESSÃO  -->
                <button class="btn-print" type="button">
                    <span class="material-symbols-outlined">
                        print
                    </span>
                </button>
                <button class="btn-relatorio" type="button">
                    <span class="material-symbols-outlined">
                        receipt_long
                    </span>
                </button>
            </div>

            <?php
        if (isset($_SESSION['clienteEncontrado']) && $_SESSION['clienteEncontrado']) {
            // Cliente foi encontrado, exibir informações
            $cliente = $_SESSION['cliente'];
            echo "Nome: " . $cliente['NomeEmpresa'] . "<br>";
            echo "Whatsapp: " . $cliente['CelularWhatsapp'] . "<br>";
            echo "CNPJ: " . $cliente['CNPJ'] . "<br>";
            echo "CEP: " . $cliente['CEP'] . "<br><br>";
        } else {
            // Cliente não foi encontrado, você pode exibir uma mensagem adequada aqui
            echo "<p style='color:red;'>Nenhum cliente encontrado.</p>";
        }
        ?>
            <div>
                <table>
                    <caption>Projeto: Produção de Vídeo - Sem Roteiro</caption>
                    <thead>
                        <th>Nº</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Qt.</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <!--A IDEIA É QUE ESSA LISTA SE REPITA DE ACORDO COM UM MAPA DE INFORMAÇÕES FEITO POR UM FORM-->
                            <td class="td-n">1</td>
                            <td class="td-desc">Produção de curta duração ( até 2 horas )</td>
                            <td>R$350,00</td>
                            <td class="td-quant">01</td>
                            <td class="td-total">R$ 350,00</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="4">Valor</td>
                            <td class="valor" colspan="1">R$70000,00</td>
                        </tr>
                        <tr>
                            <td colspan="4">Taxa de Deslocamento</td>
                            <td class="valor" colspan="1">R$ 2500,00</td>
                        </tr>
                        <tr>
                            <td class="valorfinal" colspan="4">Total</td>
                            <td class="valor valorfinal" colspan="1">R$725000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div>
                <div class="termos">
                    <h3>TERMOS</h3>
                    <ol>
                        <li>Os agendamentos serão realizados mediante pagamento ou emissão de boleto com data
                            pré-estabelecida;</li>
                        <li>Produções externas terão taxa de R$25, consultar taxas para produções fora do perímetro
                            urbano ou em outras cidades;</li>
                        <li>Produções por padrão são entregues com no mínimo 3 dias úteis, projetos que demandem um
                            prazo de entrega mais curto que o habitual podem estar sujeitos a uma taxa de urgência para
                            compensar o tempo e esforço adicionais requeridos;</li>
                        <li>Para a efetividade da entrega do trabalho, recomenda-se fortemente respeitar o roteiro
                            pré-estabelecido. É permitida apenas uma alteração para o conteúdo final entregue,
                            alterações de tilhas sonoras de vídeo já produzido, que demandem retrabalho, não são
                            permitidas ou terão uma taxa adicional para a entrega do conteúdo.</li>
                    </ol>
                </div>

                <div class="descricao">
                    <h3>DESCRIÇÃO DE CÁLCULO</h3>

                    <li>Desconto aplicado: 15% 🠒 R$ 200,00</li>
                    <li>Comissão / edição de vídeo: 35% 🠒 R$ 300,00</li>
                    <li>Comissão / Produção: 35% 🠒 R$ 300,00</li>
                    <li>Taxa administrativa: 10% 🠒 R$65,00</li>
                    <li>Prazo: 90 dias 🠒 30/12/2023</li>
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>

</html>