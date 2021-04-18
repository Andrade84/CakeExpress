
/*ATIVAR O JAVASCRIPT*/

new SimpleSlide({
	slide:"quote", // nome do atributo data-slide="principal"
	time: 6000 //tempo de transição entre os slides 
});

new SimpleSlide({
	slide:"receitas", // nome do atributo data-slide="principal"
	time: 6000, //tempo de transição entre os slides 
	nav: true
});

new SimpleAnime();

new SimpleForm({
  form: ".formphp", // seletor do formulário
  button: "#enviar", // seletor do botão
  erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>Um erro ocorreu, tente para o email brunoalbarado19@gmail.com.</p></div>", // mensagem de erro
  sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
});
