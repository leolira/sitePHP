			$(function () {
			    var scntDiv = $('#dynamicDiv');
			    $(document).on('click', '#addInput', function () {
			        $('<p>'+
                      '<select> '+
                    '<option selected="selected" disabled>Selecione tipo</option> '+
                    '<option value="imgExt">Imagem externa</option> '+
                    '<option value="imgInt">Imagem interna</option> '+
                    '<option value="imgHum">Planta Humanizada</option> '+
                    '<option value = "video">Video animação</option> '+
                '</select>'+ '<label for="qtd_prod">Qtd: </label> '+
                '<input type="number" id="qtd_prod" class="qtd">'+
            '</br> '+
                '<a class="botao" href="javascript:void(0)" id="addInput">(+) novo item</a> '+
                '<a class="botao" href="javascript:void(0)" id="remInput">(-) remove item</a> '+
                    '</p>').appendTo(scntDiv);
			        return false;
			    });
			    $(document).on('click', '#remInput', function () {
		            $(this).parents('p').remove();
			        return false;
			    });
			});