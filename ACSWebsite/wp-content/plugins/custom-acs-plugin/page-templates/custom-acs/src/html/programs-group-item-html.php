<div class="program">
  <input type="checkbox" id="<?=$args["programID"]?>-<?=$args["group"]?>">
  <label class="program-title" for="<?=$args["programID"]?>-<?=$args["group"]?>"><h6><?=$args["programLink"] ?></h6></label>
  <div class="program-content">
    <ul class="program-info">
      <li><p><?=$args["description"] ?></p></li>
      <li><b>Program Requirements</b></li>
      <ul class="program-requirements">
        <li class="program-requirement">Admission Requirements: <?=$args["admissionRequirement"] ?></li>
        <li class="program-requirement">Graduation Requirements: <?=$args["graduationRequirement"] ?></li>
        <li class="program-requirement">Residence Requirements: <?=$args["residenceRequirement"] ?></li>
        <li class="program-requirement">General Degree Requirements: <?=$args["generalDegreeRequirement"] ?></li>
        <li class="program-requirement">Major Requirements: <?=$args["majorRequirement"] ?></li>
      </ul>
    </ul>
  </div>
</div>
