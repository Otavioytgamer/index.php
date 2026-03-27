<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - YagoOliveira</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <nav>
        <a href="index.php" class="active">Início</a>
        <a href="usuarios.php">Usuários</a>
        <a href="">Categorias</a>
        <a href="#">Postagens</a>

        <div class="perfil-usuario">
            <img src="https://www.cartoonize.net/wp-content/uploads/2024/05/photo-to-cartoon-cartoonizer-by-Colorcinch.jpg" alt="Avatar">
            <span>Yago Oliveira</span>
        </div>
    </nav>

    <main>
        <h1>Bem-vindo ao Painel</h1>
        <p class="subtitle">Gerencie o sistema de forma simples e organizada.</p>

        <section class="container-cards">
            <article>
                <h2>Módulo de Usuários</h2>
                <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                <a href="usuarios.php" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Relatórios de Vendas</h2>
                <p>Acompanhe os gráficos de desenvolvimento desta área.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Configurações do Servidor</h2>
                <p>Ajuste as portas do Apache e o banco de dados.</p>
                <a href="#" class="btn">Acessar</a>
            </article>
        </section>
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

p.subtitle {
    color: #64748b;
    font-size: 17px;
    margin-bottom: 50px;
}

/* Cards */
.container-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 28px;
}

article {
    background: white;
    border-radius: 16px;
    padding: 34px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    transition: all 0.35s ease;
    display: flex;
    flex-direction: column;
}

article:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
    border-color: #2563eb;
}

article h2 {
    color: #1e2937;
    font-size: 23px;
    margin-bottom: 14px;
}

article p {
    color: #64748b;
    flex: 1;
    margin-bottom: 30px;
    font-size: 15.5px;
}

/* Botão azul moderno */
.btn {
    background: #2563eb;
    color: white;
    padding: 14px 28px;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    font-size: 15.5px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.25);
}

.btn:hover {
    background: #1d4ed8;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35);
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
