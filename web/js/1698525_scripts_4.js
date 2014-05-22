function listen(evnt, elem, func) {
    if (elem.addEventListener)  // W3C DOM
        elem.addEventListener(evnt,func,false);
    else if (elem.attachEvent) { // IE DOM
         var r = elem.attachEvent("on"+evnt, func);
         return r;
    }
}

goog.require('goog.dom');
goog.require('goog.array');
goog.require('goog.style');
goog.require('goog.dom.query');
goog.require('goog.dom.classes');
goog.require('goog.positioning.Corner');
goog.require('goog.ui.MenuItem');
goog.require('goog.ui.PopupMenu');
goog.require('goog.ui.ac');

function windowLoad() {
	var menu_app = new goog.ui.PopupMenu();
	menu_app.setToggleMode(true);
	menu_app.decorate(document.getElementById('menu-aplicativos'));

    var funcionalidades = [
			"Admissão de trabalhador", "Alterar dados cadastrais trabalhador", "Alterar contrato de trabalho", 
			"Estabilidade (Início/Término)", "Condição dif; trabalho  (Início/Término) ", "Trabalhador sem vínculo (Inicío/Alt./Término)", 
			"Desligamento", "Reintegração", "Aviso prévio (Criar/Cancelar)", "Comunicar acidente de trabalho", 
			"Atestado de saúde ocupacional", "Afastamento (Criar/Alterar/Retorno)"];
	var ac1 = new goog.ui.ac.createSimpleAutoComplete(funcionalidades, document.getElementById('busca-input'), false);

	menu_app.attach(
	    document.getElementById('botao-aplicativos'),
	    goog.positioning.Corner.BOTTOM_LEFT,
	    goog.positioning.Corner.TOP_LEFT);

	goog.events.listen(menu_app, 'action', function(e) {
	  window.location = (e.target.getValue());
	});
	
	alerts = document.querySelector('.alert .close');
	
	if (alerts) {
		goog.events.listen(alerts, goog.events.EventType.CLICK, function() {
			alert = goog.dom.getParentElement(this);
			goog.dom.removeNode(alert);
		});
	};
}

listen("load", window, windowLoad);