<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coupe du Monde</title>
</head>
<body>
    <div id="container">
        <!-- LOGO -->
        <div id="logo">Coupe du Monde</div>
        <!-- NAVBAR -->
        <div id="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact</a></li>
                <!-- LOGIN -->
                <li id="login"><a href="#">Login</a></li>
            </ul>
        </div>
        <!-- IMAGE -->
        <div id="image">
            <img src="img/fifa-2022-world-cup-logo-qatar_z5t4wjudq9ty1mh5kqpn38ott-removebg-preview.png">
        </div>
        <!-- CONTENT -->
        <div id="content">
            <h2>FIFA WORLD CUP</h2>
            <h4>QATAR 2022</h4>
        </div>
        <!-- LINES -->
        <div id="line1"></div>
        <div id="line2"></div>
    </div>      
    <!--********************************************** FORM *****************************************************-->
    <form action="index.php" method="post">
        <div>
            <input type="text" placeholder="Maroc" name="Equipe1Tour1">
            <input type="text" placeholder="Croitie" name="Equipe2Tour1">
        </div>
        <div> 
            <input type="text" placeholder="Belgique" name="Equipe3Tour1">
            <input type="text" placeholder="Canada" name="Equipe4Tour1">
        </div>
        <div>
            <input type="text" placeholder="Maroc" name="Equipe1Tour2">
            <input type="text" placeholder="Canada" name="Equipe4Tour2">
        </div>
        <div> 
            <input type="text" placeholder="Croitie" name="Equipe2Tour2">
            <input type="text" placeholder="Belgique" name="Equipe3Tour2">
        </div>
        <div>
            <input type="text" placeholder="Maroc" name="Equipe1Tour3">
            <input type="text" placeholder="Belgique" name="Equipe3Tour3">
        </div>
        <div> 
            <input type="text" placeholder="Croitie" name="Equipe2Tour3">
            <input type="text" placeholder="Canada" name="Equipe4Tour3">
        </div>
    
        <input type="submit" value="Simuler" name="submit">
    </form>

