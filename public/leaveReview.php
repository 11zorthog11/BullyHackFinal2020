<php
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Canteen Cuisines</title>
      <link rel="stylesheet" type="text/css" href="leaveReview.css">
  </head>
  <body>
      <div id="title">
        <a href='index.html'> <img src='CC.jpg' alt='home'> </a>
      </div>
        <hr>
        <br>
        
        <h1> Rate a Canteen!</h1>
        <br>
        <form id="box">
            &emsp;&emsp;&emsp;&emsp;&emsp;Least Expensive &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Most Expensive <br>
            Expense:  &emsp;&emsp;&emsp;&emsp;<input type="radio" name="expense" value="1"> &emsp;&emsp;&emsp;&emsp; <input type="radio" name="expense" value="2"> &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="expense" value="3">
            <br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;Least Quality &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Most Quality <br>
            Quality:  &emsp;&emsp;&emsp;&emsp;<input type="radio" name="quality" value="1"> &emsp;&emsp;&emsp;&emsp; <input type="radio" name="quality" value="2"> &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="quality" value="3">
            <br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;Worst Taste &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Best Taste <br>
            Taste:  &emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio" name="taste" value="1"> &emsp;&emsp;&emsp;&emsp; <input type="radio" name="taste" value="2"> &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="taste" value="3">
            <br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;Longest Wait &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Shortest Wait <br>
            Timeliness:  &emsp;&emsp;&emsp;<input type="radio" name="time" value="1"> &emsp;&emsp;&emsp;&emsp; <input type="radio" name="time" value="2"> &emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="time" value="3">
            <br><br>
            Explain:
            <br><br>
            <textarea style="width:30em;" id="textReview" name="textReview"></textarea>
            <br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button type="submit" name="submit" onclick="leaveReview()"> Submit </button>
        </form>
        
        <script>
            function leaveReview() {
                document.getElementById("box").innerHTML = "<h1>Submitted!</h1>";
                var aveExp = 0;
                document.getElementById("expense").value;
                
                <?php
                    $reviews = fopen("reviews.txt", "w");
                    $review = $_POST["textReview"];
                    $writeString = 
                    $fwrite($reviews, $review);
                    fclose($reviews);
                ?>
            }
        </script>
  </body>
</html>
?>