<?php

include('config.php');
session_start();

if (isset($_POST['Editar'])) {
    $id = $_POST['idedit'];

    $_SESSION['idenquete'] = $id;
}

$id2 = $_SESSION['idenquete'];
$consultaid = mysqli_query($connect, "SELECT * FROM enquete WHERE id  = '$id2'");
$data = $consultaid->fetch_array();

$titulo_enq = $data['titulo'];
$Data_inic = $data['Datainic'];
$Data_fim = $data['Datafim'];
$op_1 = $data['name1'];
$op_2 = $data['name2'];
$op_3 = $data['name3'];
$Status_enq = $data['statusEnquete'];
$qtd1 = $data['qtd1vote'];
$qtd2 = $data['qtd2vote'];
$qtd3 = $data['qtd3vote'];


?>
<!doctype html>
<title>Editar</title>

<head>
    <title>Crud</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/enquetes.css">
</head>

<body>
    <form class="myForm" method=" post" action="DataSend.php" name="formenq">
        <fieldset>
            <button class="Home" onclick=" window.open('home.php','_self')""> <p>HOME</p></button>
            <h1>Editar Enquete</h1><br>
            <div class=" row">
                <div class="column">
                    <input type="hidden" value="<?php echo $id ?>" id="id" name="id" required="true"><br><br>
                    <div class="input-group">
                        <label>Titulo:</label>
                        <input type="text" placeholder="Titulo" value="<?php echo $titulo_enq ?>" id="titulo" name="titulo" required="true"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Data Inicial:</label>
                        <input id="date" class="datetime" value="<?php echo date('Y-m-d', strtotime($Data_inic)); ?>" type="date" id="dateinic" name="dateinic"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Data Fim:</label>
                        <input id="date" class="datetime" value="<?php echo date('Y-m-d', strtotime($Data_fim)); ?>" type="date" id="datefim" name="datefim"><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 1:</label>
                        <input type="text" placeholder="Opção 1" value="<?php echo $op_1 ?>" id="op1" name="op1" required="true"><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 2:</label>
                        <input type="text" placeholder="Opção 2" value="<?php echo $op_2 ?>" id="op2" name="op2" required="true"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Opção 3:</label>
                        <input type="text" placeholder="Opção 3" value="<?php echo $op_3 ?>" id="op3" name="op3" required="false"><br><br>
                    </div>
                    <div class="input-group">
                        <label>Status:</label>
                        <select name="StatusEnq">
                            <option value="<?php echo $Status_enq ?>" selected><?php echo $Status_enq ?></option>
                            <option value="Aberto">Aberto</option>
                            <option value="Encerrado">Encerrado</option>
                        </select><br><br>
                    </div>
                </div>


                </div>

                <div class="row">

                    <button id="submit" value="submit" id="submit" name="submit">Confirmar</button>

                </div>
        </fieldset>
    </form>
</body>

</html>