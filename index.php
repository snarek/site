<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Կայք</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <header>
          <div id="logo">
            <a href="" title="Մտնել գլխավոր էջ"><span>Գ</span>լխավոր</a>
          </div>
          <div id="menuHead">
            <a href="/about.php">
                <div style="margin-right: 5%;">Մեր մասին</div>
            </a>
            <a href="/feedback.php">
                <div>Հետադարձ կապ</div>
            </a>
          </div>
          <div id="regAuth">
            <a href="/auth.php">Մուտք</a> |
            <a href="/reg.php">Գրանցվել</a>
          </div>
      </header>

      <footer>
        <div id="social">
          <a href="http://www.vk.com">
            <img src="img/vk.png" title="VK" alt="Vkontakte"/>
          </a>
          <a href="http://www.fb.com">
            <img src="img/fb.png" title="FB" alt="Facebook"/>
          </a>
          <a href="http://www.twitter.com">
            <img src="img/twitter.png" title="Twitter" alt="Twitter"/>
          </a>
        </div>
        <div id="rights">
          Բոլոր իրավունքները պաշտպանված են  &copy; <?= date('Y') ?>
        </div>
      </footer>
  </body>
</html>
