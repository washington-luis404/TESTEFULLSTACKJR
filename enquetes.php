<?php

include('src/config.php');

if (isset($_POST['submit'])) {

    $titulo_enq = $_POST['titulo'];
    $Data_inic = $_POST['dateinic'];
    $Data_fim = $_POST['datefim'];
    $op_1 = $_POST['op1'];
    $op_2 = $_POST['op2'];
    $op_3 = $_POST['op3'];
    $Status_enq = $_POST['StatusEnq'];


    if ($titulo_enq == "" || $Data_inic == "" || $Data_fim == "" || $op_1 == "" || $op_2 == "" || $op_3 == "") {

        echo '<div class="alert alert-danger">Enquete não Cadastrado. </div>';
    } else {

        if (mysqli_affected_rows($connect) != 0 || $titulo_enq == "" || $Data_inic == "" || $Data_fim == "" || $op_1 == "" || $op_2 == "" || $op_3 == "") {

            $result_enq = "INSERT INTO enquete(titulo, Datainic,Datafim,statusEnquete,name1,name2,name3,qtd1vote,qtd2vote,qtd3vote) 
       VALUES ('$titulo_enq','$Data_inic','$Data_fim','$Status_enq','$op_1','$op_2','$op_3','0','0','0')";

            $resultado = mysqli_query($connect, $result_enq);
        }
    }
}


?>
<!doctype html>
<title>Example</title>

<head>
    <title>Crud</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/enquetes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form class="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formenq">
        <fieldset>
            <button class="HOME" onclick=" window.open('home.php','_self')""> <p>HOME</p></button>
            <h1>Cadastrar Enquete</h1><br>
            <div class=" row">
                <div class="column">
                    <div class="input-group">
                        <label>Titulo:</label>
                        <input type="text" placeholder="Nome" id="titulo" name="titulo" required="true"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Data Inicial:</label>
                        <input id="date" class="datetime" type="date" id="dateinic" name="dateinic" min="1940-01-01" max="2030-12-12"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Data Fim:</label>
                        <input id="date" class="datetime" type="date" id="datefim" name="datefim" min="1940-01-01" max="2030-12-12"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 1:</label>
                        <input type="text" placeholder="Opção 1" id="op1" name="op1" required="true"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 2:</label>
                        <input type="text" placeholder="Opção 2" id="op2" name="op2" required="true"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 3:</label>
                        <input type="text" placeholder="Opção 3" id="op3" name="op3" required="false"><br><br>
                    </div>
                    <div class="input-group">
                        <select name="StatusEnq">
                            <option value="#" selected>Escolha Status atual</option>
                            <option value="Aberto">Aberto</option>
                            <option value="Encerrado">Encerrado</option>
                        </select><br><br>
                    </div>
                </div>
                </div>
                </div>
                </div>

                <div class="row">

                    <button id="submit" value="submit" id="submit" name="submit">Enviar</button>



                </div>
        </fieldset>
    </form>
</body>

</html>