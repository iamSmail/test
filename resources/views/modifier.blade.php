<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body class="container" >
    <form action="modifier_submite" method="GET">
      <div class="form-group text-center" >
        <input type="text" name="nvVille" value="{{$villes->name}}" class="form-control" style="width:50%; margin:auto;margin-top:%; ">
        <input id="prodId" name="id" type="hidden" value="{{$villes->id}}">
        <input type="submit" class="btn btn-primary" style="margin-top:10px;">
      </div>
    </form>
</body>
</html>