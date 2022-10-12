<h1>Listar Registros</h1>
<?php 
    $sql = "SELECT * FROM aluno";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;


    if ($qtd > 0) {

        print '<table class="table table-hover table-striped table-bordered">';
        print '<tr>';
        print "<th> # </th>";
        print "<th> Nome </th>";
        print "<th> CPF </th>";
        print "<th> Telefone </th>";
        print "<th> Curso </th>";
        print "<th> Ações </th>";
        print '</tr>';
    
        while ($row = $res->fetch_object()) {
            print '<tr>';
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->curso."</td>";
            print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->id."';\"> Editar </button>
                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja Deletar este Registro?'))
                    {location.href='?page=salvar&acao=deletar&id=".$row->id."';}else{false;}\"> Excluir </button>
                    </td>";
            print "</tr>";
        }
        print '</table>';

    }else{
        print "<p class='alert alert-danger'> Não encontramos Registros !</p>";
    }
?>