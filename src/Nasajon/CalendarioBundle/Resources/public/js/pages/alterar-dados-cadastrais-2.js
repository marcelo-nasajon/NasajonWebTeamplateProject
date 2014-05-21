goog.require('goog.dom.forms');
goog.require('goog.ui.Dialog');


function windowLoadDados2() {
	var menu_index = new goog.ui.PopupMenu();
	menu_index.setToggleMode(true);
	menu_index.decorate(document.getElementById('menu-formularios-disponiveis'));

	menu_index.attach(
	    document.getElementById('menu-formularios-disponiveis-caller'),
	    goog.positioning.Corner.BOTTOM_LEFT,
	    goog.positioning.Corner.TOP_LEFT);


	setScroll();

	goog.events.listen(window, goog.events.EventType.RESIZE, setScroll);

    var estabelecimentos = [
			"Admissão de trabalhador", "Alterar dados cadastrais trabalhador", "Alterar contrato de trabalho", 
			"Estabilidade (Início/Término)", "Condição dif; trabalho  (Início/Término) ", "Trabalhador sem vínculo (Inicío/Alt./Término)", 
			"Desligamento", "Reintegração", "Aviso prévio (Criar/Cancelar)", "Comunicar acidente de trabalho", 
			"Atestado de saúde ocupacional", "Afastamento (Criar/Alterar/Retorno)"];
	var estabelecimentoSelect = {};
	estabelecimentoSelect.selectRow = function selectRow(row) { 
		var novoEstabelecimento = goog.dom.createDom('span', 'label label-primary estabelecimentoToken', row);
		var novoEstabelecimentoFechar = goog.dom.createDom('span', null, '×');
		var novoEstabelecimentoInput = goog.dom.createDom('input', {
			'type': 'hidden',
			'value': row,
			'name': 'Estabelecimentos[]'
		}, null);
		novoEstabelecimento.appendChild(novoEstabelecimentoFechar);
		novoEstabelecimento.appendChild(novoEstabelecimentoInput);
		goog.dom.insertSiblingBefore(novoEstabelecimento, goog.dom.getElement('Estabelecimento'));
		goog.dom.insertSiblingBefore(document.createTextNode(' '), goog.dom.getElement('Estabelecimento'));
		
		goog.array.remove(estabelecimentos, row);
		est_matcher.setRows(estabelecimentos);
		// resizeInput('Estabelecimento');

		goog.dom.forms.setValue(goog.dom.getElement('Estabelecimento'), '');

		goog.events.listen(novoEstabelecimentoFechar, goog.events.EventType.CLICK, function() {
			parentElement = goog.dom.getParentElement(this);
			goog.dom.removeNode(goog.dom.getFirstElementChild(parentElement));
			goog.array.insert(estabelecimentos, goog.dom.getTextContent(parentElement));
			est_matcher.setRows(estabelecimentos);

			goog.dom.removeNode(parentElement);
			// resizeInput('Estabelecimento');
		});
	}

	var est_matcher = new goog.ui.ac.ArrayMatcher(estabelecimentos, false);
	var est_renderer = new goog.ui.ac.Renderer();
	var est_inputHandler = new goog.ui.ac.InputHandler(null, null, true);

	var est_autoComplete = new goog.ui.ac.AutoComplete(est_matcher, est_renderer, estabelecimentoSelect);
	est_inputHandler.attachAutoComplete(est_autoComplete);
	est_inputHandler.attachInputs(document.getElementById('Estabelecimento'));

	modalCallers = goog.dom.query('.modal-estabelecimento-caller');
	goog.array.map(modalCallers, function(modalCaller) {
		goog.events.listen(modalCaller, goog.events.EventType.CLICK, function() {
			modal.setVisible(true);
		});
	});

	var modal = new goog.ui.Dialog();
	modal.setContent('<label for="EstabelecimentoModal">Estabelecimento</label><input type="text" class="form-control" id="EstabelecimentoModal" />');
	modal.setTitle('Busca de Estabelecimento');
	modal.setHasTitleCloseButton(false);

	modal.setButtonSet(goog.ui.Dialog.ButtonSet.OK_CANCEL);

	goog.events.listen(modal, goog.ui.Dialog.EventType.SELECT, function(e) {
	  	if (e.key == 'ok') {
	  		goog.dom.forms.setValue(goog.dom.getElement('Estabelecimento'), goog.dom.forms.getValue(goog.dom.getElement('EstabelecimentoModal')));
	  		goog.dom.forms.setValue(goog.dom.getElement('EstabelecimentoModal'), '');
	  	}
	});

}

function resizeInput(id) {
	input = goog.dom.getElement(id);
	parent = goog.dom.getParentElement(input);

	soma_larguras = 0; y = 0;
	labels = goog.dom.getElementsByClass('label', parent);
	goog.array.map(labels, function(child) {
		novo_y = goog.style.getRelativePosition(parent, child).y;
		if (y != novo_y) {
			soma_larguras = 0;
			y  = novo_y;
		}
		soma_larguras += goog.style.getSize(child).width + 5;
	});

	nova_largura = goog.style.getSize(parent).width - soma_larguras - 5;
	if (nova_largura > 30) {
		input.style.width = nova_largura + 'px';
	} else {
		input.style.width = '100%';
	}

}

function setScroll() {
	elementos_fixed = goog.dom.query('#main-header, #persona, #container-alerta');
	
	soma_alturas = 0;
	goog.array.map(elementos_fixed, function(e) {
		soma_alturas += goog.style.getSize(e).height;
	});

	viewportSize = goog.dom.getViewportSize();
	if (soma_alturas < viewportSize.height) {
		goog.dom.getElement('formulario-dados-principais').style.height = (viewportSize.height - soma_alturas) + 'px';
	} else {
		goog.dom.getElement('formulario-dados-principais').style.height = '300px';
	}
	goog.dom.getElement('formulario-dados-principais').style.overflow = 'auto';
}

function highlightTab(tabId,link){
      $(".funcionario-tab").each(function(){
	    if($(this).attr('id')=='form-'+tabId){
		$(this).removeClass('funcionario-tab-hidden');
	    }else{
		$(this).addClass('funcionario-tab-hidden');
	    }	  
      });
      $("#formularios-disponiveis .active").removeClass('active');
      $(link).parent().addClass('active');
}

function makeTabs(){
      $(".tab-link").click(function(){
	    var targetTabId = $(this).attr('href').substring(1);
	    var targetTab = $("#"+targetTabId);
	    if(targetTab.attr('loaded')!='true'){
		targetTab.load(location.href.replace(location.hash,"")+'/'+targetTabId);
		targetTab.attr('loaded','true');
	    }		
//	    highlightTab(targetTabId,this);
	    
      });
      //$('.tabcordion').tabcordion();
     // $('#myTab').tabCollapse();
}

listen("load", window,makeTabs);
listen("load", window, windowLoadDados2);

