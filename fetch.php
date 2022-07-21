<?php
include("config.php");



if(isset($_POST["pageNumber"])){

    //Count total rows
    $stmt = $pdo->prepare("SELECT COUNT(*) AS numrow FROM posts");
    $stmt->execute();
    $num = $stmt->fetch();
    
$totalRow = $num["numrow"];         // Total rows on Table
$action = $_POST["action"];         //Contain either of Next or Previous Btn
$start = $_POST["pageNumber"];      //Fetch Start Point
$limit = 4;                         //Row Fetch Limit
 

//IF NEXT BUTTON WAS CLICKED
if($action == "next"){
    
    //show Prev Btn
    echo "<script>$('#previous').fadeIn('fast');</script>";     
    
    //pagination start point = 4
    $start += $limit;       
  
    //When all rows is viewed, prevent further scroll
    if($start > $totalRow){
     $start -= 4;
    }
    
     //When all rows is viewed, hide next btn
    if($start + 4 > $totalRow){
        echo "<script>$('#next').fadeOut('fast');</script>";
    }
} 



//IF PREVIOUS BUTTON WAS CLIKED
elseif($action == "previous"){

    //show next btn
    echo "<script>$('#next').fadeIn('fast');</script>";

    //remove "4" from the start point
    $start -= $limit;

    //If we're back of first 4 rows, set start point to 0 top stop scroll
    if($start < 0){
        $start = 0;
    };

    //hide previous button if back on the first 4 rows
    if($start < 4){
        echo "<script>$('#previous').fadeOut('fast');</script>";
    }
}



$stmt = $pdo->prepare("SELECT * FROM posts LIMIT :start, :limit");
$stmt->bindParam(":start", $start, PDO::PARAM_INT);
$stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll();
$cnt = 1+$start;                    //Counter

foreach($rows as $row){ ?>

<div class="data">
<?php echo "<b>". $cnt++ ."</b> &nbsp; ". $row["title"]?>
</div>


<script>
    //return scrolled position count to index page (Ajax callback)
    $("#page").val(<?php echo $start; ?>);
</script>




<?php } } ?>





