async function gerarSenha(tipoSenha) {
    
    const dados = await fetch("create.php?tipo=" + tipoSenha);

    const response = await dados.json();

    console.log(response);
}