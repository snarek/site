<!DOCTYPE html>
<html>
  <head>
    <?php
      $title="Կայք";
      require_once "/blocks/head.php";
    ?>
  </head>
  <body>
      <?php require_once "/blocks/header.php" ?>
      <div id="wrapper">
        <section>
          <article class="bigArticle">
            <img src="img/articles/1.jpg" alt="Article 1" title="Article 1" />
            <h2>Վերնագիր</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a interdum risus. In mauris sem, finibus id eleifend eget, accumsan non dui. Suspendisse sodales purus et lacus rhoncus lacinia. Morbi volutpat mauris non lorem porttitor vulputate. Aliquam in nulla sem. Integer eu efficitur dui, eget bibendum sapien. Nulla vitae venenatis ligula, a mollis quam. Donec tempor lorem sit amet sollicitudin sodales. Etiam viverra magna nec odio gravida, id commodo lacus tempor. Nam suscipit dolor ut enim eleifend, convallis consequat nisl pulvinar. Nunc nibh nisi, efficitur id lorem sit amet, hendrerit viverra sem.
            </p>
            <a href="article.php"><div>Շարունակել</div></a>
          </article>
          <article class="smallArticle">
            <img src="img/articles/2.png" alt="Article 2" title="Article 2" />
            <h2>Վերնագիր</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a interdum risus. In mauris sem, finibus id eleifend eget, accumsan non dui. Suspendisse sodales purus et lacus rhoncus lacinia. Morbi volutpat mauris non lorem porttitor vulputate. Aliquam in nulla sem.
            </p>
            <a href="article.php"><div>Շարունակել</div></a>
          </article>
          <article class="smallArticle">
            <img src="img/articles/3.jpg" alt="Article 3" title="Article 3" />
            <h2>Վերնագիր</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a interdum risus. In mauris sem, finibus id eleifend eget, accumsan non dui. Suspendisse sodales purus et lacus rhoncus lacinia. Morbi volutpat mauris non lorem porttitor vulputate. Aliquam in nulla sem.
            </p>
            <a href="article.php"><div>Շարունակել</div></a>
          </article>
        </section>
        <?php require_once "/blocks/aside.php" ?>
      </div>
      <?php require_once "/blocks/footer.php" ?>
  </body>
</html>
