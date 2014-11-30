
function deletar(alvo){

	if(alvo == 'categorias'){
		if( $('.checkbox-categorias:checked').length == 0 ){
		alert('Não há categorias selecionadas.');
		}else{
			var id = new Array();
			
			$('.checkbox-categorias:checked').each(function(){
				id.push($(this).val());
				
			});

			var array_ids = id.join(' , ');
			
			alert('categorias a serem deletadas: '+array_ids);


			$.ajax({
				url: 'php/banco.php?escondido=deletar&alvo=categorias&array_ids='+array_ids, success: function(data) {
					if(id.length == 1)
						alert('A categoria foi deletada com sucesso');
					else if(id.length > 1){
						alert('As categorias foram deletadas com sucesso');

					}

					if(data == 'ok'){
						$.ajax({
							url: 'php/banco.php?escondido=listar-categorias', success: function(data) {
								$('.coluna-conteudo').html(data);
							}
						});
					}

				}	
			});
		}
	} // fim alvo categorias
		
	
}
