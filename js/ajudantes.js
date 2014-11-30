
function deletar(alvo){

	if(alvo == 'categorias'){
		if( $('.checkbox-categorias:checked').length == 0 ){
		alert('Não há categorias selecionadas.');
		}else{
			var id = new Array();
			
			$('.checkbox-categorias:checked').each(function(){
				id.push($(this).val());
				
			});

			var array_ids = id.join('+');
			console.log(array_ids);
			
			alert('categorias a serem deletadas: '+id);
		}
	}
		
	
}
