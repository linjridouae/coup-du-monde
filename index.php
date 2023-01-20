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
    <!-- <form action="index.php" method="post">
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
    </form> -->

    <form action="index.php" method="post">
        <div>
            equipe1:<input type="number" name="equipe1-matche1">   <!-- M-->
            <input type="number" name="equipe2-matche1"> equipe2<br>   <!-- C-->
        </div>
        <div>
            equipe3:<input type="number" name="equipe3-matche1">     <!-- B-->
            <input type="number" name="equipe4-matche1">equipe4<br>   <!-- CAN-->
        </div>
        <div>
            equipe4:<input type="number" name="equipe4-matche2">    <!-- CAN-->
            <input type="number" name="equipe1-matche2">equipe1<br>    <!-- M-->
        </div>
        <div>
            equipe3:<input type="number" name="equipe3-matche2">     <!-- B-->
            <input type="number" name="equipe2-matche2">equipe2<br>    <!-- C-->
        </div>
        <div>
            equipe1:<input type="number" name="equipe1-matche3">   <!-- M-->
            <input type="number" name="equipe3-matche3">equipe3<br>  <!-- B-->
        </div>
        <div>
            equipe2:<input type="number" name="equipe2-matche3">   <!-- C-->
            <input type="number"name="equipe4-matche3">equipe4<br> <!-- CAN-->
        </div>
        <input type="submit" value="sumuler" name="submit"> 
    </form>
    <table>
    <tbody>
            <tr>
            <th>Equipes</th>
                <th>pts</th>
                <th>MJ</th>
                <th>MG</th>
                <th>Null</th>
                <th>MP</th>
                <th>BM</th>
                <th>BE</th>
                <th>dif</th>
            </tr>

<!--************************************************************** PHP ************************************************************-->

    <?php




