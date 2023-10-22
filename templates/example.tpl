<!DOCTYPE html>
<html>

<head>
  <title>{$title}</title>
  <style>
    .alert {
      padding: 20px;
    }

    .alert-success {
      color: white;
      background-color: green;
    }

    .alert-danger {
      color: black;
      background-color: red;
    }
  </style>
</head>

<body>

  {if isset($smarty.post.inputField) && $smarty.post.inputField == "123"}
    <div class="alert alert-success" role="alert">
      Giá trị hợp lệ: {$smarty.post.inputField}
    </div>
  {elseif isset($smarty.post.inputField)}
    <div class="alert alert-danger" role="alert">
      Giá trị không hợp lệ.
    </div>
  {/if}

  <form method="post" action="index.php">
    <label for="inputField">Nhập số "123":</label>
    <input type="text" name="inputField" id="inputField" />

    <input type="submit" value="Kiểm tra" />
  </form>

  <h1>{$title}</h1>
  <p>{$content}</p>
  {debug}
</body>

</html>