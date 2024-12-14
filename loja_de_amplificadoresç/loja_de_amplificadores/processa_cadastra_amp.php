<?php
  session_start();
  
  $conectar = mysqli_connect("localhost", "root", "", "35936x");

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$preco = $_POST["preco"];
$tipo = $_POST["tipo"];
$foto = $_FILES["foto"];

$foto_nome = "img/".$foto["name"];
move_uploaded_file($foto["tmp_name"], $foto_nome);

$sql_cadastrar = "INSERT INTO amplificadores 
    (Marca_AMP, Modelo_AMP, Preco_AMP, Tipo_AMP, Foto_AMP)
  VALUES
    ('$marca', '$modelo', '$preco', '$tipo', '$foto_nome')";

$sql_resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

if ($sql_resultado_cadastrar == true) {

  echo "<script>
              alert ('$modelo cadastrado com Sucesso!!')
        </script>";

  echo "<script> location.href = ('cadastra_amp.php') </script>";
} else {

  echo "<script>
            alert ('Ocorreu um erro no servidor!??!.
                Tente cadastrar novamente novamente.')
        </script>";

  echo "<script> location.href = ('cadastra_amp.php') </script>";
}
