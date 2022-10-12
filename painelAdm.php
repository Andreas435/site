<?php
    session_start();

    if (!$_SESSION['cargo'] == "administrador") {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do ADM</title>
    <link rel="icon" href="./assets/icon.png">
</head>

<body>
    <div class="" id="">
        <h1>SEJA BEM-VINDO AO PAINEL ADMINISTRAVO</h1>
        <?php
        include_once("conec.php");
        $sql = "SELECT Nome, Cargo, Idade from contas";
        $result = mysqli_query($con, $sql);
        $res    = mysqli_fetch_assoc($result);
        if (isset($res)){
            $contas = "";
        }
        ?>
        <form action="">
        <table class="ld-achievements-leaderboard" id="userTbl" bgcolor="#232323">
	    <tbody>
	    	<tr bgcolor="#dedede"> 
	    	    <th><h3><b style="color:white; text-shadow: 5px 5px 5px black;"> Nome  </b></h3></th>
	    	    <th><h3><b style="color:white; text-shadow: 5px 5px 5px black;"> Idade </b></h3></th>
	    	    <th><h3><b style="color:white; text-shadow: 5px 5px 5px black;"> Cargo </b></h3></th>
	    	</tr>
            <?php 
             foreach ($contas  as $conta): ?>
            <tr>
                <td>
                   <input type="text"    name="" id="" value="<?php echo $conta["Nome"] ?>">
                </td>
                <td>
                    <input type="number" name="" id="" value="<?php echo $conta["Idade"]?>">
                </td>
                <td>
                    <select name="" id="">
                        <option value="0">Usuario</option>
                        <option value="1">Adm</option>
                    </select>
                </td>
            </tr>
           <?php  endforeach;?> 
            </tbody>
        </table>
        <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>