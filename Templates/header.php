<header>
    <div>Test header</div>
    <div class="btn-group dropleft" id="header-dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menus
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="<?php echo($GLOBALS['PAGES']."creators_profile.php"); ?>">Creator's profile</a>
    <a class="dropdown-item" href="<?php echo($GLOBALS['PAGES']."meme_square.php"); ?>">Memes square</a>
    <a class="dropdown-item" href=<?php echo($GLOBALS ['TOOLS']."tests.php"); ?>">Tests (WARNING) </a>
  </div>
</div>
</header>