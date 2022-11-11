

// FUNÇÃO PARA GERAR SENHA CONFORME O TIPO DA SENHA ENVIADO NO PARÂMETRO
async function gerarSenha(tipoSenha) {

    // Chamando oarquivo PHP para gerar senha
    const dados = await fetch("create.php?tipo=" + tipoSenha,
        {
            method: 'GET'
        }
    );

    // Ler os dados retornados do PHP
    const resposta = await dados.json();

    // Verificando se há erro no retorno do PHP
    if (resposta['status']) {

        // Enviando a mensagem de TRUE para o HTML
        document.getElementById("msgAlert").innerHTML = resposta['nome_senha'];
        
    } else {

        // Enviando a mensagem de FALSE para o HTML
        document.getElementById("msgAlert").innerHTML = resposta['msg'];

    }
    
}

senhasGeradas();


// FUNÇÃO GERAR AS SENHAS GERADAS
async function senhasGeradas() {

    const senhas = await fetch("senhas.php");

    const resposta = await senhas.json();

    const see = document.getElementById("callSetKeys");

    if (resposta['status']) {

        for (const key of resposta['senha']) {
            see.innerHTML += `
        <div class='callSetKeysSee' id='senha-gerada-${key.sgid}'>
            <div class='callSetKeysSees'>
                <p class='one'>Mesa 7</p>
            </div>
            <div class='callSetKeysSeesTwo'>

                <p class='one'> <small>Senha</small> <b>${key.snome_senha}'</b></p>
                <p class='two'>15:15 09/11/2022</p>

            </div>
            <div class='callSetKeysSeebtn'>
                <button onclick='chamarSenha(${key.sgid})'>Chamar</button>
                <button class='cancel'>Cancelar</button>
            </div>
        </div>
        `;
        }
        
    } else {

        document.getElementById("msgAlert").innerHTML = resposta['msg'];
    }

}


async function chamarSenha(tiposenha) {

    const dados = await fetch("chamarsenha.php?tipo=" + tiposenha);

    const resposta = await dados.json();

    if (resposta['status']) {

        document.getElementById("msgAlert").innerHTML = resposta['msg'];
    } else {
        document.getElementById("msgAlert").innerHTML = resposta['msg'];

        alterarPainel(tiposenha);

        const see = document.getElementById("callSetKeys");

        var listSenha = document.getElementById("senha-gerada-" + resposta['id']);


        see.removeChild(listSenha);

    }

}

async function alterarPainel(senha) {

    const senhas = await fetch("alterandopainel.php?tipo=" + senha);

    const resulta = await senhas.json();

    if (resulta['status']) {

        document.getElementById("callSetKeySeeTwo").innerHTML = resulta['senha'];

        console.log(senhas['senha']);
    }

}


