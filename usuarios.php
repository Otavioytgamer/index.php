<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuarios</title>
    <link rel="stylesheet" href="dash.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<main>
    <div class="header-content">
         <h2>Gestão de Usuários</h2>
         <p>Visualize e gerencie as permissões dos usuários do sistema</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </th>
           </thead>
         <tbody>
            <tr>
                <td>01</td>
                <td>Eric Freitas</td>
                <td>eric@unifev.edu.br</td>
                <td>Administrador</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td>
                    <button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                    <button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
                </td>      
            </tr>
            <tr>
                <td>02</td>
                <td>Ana Souza</td>
                <td>ana.souza@email.com</td>
                <td>Editor</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td>
                    <button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                    <button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
                </td>
              </tr>
             <tr>
                <td>03</td>
                <td>Carlos lima</td>
                <td>carlos.lima@servidor.com</td>
                <td>Usuários</td>
                <td><span class="badge inativo">Inativo</span>
                <td>
                    <button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                    <button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
                </td>
          </tbody>
     </table>
</div>
</main>

<style>
  .table-responsive{
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    overflow: hidden;
  }
  table{
    width: 100%;
    border-collapse: collapse;
  }
  th{
    background-color: #000000;
    color: #ffffff;
    padding: 15px;
    text-align: left;
    font-size: 13px;
    text-transform: uppercase;
  }

  td{
    padding: 15px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
    color: #444;
  }
tbody tr:nth-child(even){
    background-color: #f9f9f9;
}
tbody tr:hover{
    background-color: #f1f7ff;
}
.btn-icon{
    background: none;
    border: none;
    color: #000000;
    cursor: pointer;
    font-size: 16px;
    margin-right: 8px;
}
.btn-icon:hover{
    color: #0066cc;
}
.badge{
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}
.badge.ativo{
    background-color: #28a745;
    color: white;
}
.badge.inativo{
    background-color: #dc3545;
    color: white;
}

</style>