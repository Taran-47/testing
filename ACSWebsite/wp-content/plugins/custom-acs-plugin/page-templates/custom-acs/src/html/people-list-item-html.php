<div class="outer-person-tile">
  <a class="link-overlay" href="../person/?<?=personUrlParameter['person'] ?>=<?=$args["personID"] ?>"></a>
  <div class="inner-person-tile">
    <div class="person-profile">
      <img src="<?=$args["profileURL"] ?>" alt="Profile picture of <?=$args["fullTitle"] ?>">
      <div class="title">
        <h4><?=$args["fullTitle"] ?></h4>
      </div>
    </div>
    <hr>
    <div class="person-info">
      <ul>
        <li><b>Role: </b><?=$args["role"] ?></li>
        <address class="person-address">
          <li><b>Office: </b><?=$args["office"] ?></li>
          <li class = "person-phone"><b>Phone: </b><?=$args["phoneLink"] ?></li>
          <li class = "person-email"><b>Email: </b><?=$args["emailLink"] ?></li>
          <li class = "person-website"><b>Website: </b><?=$args["websiteLink"] ?></li>
        </address>
      </ul>
    </div>
  </div>
</div>
