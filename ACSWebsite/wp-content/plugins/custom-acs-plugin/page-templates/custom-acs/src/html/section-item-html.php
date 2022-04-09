<div class="section">
  <h3><?=$args["courseID"] ?>-<?=$args["sectionID"] ?> <?=$args["courseTitle"] ?> (<?=$args["courseCredits"] ?>)</h3>
  <p><?=$args["courseDescription"] ?></p>
  <h4>Section Info</h4>
  <ul>
    <li><b>Schedule: </b><?=$args["sectionSchedule"] ?></li>
    <li><b>Period: </b><?=$args["sectionDate"] ?></li>
    <li><b>Location: </b><?=$args["location"] ?></li>
    <?=$args["instructionMethodField"] ?>
  </ul>
  <?=$args["syllabusField"] ?>
  <?=$args["websiteField"] ?>
</div>
