<?php
//include auth_session.php file on all user panel pages
include(".././auth_session.php");
?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href=".././favicon.ico" type="image/png">
    <title>Video List</title>
    <meta name="description" content="Wrapper: Online's Video List">
    <link rel="stylesheet" type="text/css" href=".././pages/css/oldglobal.css">
    <script src=".././pages/js/jquery.js"></script>
  </head>
  <body>

  <header>
    <div>
      <h1 style="margin:0"><img id="logo" src="/goapi/getStaticAsset/?file=logo.svg&subdir=wrapper&type=img&httptype=image%2Fsvg%2Bxml" alt="Wrapper: Online"/></h1>
      <div id="headbuttons">
        <a class="button_blue" onclick="document.getElementById('file').click()">Upload a Movie</a>
        <div id="char_dropdown" class="button_purple">
        Select a Theme
        <menu>
          <h2>Comedy World</h2>
          <a href="/videomaker?tray=custom">Make a Video</a>
          <a href="/character/browser?themeId=family">Create & Browse Characters</a>
          <hr>
          <h2>Anime</h2>
          <a href="/videomaker?tray=anime">Make a Video</a>
          <a href="/character/browser?themeId=anime">Create & Browse Characters</a>
          <hr>
          <h2>Peepz</h2>
          <a href="/videomaker?tray=cc2">Make a Video</a>
          <a href="/character/browser?themeId=cc2&bs=default">Create & Browse Characters</a>
        </menu>
      </div>
    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <td></td>
          <td>Video Title</td>
          <td>Last Modified</td>
          <td></td>
        </tr>
      </thead>
      <tbody></tbody>
      <tfoot>
        <tr>
          <td colspan="127"><a id="load_more" href="javascript:;">LOAD MORE...</a></td>
        </tr>
      </tfoot>
    </table>
  </main>
  <footer>
    <a class="button_gray" href="https://discord.gg/HevKtvvN7D">Discord Server</a>
    <a class="button_gray" href="https://discord.gg/b7YSRkg">Wrapper Hub</a>
  </footer>

  <form enctype='multipart/form-data' action='http://localhost:8080/upload_movie' method='post'>
    <input id='file' type="file" onchange="this.form.submit()" name='import' />
  </form>

  </body>
  <script src=".././pages/js/list.js"></script>
  </html>
