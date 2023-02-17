<?php include 'include/header.php'; ?> 

<?php
 $sql = 'SELECT * FROM feedbackform';
 $result = mysqli_query($conn, $sql);
 if (!$result) {
  die('Error: ' . mysqli_error($conn));
}
 $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

 
 
// Check for errors



?>
   
    <h2>Past Feedbacks
      <?php echo var_dump($feedback);
      echo var_dump($result); ?>
    </h2>
  <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
          By: <?php echo $item['name'];?> on: <?php echo $item['date']; ?>
        </div>
      </div>  
    </div>
  <?php endforeach; ?>


<?php include 'include/footer.php'; ?> 