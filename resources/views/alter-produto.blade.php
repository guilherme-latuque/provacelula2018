<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar Produto</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Produtos</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{route('produto.index')}}">Produtos</a></li>
                    <li class="active">Alterar</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <br>
            <h4 id="center"><b>Alterar Produto</b></h4>
            <br>
            <form method="post"
                  action="{{route('produto.update', $produto->id)}}"
                  enctype="multipart/form-data">
                {!! method_field('put') !!}
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="nome"
                               class="form-control"
                               value="{{$produto->nome}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Preço</label>
                        <input type="number" step="any" name="preco"
                               class="form-control"
                               value="{{$produto->preco}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Sub Categoria</label>
                        <input type="text" name="id_sub_categoria"
                               class="form-control"
                               value="{{$produto->id_sub_categoria}}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="reset" class="btn btn-default">
                        Limpar
                    </button>
                    <button type="submit"
                            class="btn btn-warning" id="black">
                        Alterar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>