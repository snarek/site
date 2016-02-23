<!DOCTYPE html>
<html>
  <head>
    <?php
      $title="Հետադարձ կապ";
      require_once "/blocks/head.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#done").click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        var subject=$("#subject").val();
        var message=$("#message").val();
        var fail="";
        if (name.length<3) fail="Անունը պետք է 3-ից ավել լինի"
        else if (email.split('@').length-1==0 || email.split('.').length-1==0)
          fail="Սխալ email";
        else if (subject.length<5)
          fail="Թեման պետք է 5-ից ավել լինի";
        else if (message.length<5)
          fail="Նամակը պետք է 20-ից ավել լինի";
        if (fail!=""){
            $('#messageShow').html(fail+"<div class='clear'><br /></div>");
            $('#messageShow').show();
            return false;
        };
        $.ajax({
          url: 'ajax/feedback.php',
          type: 'POST',
          cache: false,
          data: {'name':name,'email':email,'subject':subject,'message':message},
          dataType: 'html',
          success: function( data ) {
            $('#messageShow').html(data+"<div class='clear'><br /></div>");
            $('#messageShow').show();
          },
        })
      });
    });
    </script>
  </head>
  <body>
      <?php require_once "/blocks/header.php" ?>
      <div id="wrapper">
        <section>
          <input type="text" placeholder="Անուն" id="name"></input><br />
          <input type="text" placeholder="Email" id="email"></input><br />
          <input type="text" placeholder="Թեմա" id="subject"></input><br />
          <textarea name="message" id="message" placeholder="Մուտքագրեք նամակը"></textarea><br />
          <div id='messageShow'></div>
          <input type="button" name="done" id="done" value="Ուղղարկել"></input><br />
        </section>
        <?php require_once "/blocks/aside.php" ?>
      </div>
      <?php require_once "/blocks/footer.php" ?>
  </body>
</html>