<!--************************************************************** PHP ************************************************************-->

    <?php
    if(isset($_POST['submit'])) {

        $input1=$_POST["Equipe1Tour1"];
        $input2=$_POST["Equipe2Tour1"];
        $input3=$_POST["Equipe3Tour1"];
        $input4=$_POST["Equipe4Tour1"];
        $input5=$_POST["Equipe1Tour2"];
        $input6=$_POST["Equipe4Tour2"];
        $input7=$_POST["Equipe2Tour2"];
        $input8=$_POST["Equipe3Tour2"];
        $input9=$_POST["Equipe1Tour3"];
        $input10=$_POST["Equipe3Tour3"];
        $input11=$_POST["Equipe2Tour3"];
        $input12=$_POST["Equipe4Tour3"];
        $arr = array("Equipe1"=>0,"Equipe2"=>0,"Equipe3"=>0,"Equipe4"=>0);
        $match = array("matchEquipe1"=>0, "matchEquipe2"=>0,"matchEquipe3"=>0,"matchEquipe4"=>0);
        $ganiant=array("ganiantEquipe1"=>0,"ganiantEquipe2"=>0,"ganiantEquipe3"=>0,"ganiantEquipe4"=>0);
        $empati =array("ganiantEquipe1"=>0,"ganiantEquipe2"=>0,"ganiantEquipe3"=>0,"ganiantEquipe4"=>0);
        $perdu =array("ganiantEquipe1"=>0,"ganiantEquipe2"=>0,"ganiantEquipe3"=>0,"ganiantEquipe4"=>0);
        $golfor =array("ganiantEquipe1"=>0,"ganiantEquipe2"=>0,"ganiantEquipe3"=>0,"ganiantEquipe4"=>0);
        $golin =array("ganiantEquipe1"=>0,"ganiantEquipe2"=>0,"ganiantEquipe3"=>0,"ganiantEquipe4"=>0);
        if($input1!="" && $input2!=""){
            $match["matchEquipe1"]+=1;
            $match["matchEquipe2"]+=1;
            $golfor["ganiantEquipe1"]+=$input1;
            $golin["ganiantEquipe2"]+=$input2;
            $golfor["ganiantEquipe1"]+=$input2;
            $golin["ganiantEquipe2"]+=$input1;
        if($input1 > $input2){
            $arr["Equipe1"]+=3;
            $ganiant["ganiantEquipe1"]+=1;
            $perdu["ganiantEquipe1"]+=1;
        }
        elseif($input1 < $input2){
            $arr["Equipe2"]+=3;
            $ganiant["ganiantEquipe2"]+=1;
            $perdu["ganiantEquipe2"]+=1; 
        }
        else{
            $arr["Equipe1"]+=1;
            $arr["Equipe2"]+=1;
            $empati["ganiantEquipe1"]+=1;
            $empati["ganiantEquipe2"]+=1;
        }
        $MATCH1 =$match["matchEquipe1"];
        $MATCH2 =$match["matchEquipe2"];
        $GANIANT1 =$ganiant["ganiantEquipe1"];
        $GANIANT2 =$ganiant["ganiantEquipe2"];
        $EMPATI1 =$empati["ganiantEquipe1"];
        $EMPATI2 =$empati["ganiantEquipe2"];
        $PERDU1 =$perdu["ganiantEquipe1"];
        $PERDU2 =$perdu["ganiantEquipe2"];
        $GOLFOR1 =$golfor["ganiantEquipe1"];
        $GOLFOR2 =$golfor["ganiantEquipe2"];
        $GOLIN1 =$golin["ganiantEquipe1"];
        $GOLIN2 =$golin["ganiantEquipe2"];
    }

    if($input3!="" && $input4!=""){
        $match["matchEquipe3"]+=1;
        $match["matchEquipe4"]+=1;
        $golfor["ganiantEquipe3"]+=$input3;
        $golin["ganiantEquipe4"]+=$input4;
        $golfor["ganiantEquipe3"]+=$input4;
        $golin["ganiantEquipe4"]+=$input3;
        if($input3 > $input4){
            $arr["Equipe3"]+=3;
            $ganiant["ganiantEquipe3"]+=1;
            $perdu["ganiantEquipe3"]+=1;
        }
        elseif($input3 < $input4){
            $arr["Equipe4"]+=3;
            $ganiant["ganiantEquipe4"]+=1;
            $perdu["ganiantEquipe4"]+=1; 
        }
        else{
            $arr["Equipe3"]+=1;
            $arr["Equipe4"]+=1;
            $empati["ganiantEquipe3"]+=1;
            $empati["ganiantEquipe4"]+=1;
        }
        $MATCH3 =$match["matchEquipe3"];
        $MATCH4 =$match["matchEquipe4"];
        $GANIANT3 =$ganiant["ganiantEquipe3"];
        $GANIANT4 =$ganiant["ganiantEquipe4"];
        $EMPATI3 =$empati["ganiantEquipe3"];
        $EMPATI4 =$empati["ganiantEquipe4"];
        $PERDU3 =$perdu["ganiantEquipe3"];
        $PERDU4 =$perdu["ganiantEquipe4"];
        $GOLFOR3 =$golfor["ganiantEquipe3"];
        $GOLFOR4 =$golfor["ganiantEquipe4"];
        $GOLIN3 =$golin["ganiantEquipe3"];
        $GOLIN4 =$golin["ganiantEquipe4"];
    }

    if($input1!="" && $input4!=""){
        $match["matchEquipe1"]+=1;
        $match["matchEquipe4"]+=1;
        $golfor["ganiantEquipe1"]+=$input1;
        $golin["ganiantEquipe4"]+=$input4;
        $golfor["ganiantEquipe1"]+=$input4;
        $golin["ganiantEquipe4"]+=$input1;
        if($input1 > $input4){
            $arr["Equipe1"]+=3;
            $ganiant["ganiantEquipe1"]+=1;
            $perdu["ganiantEquipe1"]+=1;
        }
        elseif($input1 < $input4){
            $arr["Equipe4"]+=3;
            $ganiant["ganiantEquipe4"]+=1;
            $perdu["ganiantEquipe4"]+=1; 
        }
        else{
            $arr["Equipe1"]+=1;
            $arr["Equipe4"]+=1;
            $empati["ganiantEquipe1"]+=1;
            $empati["ganiantEquipe4"]+=1;
        }
        $MATCH1 =$match["matchEquipe1"];
        $MATCH4 =$match["matchEquipe4"];
        $GANIANT1 =$ganiant["ganiantEquipe1"];
        $GANIANT4 =$ganiant["ganiantEquipe4"];
        $EMPATI1 =$empati["ganiantEquipe1"];
        $EMPATI4 =$empati["ganiantEquipe4"];
        $PERDU1 =$perdu["ganiantEquipe1"];
        $PERDU4 =$perdu["ganiantEquipe4"];
        $GOLFOR1 =$golfor["ganiantEquipe1"];
        $GOLFOR4 =$golfor["ganiantEquipe4"];
        $GOLIN1 =$golin["ganiantEquipe1"];
        $GOLIN4 =$golin["ganiantEquipe4"];
    }

    if($input2!="" && $input3!=""){
        $match["matchEquipe2"]+=1;
        $match["matchEquipe3"]+=1;
        $golfor["ganiantEquipe2"]+=$input2;
        $golin["ganiantEquipe3"]+=$input3;
        $golfor["ganiantEquipe2"]+=$input3;
        $golin["ganiantEquipe3"]+=$input2;
        if($input2 > $input3){
            $arr["Equipe2"]+=3;
            $ganiant["ganiantEquipe2"]+=1;
            $perdu["ganiantEquipe2"]+=1;
        }
        elseif($input2 < $input3){
            $arr["Equipe3"]+=3;
            $ganiant["ganiantEquipe3"]+=1;
            $perdu["ganiantEquipe3"]+=1; 
        }
        else{
            $arr["Equipe2"]+=1;
            $arr["Equipe3"]+=1;
            $empati["ganiantEquipe2"]+=1;
            $empati["ganiantEquipe3"]+=1;
        }
        $MATCH2 =$match["matchEquipe2"];
        $MATCH3 =$match["matchEquipe3"];
        $GANIANT2 =$ganiant["ganiantEquipe2"];
        $GANIANT3 =$ganiant["ganiantEquipe3"];
        $EMPATI2 =$empati["ganiantEquipe2"];
        $EMPATI3 =$empati["ganiantEquipe3"];
        $PERDU2 =$perdu["ganiantEquipe2"];
        $PERDU3 =$perdu["ganiantEquipe3"];
        $GOLFOR2 =$golfor["ganiantEquipe2"];
        $GOLFOR3 =$golfor["ganiantEquipe3"];
        $GOLIN2 =$golin["ganiantEquipe2"];
        $GOLIN3 =$golin["ganiantEquipe3"];
    }

    if($input1!="" && $input3!=""){
        $match["matchEquipe1"]+=1;
        $match["matchEquipe3"]+=1;
        $golfor["ganiantEquipe1"]+=$input1;
        $golin["ganiantEquipe3"]+=$input3;
        $golfor["ganiantEquipe1"]+=$input3;
        $golin["ganiantEquipe3"]+=$input1;
        if($input1 > $input3){
            $arr["Equipe1"]+=3;
            $ganiant["ganiantEquipe1"]+=1;
            $perdu["ganiantEquipe1"]+=1;
        }
        elseif($input1 < $input3){
            $arr["Equipe3"]+=3;
            $ganiant["ganiantEquipe3"]+=1;
            $perdu["ganiantEquipe3"]+=1; 
        }
        else{
            $arr["Equipe1"]+=1;
            $arr["Equipe3"]+=1;
            $empati["ganiantEquipe1"]+=1;
            $empati["ganiantEquipe3"]+=1;
        }
        $MATCH1 =$match["matchEquipe1"];
        $MATCH3 =$match["matchEquipe3"];
        $GANIANT1 =$ganiant["ganiantEquipe1"];
        $GANIANT3 =$ganiant["ganiantEquipe3"];
        $EMPATI1 =$empati["ganiantEquipe1"];
        $EMPATI3 =$empati["ganiantEquipe3"];
        $PERDU1 =$perdu["ganiantEquipe1"];
        $PERDU3 =$perdu["ganiantEquipe3"];
        $GOLFOR1 =$golfor["ganiantEquipe1"];
        $GOLFOR3 =$golfor["ganiantEquipe3"];
        $GOLIN1 =$golin["ganiantEquipe1"];
        $GOLIN3 =$golin["ganiantEquipe3"];
    }



    if($input2!="" && $input4!=""){
        $match["matchEquipe2"]+=1;
        $match["matchEquipe4"]+=1;
        $golfor["ganiantEquipe2"]+=$input2;
        $golin["ganiantEquipe4"]+=$input4;
        $golfor["ganiantEquipe2"]+=$input4;
        $golin["ganiantEquipe4"]+=$input2;
        if($input2 > $input4){
            $arr["Equipe2"]+=3;
            $ganiant["ganiantEquipe2"]+=1;
            $perdu["ganiantEquipe2"]+=1; 
        }
        elseif($input2 < $input4){
            $arr["Equipe4"]+=3;
            $ganiant["ganiantEquipe4"]+=1;
            $perdu["ganiantEquipe4"]+=1;  
        }
        else{
            $arr["Equipe2"]+=1;
            $arr["Equipe4"]+=1;
            $empati["ganiantEquipe2"]+=1;
            $empati["ganiantEquipe4"]+=1;
        }
        $MATCH2 =$match["matchEquipe2"];
        $MATCH4 =$match["matchEquipe4"];
        $GANIANT2 =$ganiant["ganiantEquipe2"];
        $GANIANT4 =$ganiant["ganiantEquipe4"];
        $EMPATI2 =$empati["ganiantEquipe2"];
        $EMPATI4 =$empati["ganiantEquipe4"];
        $PERDU2 =$perdu["ganiantEquipe2"];
        $PERDU4 =$perdu["ganiantEquipe4"];
        $GOLFOR2 =$golfor["ganiantEquipe2"];
        $GOLFOR4 =$golfor["ganiantEquipe4"];
        $GOLIN2 =$golin["ganiantEquipe2"];
        $GOLIN4 =$golin["ganiantEquipe4"];
    }
    
    
    $moinplus1 = $GOLFOR1-$GOLIN1;
    $moinplus2 =$GOLFOR2-$GOLIN2;
    $moinplus3 =$GOLFOR3-$GOLIN3;
    $moinplus4 =$GOLFOR4-$GOLIN4;
    echo "<table>
    <tr>
        <th>Equipe</th>
        <th>PTS.</th>
        <th>PAR.</th>
        <th>GAN.</th>
        <th>EMP.</th>
        <th>PER.</th>
        <th>G.F.</th>
        <th>G.C</th>
        <th>+/-</th>
    </tr>
    <tr>
        <td>Maroc</td>
        <td>".  $arr["Equipe1"] ."</td>
        <td>$MATCH1</td>
        <td>$GANIANT1</td>
        <td>$EMPATI1</td>
        <td>$PERDU1</td>
        <td>$GOLFOR1</td>
        <td>$GOLIN1</td>
        <td>$moinplus1</td>
    </tr>
    <tr>
        <td>Croitie</td>
        <td>".  $arr["Equipe2"] ."</td>
        <td>$MATCH2</td>
        <td>$GANIANT2</td>
        <td>$EMPATI2</td>
        <td>$PERDU2</td>
        <td>$GOLFOR2</td>
        <td>$GOLIN2</td>
        <td>$moinplus2</td>
    </tr>
    <tr>
        <td>Belgique</td>
        <td>".  $arr["Equipe3"] ."</td>
        <td>$MATCH3</td>
        <td>$GANIANT3</td>
        <td>$EMPATI3</td>
        <td>$PERDU3</td>
        <td>$GOLFOR3</td>
        <td>$GOLIN3</td>
        <td>$moinplus3</td>
    </tr>
    <tr>
        <td>Canada</td>
        <td>".  $arr["Equipe4"] ."</td>
        <td>$MATCH4</td>
        <td>$GANIANT4</td>
        <td>$EMPATI4</td>
        <td>$PERDU4</td>
        <td>$GOLFOR4</td>
        <td>$GOLIN4</td>
        <td>$moinplus4</td>
    </tr>

    </table>";
}
    ?>

</body>
</html>
