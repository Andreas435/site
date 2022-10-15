<?php
    session_start();

    if ($_SESSION['cargo'] != "adm") {
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
        $sql = "SELECT * from contas ORDER BY id ASC"; //$selec = "SELECT * FROM usuarios";
        $result = mysqli_query($con, $sql);
        $res   =  mysqli_fetch_all($result); // mysqli_fetch_assoc($result);
        if (isset($res)){
            $contas = $res ;
            $_SESSION['tam'] = count($res);
            $existe = true;
        }
        else
            $existe = false;
        if($existe){        ?>
        <form action="alterar.php">
            <table class="ld-achievements-leaderboard" id="userTbl" bgcolor="#232323">
	            <tbody>
	            	<tr bgcolor="#dedede"> 
	            	    <th>
                            <h3>
                                <b style="color:white; text-shadow: 5px 5px 5px black;">
                                 Nome  
                                </b>
                            </h3>
                        </th>
	            	    <th>
                            <h3>
                                <b style="color:white; text-shadow: 5px 5px 5px black;">
                                 Idade 
                                </b>
                            </h3>
                        </th>
	            	    <th>
                            <h3>
                                <b style="color:white; text-shadow: 5px 5px 5px black;">
                                 Cargo 
                                </b>
                            </h3>
                        </th>
	            	</tr>
                    <?php 
                    $i = 0;
                     foreach ($contas  as $conta):
                        $id[$i] = $conta[0] ;
                       ?>
                    <tr>
                        <td>
                           <input type="text"    name="nome-<?php echo $i; ?>" id="nome-<?php echo $i; ?>" value="<?php echo $conta[1]  ?>">
                        </td>
                        <td>
                            <input type="number" name="idade-<?php echo $i; ?>" id="idade-<?php echo $i; ?>" value="<?php echo $conta[2] ?>">
                        </td>
                        <td>
                            <select name="cargo-<?php echo $i; ?>" id="cargo-<?php echo $i; ?>" > 
                                <option value="0" <?php  if($conta[5]!="adm"){ echo "selected"; } ?>>Usuario </option>
                                <option value="1" <?php  if($conta[5]=="adm"){ echo "selected"; } ?>>Adm     </option> 
                            </select>
                        </td>
                    </tr>
                   <?php 
                $i++;
                endforeach;
                $_SESSION["id"] = $id;
                ?> 
                </tbody>
            </table>
        <input type="submit" value="Salvar">
        </form>
        <?php
         }
        else{
            echo "<h1>
                    Nao existe cadastro
                  </h1>";
        }
        ?>
    </div>
</body>
</html>