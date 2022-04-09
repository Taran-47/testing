
<?php
/**
 * The template for displaying courses.
 * Template Name: FAQ
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
define("DEFAULT", "This is deafault text");
define("DEFAULT_PROFILE", "../wp-content/uploads/2022/02/emoji.jpg");
echo "<br>";
echo "<br>";
echo '<div class="searchbar">';
echo '<input type="text" name="searchBar" id="searchBar" placeholder="Search..">';
echo "</div>";

// echo "<p></p>";
// echo "<br>";
// echo '<input type="checkbox" class ="filter" id="Faculty" name="Faculty" value="Faculty">';
// echo '<lable  class="fText">Faculty</lable><br>';
// echo '<input type="checkbox" class ="filter" id="Contract" name="Contract" value="Contract">';
// echo '<lable class="fText">Contract</lable><br>';
// echo '<input type="checkbox" class ="filter" id="Staff" name="Staff" value="Staff">';
// echo '<lable  class="fText">Staff</lable><br>';
/**
 * BEGIN SQL QUERY
 */
global $wpdb;
// $query = 'SELECT *
//           FROM faq f

//           ORDER BY f.tpriority, f.priority DESC' ;
// $faq = $wpdb->get_results($query);

$tQuery = 'SELECT *
           FROM topic t
           WHERE active = 1
           ORDER BY t.Tpriority';
 $topic = $wpdb->get_results($tQuery);
/**
 * END SQL QUERY
 */

/**
 * BEGIN CONSTANT PAGE CONTENTS
 * @Insert HTML Here
 */

 /**
  * END CONSTANT PAGE CONTENTS
  */

  /**
   * BEGIN SUCCESSFUL PAGE CONTENTS
   * @Insert HTML Here
   */
  if (!empty($topic)){
    echo "<p></p>";
    echo "<br>";
    echo '<div class="container">';
    echo "<div class = 'filters'>";
    foreach ($topic as $t){
    $tId = $t->t_id;
    $tTopic = $t->topic;
    echo "<div class = 'filterbox'>";
      echo '<input type="checkbox" class ="filter" id="'.$tTopic.'" name="'.$tTopic.'"  value="'.$tTopic.'" >';
      echo '<lable  class="fText">'.$tTopic.'</lable><br>';
    echo "</div>";
    }
    echo "</div>";

    foreach ($topic as $t){
      $tId = $t->t_id;
      $tTopic = $t->topic;

    $query = 'SELECT *
              FROM faq f
              WHERE f.active = 1
              ORDER BY  f.priority' ;
     $faq = $wpdb->get_results($query);
     echo '<div class="card">';

     echo  '<b class="top-topic">';
     echo $tTopic."<br><br>";
     echo "</b>";


  if (!empty($faq)){
    foreach ($faq as $qn)
    {
        $collapsibles = $qn->question;
        $dropdown = $qn->answer;
        $topic = $qn->t_id;
        $priority = $qn->priority;
       if($tId==$topic){

       // echo '<div class="card">';
          echo '<div class="mainMenu">';
          echo '<div class="menu">';

            echo  '<button class = "collapsibles" style = "border-bottom: 0.15rem solid #00509D;">';
            echo $collapsibles;
            echo "</button>";


            echo  '<p class="cont">';
            echo $dropdown."<br>";
            echo "</p>";
          echo "</div>";
          echo "</div>";
         // echo "</div>";

       }

    }
    echo "</div>";
  }
  else {
    echo 'No Questions to show';
  }
  }
  }
  else {
    echo 'No Categories to show';
  }

echo "</div>";
echo '<H1 id="empty">';

echo "</H1>";
?>

<script type = "text/javascript">
var coll = document.getElementsByClassName("collapsibles");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var cont = this.nextElementSibling;
    if (cont.style.maxHeight){
      cont.style.maxHeight = null;
    } else {
      cont.style.maxHeight = cont.scrollHeight + "px";
    }
  });
}
</script>

 <script type = "text/javascript">


 var input = document.getElementById("searchBar");
 //var group = document.getElementsByClassName("topic");
 var topTopic = document.getElementsByClassName("top-topic");
 var collapsibless = document.getElementsByClassName("collapsibles");
 var dropdowns = document.getElementsByClassName("cont");
 var personTitle = document.getElementsByClassName("person_title");
 var personDescription = document.getElementsByClassName("person_description");
 var cards = document.getElementsByClassName("card");
 var cardBody = document.getElementsByClassName("mainMenu");

  var flag = false;

  input.addEventListener("keyup", (e) =>{

    flag=false;
  var target = input.value;
  //console.log(cardBody);
  for(var i=0; i<cardBody.length; i++){
    cardBody[i].setAttribute('id','mainMenu_'+i);

       if(target==""){
         flag=true;
         cardBody[i].style.display= "block";

       }
       else{

        //console.log(collapsibless[i].innerText.toLowerCase());
       if(collapsibless[i].innerText.toLowerCase().includes(target.toLowerCase()) || collapsibless[i].innerText.toLowerCase().includes(target.toLowerCase()) ){

           flag=true;
           cardBody[i].style.display= "block";

       }
       else{
        cardBody[i].style.display= "none";
       }
      }
  }
  if(flag){
    document.getElementById("empty").innerHTML= "";
  }
  else{
  document.getElementById("empty").innerHTML= "No such questions!";
  }
  for (var i=0; i<cards.length; i++){
    var nodeList = cards.childNodes;
        console.log(nodeList);
  }



     }
  );


// code for filters....





var filter = document.getElementsByClassName("filter");
var fText = document.getElementsByClassName("fText");

for(var z=0; z<filter.length; z++){
clicking(z);
}

function clicking( z){
filter[z].addEventListener('click', (e) =>{

var index =[];
for(var y=0; y<filter.length; y++){
if (filter[y].checked) {


  for(var i=0; i<cards.length; i++){
    //console.log(document.getElementsByClassName("card"));
  document.getElementsByClassName("card")[i].setAttribute('id','card_'+i);
  //console.log("Hello");
  //console.log(topTopic[i].innerText.toLowerCase());
  if(topTopic[i].innerText.toLowerCase().includes(fText[y].innerHTML.toLowerCase() )){
      index.push(i);
      console.log(i);
  }

}

}
}

if(index.length==0){
for(var i=0; i<cards.length; i++){
  document.getElementById("card_"+i).style.display= "block";

}
}
else{

for(var i=0; i<cards.length; i++){
  document.getElementById("card_"+i).style.display= "none";

}
}
for (var k=0; k<index.length; k++ ){
var p=index[k];

document.getElementById("card_"+p).style.display= "block";

}
});
}
// code for filters end

</script>
<?php
get_footer();
?>