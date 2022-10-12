<?php
    switch($_REQUEST['acao']){
        case "cadastrar":
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $descricao = $_POST['descricao'];	

            $sql = "INSERT INTO aluno (nome,cpf,telefone) VALUES ('$nome', '$cpf', '$telefone')";
            $sql = "INSERT INTO curso (descricao) VALUES ('$descricao')";


            $res = $conn->query($sql);
            break;

            if($res==true){
                print "<script> alert('Registro Realizado com Sucesso !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('O Registro apresentou Falhas !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }

        case "editar":
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $descricao = $_POST['descricao'];

            $sql = "UPDATE curso SET
                    descricao = '{$descricao}'
                    WHERE
                    id_curso = ".$_REQUEST["id_curso"]; 

            $sql = "UPDATE aluno SET 
                    nome='{$nome}',
                    cpf='{$cpf}',
                    telefone='{$telefone}'
                    WHERE
                    id=".$_REQUEST["id"];
            

            $res = $conn->query($sql);

            if($res==true){
                print "<script> alert('Registro Editado com Sucesso !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi Possivel Editar !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }
            break;


        case "deletar":
            $sql = "DELETE FROM aluno WHERE id=".$_REQUEST["id"];

            $sql = "DELETE FROM curso WHERE id_curso=".$_REQUEST["id_curso"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script> alert('Registro Deletado com Sucesso !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script> alert('Não foi Possivel Deletar o Registro !');</script>";
                print "<script> location.href='?page=listar';</script>";
            }

            break;
    }