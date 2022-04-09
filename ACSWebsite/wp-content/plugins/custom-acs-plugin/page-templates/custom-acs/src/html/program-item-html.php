<div class="program">
  <h3><?=$args['title'] ?></h3>
  <p><?=$args['description'] ?></p>
  <h4>Program Requirements</h4>
  <ul class="program-requirements">
    <li><b>Admission Requirements: </b><?=$args['admissionRequirement'] ?></li>
    <li><b>Graduation Requirements: </b><?=$args['graduationRequirement'] ?></li>
    <li><b>Residence Requirements: </b><?=$args['residenceRequirement'] ?></li>
    <li><b>General Degree Requirements: </b><?=$args['generalDegreeRequirement'] ?></li>
    <li><b>Major Requirements: </b><?=$args['majorRequirement'] ?></li>
  </ul>
  <?=$args['flowchartFile'] ?>
  <?=$args['programFile'] ?>
  <?=$args['requiredProgramCourses'] ?>
</div>
