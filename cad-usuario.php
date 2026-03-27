<section class="card-form">
    <div class="form-header">
        <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
        <p>Preencha os dados abaixo para registrar um novo acesso.</p>
    </div>

    <form action="processa.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
        </div>

        <div class="form-row">
            <div class="form-group flex-1">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group flex-1">
                <label for="nivel">Nível</label>
                <select id="nivel" name="nivel">
                    <option value="1">Usuário</option>
                    <option value="2">Administrador</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Finalizar Cadastro</button>
            <a href="usuarios.php" class="btn-cancel">Cancelar</a>
        </div>
    </form>
</section>



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
    padding: 40px 20px;
}

/* ==================== CARD DO FORMULÁRIO ==================== */
.card-form {
    background: white;
    max-width: 720px;
    margin: 30px auto;
    padding: 45px 50px;
    border-radius: 16px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    border: 1px solid #e2e8f0;
}

/* Cabeçalho do formulário */
.form-header {
    margin-bottom: 35px;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 20px;
}

.form-header h1 {
    font-size: 28px;
    color: #0f172a;
    margin-bottom: 8px;
}

.form-header p {
    color: #64748b;
    font-size: 16px;
}

/* Grupos de campos */
.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 24px;
}

.form-row {
    display: flex;
    gap: 24px;
}

.flex-1 {
    flex: 1;
}

label {
    font-weight: 600;
    color: #334155;
    font-size: 14.5px;
}

input, select {
    padding: 14px 16px;
    border: 1px solid #cbd5e0;
    border-radius: 10px;
    font-size: 15.5px;
    transition: all 0.3s ease;
    background: #fff;
}

input:focus, 
select:focus {
    border-color: #2563eb;
    outline: none;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
}

/* Botão Salvar */
.btn-save {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    border: none;
    padding: 14px 32px;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.25);
    margin-top: 10px;
}

.btn-save:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35);
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
}

/* Mensagem de sucesso/erro (caso precise) */
.message {
    padding: 14px 18px;
    border-radius: 10px;
    margin-bottom: 25px;
    font-weight: 500;
}

.success {
    background: #dcfce7;
    color: #166534;
    border: 1px solid #86efac;
}

.error {
    background: #fee2e2;
    color: #b91c1c;
    border: 1px solid #f87171;
}
</style>