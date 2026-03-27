<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Usuários</title>
    <link rel="stylesheet" href="usuarios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <nav>
        <a href="index.php">Início</a>
        <a href="usuarios.php" class="active">Usuários</a>
        <a href="">Categorias</a>
        <a href="#">Postagens</a>

        <div class="perfil-usuario">
            <img src="https://www.cartoonize.net/wp-content/uploads/2024/05/photo-to-cartoon-cartoonizer-by-Colorcinch.jpg" alt="Avatar">
            <span>Yago Oliveira</span>
        </div>
    </nav>

    <main>
        <h1>Gestão de Usuários</h1>
        <p class="header-content">Visualize e gerencie as permissões dos usuários do sistema</p>

        <!-- Botão alinhado à direita -->
        <div class="btn-add-container">
            <a href="cad-usuario.php" class="btn-add">
                <i class="fa-solid fa-plus"></i> Adicionar Usuário
            </a>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Eric Freitas</td>
                        <td>eric@unifev.edu.br</td>
                        <td>Administrador</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fa-solid fa-pen"></i></button>
                            <button title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                            <button title="Excluir"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Ana Souza</td>
                        <td>ana.souza@email.com</td>
                        <td>Editor</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fa-solid fa-pen"></i></button>
                            <button title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                            <button title="Excluir"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Carlos Lima</td>
                        <td>carlos.lima@servidor.com</td>
                        <td>Usuário</td>
                        <td><span class="status inativo">Inativo</span></td>
                        <td class="acoes">
                            <button title="Editar"><i class="fa-solid fa-pen"></i></button>
                            <button title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                            <button title="Excluir"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        © 2026 - Desenvolvido na aula de Web I
    </footer>

</body>
</html>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', system-ui, Arial, sans-serif;
    background: #f8fafc;
    color: #1e2937;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    line-height: 1.6;
}

.dashboard-container {
    display: flex;
    flex: 1;
}

/* ==================== SIDEBAR ==================== */
nav {
    width: 265px;
    background: #0f172a;
    height: 100vh;
    position: fixed;
    padding: 32px 24px;
    display: flex;
    flex-direction: column;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.08);
}

nav ul {
    list-style: none;
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-top: 30px;
}

nav a {
    color: #cbd5e1;
    text-decoration: none;
    display: block;
    padding: 14px 20px;
    border-radius: 10px;
    font-size: 15.5px;
    font-weight: 500;
    transition: all 0.3s ease;
}

nav a:hover {
    background: #1e2937;
    color: white;
    transform: translateX(6px);
}

nav a.active {
    background: #2563eb;
    color: white;
    font-weight: 600;
}

/* Perfil */
.perfil-usuario {
    margin-top: auto;
    display: flex;
    align-items: center;
    gap: 14px;
    padding-top: 28px;
    border-top: 1px solid #334155;
}

.perfil-usuario img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #2563eb;
}

.perfil-usuario span {
    font-weight: 600;
    color: #e2e8f0;
}

/* ==================== CONTEÚDO PRINCIPAL ==================== */
main {
    margin-left: 265px;
    padding: 50px 60px;
    flex: 1;
}

h1 {
    font-size: 32px;
    color: #0f172a;
    margin-bottom: 8px;
}

.header-content p {
    color: #64748b;
    font-size: 17px;
    margin-bottom: 35px;
}

/* Botão Adicionar */
.btn-add-container {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 30px;
}

.btn-add {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #2563eb;
    color: white;
    border: none;
    padding: 13px 26px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15.5px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.25);
}

.btn-add:hover {
    background: #1d4ed8;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35);
}

/* Tabela Moderna */
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    border: 1px solid #e2e8f0;
}

th, td {
    padding: 18px 24px;
    text-align: left;
}

th {
    background: #f1f5f9;
    color: #1e2937;
    text-transform: uppercase;
    font-size: 13.5px;
    font-weight: 600;
    letter-spacing: 0.6px;
    border-bottom: 2px solid #e2e8f0;
}

td {
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
}

tr:hover {
    background: #f8fafc;
}

.status {
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 13.5px;
    font-weight: 600;
    color: white;
    display: inline-block;
}

.ativo {
    background: #22c55e;
}

.inativo {
    background: #ef4444;
}

.acoes {
    display: flex;
    gap: 12px;
}

.acoes button {
    background: none;
    border: none;
    color: #64748b;
    font-size: 18px;
    cursor: pointer;
    padding: 5px;
    transition: all 0.2s;
}

.acoes button:hover {
    color: #2563eb;
    transform: scale(1.15);
}

/* ==================== FOOTER ==================== */
footer {
    text-align: center;
    color: #64748b;
    padding: 30px 0;
    font-size: 14px;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    margin-top: auto;
}
</style>