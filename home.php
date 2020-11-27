<?php
include('src/config.php');

$consulta = mysqli_query($connect, 'SELECT * FROM enquete');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title><br>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1 style="font-size:2vw">ENQUETES</h1>
  <h2 onclick="window.open('enquetes.php','_self')" style="font-size:1.2vw">+Nova Enquete</h2>


  <div class=" container">
    <table class="table">
      <thead>
        <tr>
          <th>status</th>
          <th>Titulo</th>
          <th>Data Inicio</th>
          <th>Data Fim</th>
          <th>Opções</th>
          <th>Modificar</th>
          <th>Deletar</th>
        </tr>
      </thead>
      <tbody>

        <?php
        if ($consulta) {
          while ($dado = $consulta->fetch_array()) {
            $idvote = $dado['id'];
            $vote1 = $dado['qtd1vote'];
            $vote2 = $dado['qtd2vote'];
            $vote3 = $dado['qtd3vote'];
            $status = $dado['statusEnquete'];

            if ($status == "Aberto") {
              $colorMapv = '#00FF00';
              $status = 'enabled';
            } else if ($status == "Encerrado") {
              $colorMapv = '#FF0000';
              $status = 'disabled';
            }

        ?>
            <td style="background-color: <?php echo $colorMapv; ?>;"> <?php echo $dado['statusEnquete']; ?></td>
            <td><?php echo $dado['titulo']; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado['Datainic'])); ?>
            </td>

            <td><?php echo date("d/m/Y", strtotime($dado['Datafim'])); ?>
            </td>
            <td align="left">
              <box class="box-btn">
                <box class="boxbtn">
                  <form method="post" action="src/vote.php" name="formev1">
                    <input class="submitv1" type="submit" value="<?php echo $dado['name1']; ?>" id="submitv1" name="submitv1" <?php echo $status ?>>
                    <a><?php echo $dado['qtd1vote']; ?></a><br>
                  </form><br>
                </box>
                <box class="boxbtn">
                  <form method="post" action="src/vote.php" name="formev2">
                    <input class="submitv1" type="submit" value="<?php echo $dado['name2']; ?>" id="submitv2" name="submitv2" <?php echo $status ?>>
                    <a><?php echo $dado['qtd2vote']; ?></a><br>
                  </form><br>
                </box>
                <box class="boxbtn">
                  <form method="post" action="src/vote.php" name="formev3">
                    <input class="submitv1" type="submit" value="<?php echo $dado['name3']; ?>" id="submitv3" name="submitv3" <?php echo $status ?>>
                    <a><?php echo $dado['qtd3vote']; ?></a><br>
                  </form><br>
                </box>
              </box>
              <box class="box-btn">
                <form method="post" method="post " action="src/EditEnquete.php" name="formedit">
            <td align="center">
              <input type="hidden" id="idedit" name="idedit" value="<?php echo $dado['id']; ?>">
              <input class="submitedit" type="submit" value="Editar" id="Editar" name="Editar">
            </td>
            </box>
            </form>
            <box class="box-btn">
              <td align="center">
                <?php echo "<a  href='src/delete.php?id=" . $dado['id'] . "'>
                <img src='imagens/lixo.png' width='60' height='60' alt= 'Excluir'> </a>"; ?>

              </td>
            </box>
            </box>
            </box>
            </box>

            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>