<div class="person">
  <div class="person-profile">
    <img src="<?=$args["profileURL"] ?>" alt="Profile picture of <?=$args["affixedName"] ?>">
    <h4><?=$args["fullTitle"] ?></h4>
  </div>
  <div class="person-info">
    <ul>
      <li><b>Role: </b><?=$args["role"] ?></li>
      <address class="person-address">
        <li><b>Office: </b><?=$args["office"] ?></li>
        <li><b>Phone: </b><?=$args["phoneLink"] ?></li>
        <li><b>Email: </b><?=$args["emailLink"] ?></li>
        <li><b>Website: </b><?=$args["websiteLink"] ?></li>
      </address>
    </ul>
  </div>
  <?=$args["personBiography"] ?>
  <?=$args["researchList"] ?>
</div>
<?=$args["sectionList"] ?>
