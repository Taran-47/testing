
<?php
/**
 * The template for displaying courses.
 * Template Name: employment
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
  $jobs = $wpdb->get_results("SELECT * FROM employment");
  echo "<br>";
  echo "<br>";
  echo "<div id='buttons'>";

      echo '<button type="button" id = "Button academicSupport" class = "arrow")"> <span>Academic Support </span></button>';
      echo '<button type="button" id = "Button facultySupport" class = "arrow")"> <span>Faculty and Support Staff </span></button>';
      echo '<button type="button" id = "Button offCampus" class = "arrow")"> <span> Off-Campus </span></button>';

  echo "</div>";
  echo "<h1 id = 'empty'>";
  echo "</h1>";
  if (!empty($jobs)){
    foreach ($jobs as $job){
      $jobTitle = $job->job_title;
      $jobDescription = $job->job_description;
      $jobUrl = $job->job_url;
      $jobCategory = $job->job_category;
      $datePosted = $job->datePosted;
      echo "<div class = 'card'>";
        echo "<div class = 'jobTitle'> <b>Title: </b>";
          echo $jobTitle;
          echo "<div class = 'jobDate'> <b>Date Posted: </b>";
            echo $datePosted;
          echo "</div>";
        echo "</div>";
        echo "<div class = 'jobDescription'> <b>Description: </b>";
          echo $jobDescription;
        echo "</div>";
        echo "<div class = 'jobUrl'>";
        echo "<div class = 'alone'>";
          echo "<a href = $jobUrl><span> apply now<span></a>";
        echo "</div>";
        echo "</div>";
        echo "<div class = 'jobCategory'>";
          echo $jobCategory;
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
  var category = document.getElementsByClassName('jobCategory');
  var empty = document.getElementById("empty")
  var offCampusButton = document.getElementById("Button offCampus");
  var academicSupportButton = document.getElementById("Button academicSupport");
  var facultySupportButton = document.getElementById("Button facultySupport");

  for (var i=0;  i<category.length;i++){
     category[i].style.display= "none";
}
  func("on-campus-academic-support");

  // on campus button functions


  // off campus button functions
 academicSupportButton.classList.add("append");
  offCampusButton.addEventListener("click", (e) =>{
    func("off-campus");
    offCampusButton.classList.add("append");
    facultySupportButton.classList.remove("append");
    academicSupportButton.classList.remove("append");
  });


  academicSupportButton.addEventListener("click", (e) =>{
     func("on-campus-academic-support");
     academicSupportButton.classList.add("append");
     offCampusButton.classList.remove("append");
     facultySupportButton.classList.remove("append");
  });

  facultySupportButton.addEventListener("click", (e) =>{
    func("on-campus-faculty-support");
    facultySupportButton.classList.add("append");
    academicSupportButton.classList.remove("append");
    offCampusButton.classList.remove("append");
  });




// general function tha displays the jobs of certain category
function func(locator){
      empty.innerText = "";
    document.getElementById("empty").innerText = "";
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