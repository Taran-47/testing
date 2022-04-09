
<?php
/**
 * The template for displaying courses.
 * Template Name: scholarship
 *
 * @package WordPress
 * @subpackage WPCustomify
 * @since Customify
 */

get_header();
?>


<?php
  if (have_posts() ) {
    while (have_posts() ) {
        the_post();
        get_template_part('template-parts/content', get_post_type() );
    }
}
  global $wpdb;
  $scholarships = $wpdb->get_results("SELECT * FROM scholarship");
  echo "<br>";
  echo "<br>";
  echo "<div id='buttons'>";
    echo '<button type="button" class = "arrow" id = "UndergraduateScholarships")"><span>Undergraduate Scholarships</span></button>';
    echo '<button type="button" class = "arrow" id = "masterScholarships" )"><span>Graduate Scholarships</span></button>';
    echo "<br>";

  echo "</div>";
  echo "<h1 id = 'empty'>";
  echo "</h1>";
  if (!empty($scholarships)){
    foreach ($scholarships as $scholarship){
      $scholarshipTitle = $scholarship->scholarship_title;
      $scholarshipDescription = $scholarship->scholarship_description;
      $scholarshipUrl = $scholarship->scholarship_url;
      $scholarshipCategory = $scholarship->scholarship_category;
      $datePosted = $scholarship->datePosted;
      echo "<div class = 'card'>";
        echo "<div class = 'scholarshipTitle'> <b>Title: </b>";
          echo $scholarshipTitle;
          echo "<div class = 'scholarshipDate'> <b>Date Posted: </b>";
            echo $datePosted;
          echo "</div>";
        echo "</div>";
        echo "<div class = 'scholarshipDescription'> <b>Description: </b>";
          echo $scholarshipDescription;
        echo "</div>";
        echo "<div class = 'scholarshipUrl'>";
        echo "<div class = 'alone'>";
          echo "<a href = $scholarshipUrl><span>apply now</span></a>";
        echo "</div>";
        echo "</div>";
        echo "<div class = 'scholarshipCategory'>";
          echo $scholarshipCategory;
        echo "</div>";
        echo "<p class='just-width-with-margin-top'>";
        echo "</p>";
      echo "</div>";
      echo "<div class = 'line'>";
      echo "</div>";

    }
  }
  else {
    echo "We don't have any employement right now. Stay tuned!";
  }

?>

<script type = "text/javascript">

    var card = document.getElementsByClassName('card');
    var category = document.getElementsByClassName('scholarshipCategory');
    var empty = document.getElementById("empty");
    var undergraduateScholarshipsButton = document.getElementById("UndergraduateScholarships");
    var masterScholarshipsButton = document.getElementById("masterScholarships");

    for (var i=0; i<category.length; i++){
      category[i].style.display = "none";
    }

   func("undergraduate-scholarship");

 undergraduateScholarshipsButton.classList.add("append");
  undergraduateScholarshipsButton.addEventListener("click", (e) =>{
    undergraduateScholarshipsButton.classList.add("append");
    masterScholarshipsButton.classList.remove("append");
    func("undergraduate-scholarship");
  });

  masterScholarshipsButton.addEventListener("click", (e) =>{
    masterScholarshipsButton.classList.add("append");
    undergraduateScholarshipsButton.classList.remove("append");
    func("master-scholarship");
  });

  function func( locator){
    empty.innerText = "";
    for (var i=0; i<card.length; i++){
      document.getElementsByClassName("card")[i].setAttribute('id','card_'+i);
      if (category[i].innerText.includes(locator)){
        document.getElementById("card_"+i).style.display= "block";

      }
      else{
          document.getElementById("card_"+i).style.display= "none";
      }
    }
  }
</script>
<?php
get_footer();
?>
