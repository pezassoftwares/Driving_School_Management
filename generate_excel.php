<?php include 'db.php'; ?>
<?php


$query = "SELECT * FROM queryrequest";
$results = mysqli_query($conn, $query);
$tasks = array();
while( $rows = mysqli_fetch_assoc($results) ) {
  $tasks[] = $rows;
}

if(isset($_POST["ExportType"]))
{
   
    switch($_POST["ExportType"])
    {
        case "Download to excel" :
            // Submission from
      $filename = "list_of_candidates".date('Ymd') . ".xls";     
            header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      ExportFile($tasks);
      //$_POST["ExportType"] = '';
            exit();
        default :
            die("Unknown action : ".$_POST["action"]);
            break;
    }
}
function ExportFile($records) {
  $heading = false;
    if(!empty($records))
      foreach($records as $row) {
      if(!$heading) {
        // display field/column names as a first row
        echo implode("\t", array_keys($row)) . "\n";
        $heading = true;
      }
      echo implode("\t", array_values($row)) . "\n";
      }
    exit;
}