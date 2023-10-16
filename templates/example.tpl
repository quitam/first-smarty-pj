<!DOCTYPE html>
<html>

<head>
  <title>{$title}</title>
</head>

<body>
  <h1>Disk Usage</h1>
  <div>
    <input class="dial" id="dial" data-max="100" data-angleoffset=-125 data-anglearc=250 data-fgcolor="#0099ff"
      value="{$percent|substr:0:-1}">
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.knob/1.2.11/jquery.knob.min.js"></script>

  <script>
    $(function() {
      $(".dial").knob({
        format: function(value) {
          return value + "%"
        }
      });
    });
  </script>
  <h1>{$title}</h1>
  <p>{$content}</p>
  {debug}
</body>

</html>