if(isset($_POST['submit'])){
    $equipes = ["equipe1"=>["nom"=>"equipe1","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
    "equipe2"=>["nom"=>"equipe2","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
    "equipe3"=>["nom"=>"equipe3","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
    "equipe4"=>["nom"=>"equipe4","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0]];
    // MATCHE1
    if(@$_POST['equipe1-matche1'] ==''and @$_POST['equipe2-matche1']==''){
        $equipes["equipe1"]["point"]+=0;
        $equipes["equipe2"]["point"]+=0;
    }elseif(@$_POST['equipe1-matche1'] > @$_POST['equipe2-matche1']){
        $equipes["equipe1"]["point"]+=3;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe1"]["MG"]+=1;
        $equipes["equipe2"]["MP"]+=1;
        $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche1'];
        $equipes["equipe2"]["BE"]+=$_POST['equipe1-matche1'];
    }elseif(@$_POST['equipe1-matche1'] < @$_POST['equipe2-matche1']){
        $equipes["equipe2"]["point"]+=3;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe2"]["MG"]+=1;
        $equipes["equipe1"]["MP"]+=1;
        $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche1'];
        $equipes["equipe1"]["BE"]+=$_POST['equipe2-matche1'];
    }elseif(@$_POST['equipe1-matche1'] == @$_POST['equipe2-matche1']){
        $equipes["equipe1"]["point"]+=1;
        $equipes["equipe2"]["point"]+=1;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe1"]["null"]+=1;
        $equipes["equipe2"]["null"]+=1;
    }
// MATCHE2
    if(@$_POST['equipe3-matche1'] ==''and @$_POST['equipe4-matche1']==''){
        $equipes["equipe3"]["point"]+=0;
        $equipes["equipe4"]["point"]+=0;
    }elseif(@$_POST['equipe3-matche1'] > @$_POST['equipe4-matche1']){
        $equipes["equipe3"]["point"]+=3;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe3"]["MG"]+=1;
        $equipes["equipe4"]["MP"]+=1;
        $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche1'];
        $equipes["equipe4"]["BE"]+=$_POST['equipe3-matche1'];
    }elseif(@$_POST['equipe3-matche1'] < @$_POST['equipe4-matche1']){
        $equipes["equipe4"]["point"]+=3;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe4"]["MG"]+=1;
        $equipes["equipe3"]["MP"]+=1;
        $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche1'];
        $equipes["equipe3"]["BE"]+=$_POST['equipe4-matche1'];
    }elseif(@$_POST['equipe3-matche1'] == @$_POST['equipe4-matche1']){
        $equipes["equipe3"]["point"]+=1;
        $equipes["equipe4"]["point"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe3"]["null"]+=1;
        $equipes["equipe4"]["null"]+=1;
    }
//  MATCHE3
    if(@$_POST['equipe1-matche2'] ==''and @$_POST['equipe4-matche2']==''){
        $equipes["equipe1"]["point"]+=0;
        $equipes["equipe4"]["point"]+=0;
    }elseif(@$_POST['equipe1-matche2'] > @$_POST['equipe4-matche2']){
        $equipes["equipe1"]["point"]+=3;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe1"]["MG"]+=1;
        $equipes["equipe4"]["MP"]+=1;
        $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche2'];
        $equipes["equipe4"]["BE"]+=$_POST['equipe1-matche2'];
    }elseif(@$_POST['equipe1-matche2'] < @$_POST['equipe4-matche2']){
        $equipes["equipe4"]["point"]+=3;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe4"]["MG"]+=1;
        $equipes["equipe1"]["MP"]+=1;
        $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche2'];
        $equipes["equipe1"]["BE"]+=$_POST['equipe4-matche2'];
    }elseif(@$_POST['equipe1-matche2'] == @$_POST['equipe4-matche2']){
        $equipes["equipe1"]["point"]+=1;
        $equipes["equipe4"]["point"]+=1;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe1"]["null"]+=1;
        $equipes["equipe4"]["null"]+=1;
    }
 //  MATCHE4
    if(@$_POST['equipe2-matche2'] ==''and @$_POST['equipe3-matche2']==''){
        $equipes["equipe2"]["point"]+=0;
        $equipes["equipe3"]["point"]+=0;
    }elseif(@$_POST['equipe2-matche2'] > @$_POST['equipe3-matche2']){
        $equipes["equipe2"]["point"]+=3;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe2"]["MG"]+=1;
        $equipes["equipe3"]["MP"]+=1;
        $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche2'];
        $equipes["equipe3"]["BE"]+=$_POST['equipe2-matche2'];
    }elseif(@$_POST['equipe2-matche2'] < @$_POST['equipe3-matche2']){
        $equipes["equipe3"]["point"]+=3;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe3"]["MG"]+=1;
        $equipes["equipe2"]["MP"]+=1;
        $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche2'];
        $equipes["equipe2"]["BE"]+=$_POST['equipe3-matche2'];
    }elseif(@$_POST['equipe2-matche2'] == @$_POST['equipe3-matche2']){
        $equipes["equipe2"]["point"]+=1;
        $equipes["equipe3"]["point"]+=1;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe2"]["null"]+=1;
        $equipes["equipe3"]["null"]+=1;
    }
  //  MATCHE5
    if(@$_POST['equipe1-matche3'] ==''and @$_POST['equipe3-matche3']==''){
        $equipes["equipe1"]["point"]+=0;
        $equipes["equipe3"]["point"]+=0;
    }elseif(@$_POST['equipe1-matche3'] > @$_POST['equipe3-matche3']){
        $equipes["equipe1"]["point"]+=3;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe1"]["MG"]+=1;
        $equipes["equipe3"]["MP"]+=1;
        $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche3'];
        $equipes["equipe3"]["BE"]+=$_POST['equipe1-matche3'];
    }elseif(@$_POST['equipe1-matche3'] < @$_POST['equipe3-matche3']){
        $equipes["equipe3"]["point"]+=3; 
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe3"]["MG"]+=1;
        $equipes["equipe1"]["MP"]+=1;
        $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche3'];
        $equipes["equipe1"]["BE"]+=$_POST['equipe3-matche3'];
    }elseif(@$_POST['equipe1-matche3'] == @$_POST['equipe3-matche3']){
        $equipes["equipe1"]["point"]+=1;
        $equipes["equipe3"]["point"]+=1;
        $equipes["equipe1"]["MJ"]+=1;
        $equipes["equipe3"]["MJ"]+=1;
        $equipes["equipe1"]["null"]+=1;
        $equipes["equipe3"]["null"]+=1;
    }
 //  MATCHE6
    if(@$_POST['equipe2-matche3'] ==''and @$_POST['equipe4-matche3']==''){
        $equipes["equipe2"]["point"]+=0;
        $equipes["equipe4"]["point"]+=0;
    }elseif(@$_POST['equipe2-matche3'] > @$_POST['equipe4-matche3']){
        $equipes["equipe2"]["point"]+=3;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe2"]["MG"]+=1;
        $equipes["equipe4"]["MP"]+=1;
        $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche3'];
        $equipes["equipe4"]["BE"]+=$_POST['equipe2-matche3'];
    }elseif(@$_POST['equipe2-matche3'] < @$_POST['equipe4-matche3']){
        $equipes["equipe4"]["point"]+=3;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe4"]["MG"]+=1;
        $equipes["equipe2"]["MP"]+=1;
        $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche3'];
        $equipes["equipe2"]["BE"]+=$_POST['equipe4-matche3'];
    }elseif(@$_POST['equipe2-matche3'] == @$_POST['equipe4-matche3']){
        $equipes["equipe2"]["point"]+=1;
        $equipes["equipe4"]["point"]+=1;
        $equipes["equipe2"]["MJ"]+=1;
        $equipes["equipe4"]["MJ"]+=1;
        $equipes["equipe2"]["null"]+=1;
        $equipes["equipe4"]["null"]+=1;
    }
    foreach($equipes as $equipe){
        echo "<tbody><td>".$equipe["nom"]."</td>
        <td>".$equipe["point"]."</td>
        <td>".$equipe["MJ"]."</td>
        <td>".$equipe["MG"]."</td>
        <td>".$equipe["null"]."</td>
        <td>".$equipe["MP"]."</td>
        <td>".$equipe["BM"]."</td>
        <td>".$equipe["BE"]."</td>
        <td>".$equipe["dif"]=$equipe["BM"]-$equipe["BE"] ."</td>
        </tbody>";
    }
}
    ?>

</body>
</html>
