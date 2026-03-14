<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Eric Freitas</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

    <div class="dashboard-container">
      
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="cad-usuario.php">Usuários</a></li>
                <li><a href="usuarios.php">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>

            
            <div class="perfil-usuario">
                <img src="https://play-lh.googleusercontent.com/jeNGu6ehpO1E-44ltojEoEAmQApE015dsuFVeqVGsizBGzlydGV8aq5C_gZrj59F93s=w240-h480-rw" alt="Avatar Otavio augusto">
                <span>otavio augusto</span>
            </div>
        </nav>

        
        <main>
            <section class="container-cards">
                
                
                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="#" class="btn">Acessar</a>
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
    </div>


    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
    </footer>

</body>
</html>


<style>
* {
    margin: 0;
    padding: 0;
}


body {
    background-color: #dfdfdf;
    font-family: 'Courier New', Courier, monospace;
    color: #333333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}


.dashboard-container {
    display: flex;
    align-items: stretch;
    flex: 1;
}


nav {
    width: 200px;
    background-color: #000000;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

nav ul {
    display: flex;
    flex-direction: column;
    gap: 15px;
    padding: 0;
    list-style: none;
}

nav a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background 0.3s;
}

nav a:hover {
    background-color: #34495e;
    color: #ffcc00;
}

.perfil-usuario {
    display: flex;
    align-items: center;
    gap: 10px;
    color: white;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    margin-top: auto;
}

.perfil-usuario img {
    width: 40px;
    border-radius: 50%;
}

main {
    flex: 1;
    padding: 30px;
    background-color: #fdfdfd;
}


.container-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

article {
    display: flex;
    flex: 1;
    flex-direction: column;
    min-width: 250px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

article h2 {
    color: #000000;
    margin-bottom: 10px;
}

article p {
    margin-bottom: 20px;
    color: #555;
}


.btn {
    margin-top: auto;
    display: inline-block;
    text-align: center;
    background-color: #000000;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.3s;
}

.btn:hover {
    background-color: #003366;
}


footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 14px;
}</style>