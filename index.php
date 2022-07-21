<?php
include("config.php");
?>

<script src="js/jquery.min.js"></script>

<style>
    .data{
        background:#f7f7f7;
        border:1px solid #bbb;
        padding:20px;
        border-radius:5px;
        width:300px;
        margin:10px;
    }
    button{
        background:#606060;
        padding:15px;
        border:none;
        color:#fff;
        border-radius:0.5rem;
        margin:10px;
        cursor:pointer;
    }
    .display-none{
        display:none;
    }
</style>


<div id="pagination">

<?php

//Check if there's a pagination Histroy
if(isset($_GET["page"]) && $_GET["page"] > 0){
    $start = intval($_GET["page"]);
}else{
    $start = 0; 
}


//GET Count
$stmt = $pdo->prepare("SELECT COUNT(*) AS numrow FROM posts");
$stmt->execute();
$num = $stmt->fetch();
    

$stmt = $pdo->prepare("SELECT * FROM posts LIMIT :start, 4");
$stmt->bindParam(":start", $start, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll();
$cnt = 1+$start;

foreach($rows as $row){ ?>

<div class="data">
<?php echo "<b>". $cnt++ ."</b> &nbsp; ". $row["title"]?>
</div>

<?php } ?>
</div>



<!-- pagination number -->
<input type="hidden" id="page" name="page" value="<?php if(!empty($_GET["page"])){echo $_GET["page"];}else{echo 0;}?>">

<!--Prev & nxt Buttons -->
<button id="previous" class="<?php if(empty($_GET["page"])){echo "display-none";}?>"> 
Previous</button>

<button id="next" class="<?php if(isset($_GET["page"]) && $_GET["page"]+4 > $num["numrow"]){echo "display-none";}?>">Next</button>




<script src="js/script.js"></script>