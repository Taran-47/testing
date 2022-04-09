<div class="course">
  <input type="checkbox" id="<?=$args["courseID"]?>">
  <label class = "course-title" for="<?=$args["courseID"]?>"><h3><?=$args["courseLink"] ?></h3></label>
  <div class = "course-content">
    <?=$args["courseDescription"] ?>
    <?=$args["courseInfo"] ?>
    <?=$args["sectionList"] ?>
  </div>
</div>
