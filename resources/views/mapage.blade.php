<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css">
    <title>mapage</title>
</head>
<body class="container text-center ">
    <table class="table table-sm" style="width:50%; margin:auto;" > 
       <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th style="width:100px;" class="text-center">Action</th>
          </tr>
       </thead>
       <tbody>
       @foreach ($villes as $ville)
       @csrf
          <tr>
            <td>{{$ville->id}}</td>
            <td>{{$ville->name}}</td>
            <td >
                <div class="px-2">
                    <a href="modifier_op?id={{$ville->id}}">
                    <i class="far text-warning fa-edit" ></i>
                    <a href="supprimer_op?id={{$ville->id}}">
                    <i class="far text-danger fa-trash-alt" style="float:right;"></i></a>
                </div>
            </td>
          </tr>
        @endforeach
       </tbody>
    </table>
    <a href="ajouter"><button class="btn btn-primary btn-sm " >Ajouter</button></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>