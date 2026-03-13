<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuarios</title>

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
                <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                
            </tr>
            <tr>
                <td>02</td>
                <td>Ana Souza</td>
                <td>ana.souza@email.com</td>
                <td>Editor</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
              </tr>
             <tr>
                <td>03</td>
                <td>Carlos lima</td>
                <td>carlos.lima@servidor.com</td>
                <td>Usuários</td>
                <td><span class="badge ativo">inativo</span></td>
                <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
             </tr>
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
    background-color: #2c3e50;
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
.badge{
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

.ativo { background-color: #d4edda; color: #155724;}
.inativo { background-color: #f8d7da; color: #f80f26;}

.btn-icon{
    background: none;
    border: none;
    color: #004a8d;
    cursor: pointer;
    font-size: 16px;
}
</style>