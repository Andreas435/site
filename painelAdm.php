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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Painel Administrativo</title>
    <link rel="icon" href="./assets/icon.png">
    <style>
        body {
            background-color: lightgray;
        }
        * {
            font-family: 'Raleway', sans-serif;
        }
        
        div#caixa {
            position: relative;
            background-color: lightblue;
            width: 50vw;
            padding-bottom: 10vh;
            margin-top: 25vh;
            padding-top: 2vh;
            border-radius: 10px;
            border: solid 2px blue;
        }

        th {
            background-color: darkgray;
            color: black;
        }

        input#botao {
            margin-top: 2vh;
            width: 8vw;
            height: 5vh;
            background-color: lightgreen;
            border-radius: 5px;
        }

    </style>
</head>
<style>
    nav{
      display: flex;
      align-items: baseline;
      position: relative;
      background:#020d3f;
    }
    h5{
      font-size: x-large;
      margin-left: 30px;
    }
    ul{
      display: flex;
      align-items: baseline;
    }
    .direita{
      position: absolute;
      right: 3%;
    }
    a{  text-decoration: none;
    color:white;
    }
</style>
<body> 
    <nav class="bar">
        <ul class="">
          <h2 class="Home">
            <a href="index.php">
              <span>&#x1F3E0;Home Page</span>
            </a>
          </h2>
        </ul>
         <section class="direita"> 
          <ul class="right">
              <h5 class="">
                <a href="principal.php">    &#x1F4D6;Biografia  </a>
              </h5>
              <h5 class="">
                <a href="principaldois.php">&#x1F4D6;Historia  </a>
              </h5>
          
          </ul>
         </section> 
      </nav>
    <div align="center">
    <div class="" id="caixa" align="center">
        <h1>SEJA BEM-VINDO AO PAINEL ADMINISTRATIVO</h1>
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
        <form action="alterar.php" method="POST">
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
                           <input type="text"    name="nome<?php echo $i; ?>" id="nome<?php echo $i; ?>" value="<?php echo $conta[1]  ?>">
                        </td>
                        <td>
                            <input type="number" name="idade<?php echo $i; ?>" id="idade<?php echo $i; ?>" value="<?php echo $conta[2] ?>">
                        </td>
                        <td>
                            <select name="cargo<?php echo $i; ?>" id="cargo<?php echo $i; ?>" > 
                                <option value="usuario" <?php  if($conta[5]!="adm"){ echo "selected"; } ?>>Usuario </option>
                                <option value="adm" <?php  if($conta[5]=="adm"){ echo "selected"; } ?>>Adm     </option> 
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
            <?php

            if(isset($_SESSION["msg"])){
                echo "<h3 >".$_SESSION["msg"]."</h3>";
                unset($_SESSION['msg']);
            }
            
            ?>
        <input type="submit" value="Salvar" id="botao">
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
    </div>
</body>
</html>