<?php

class ElementCacklecount extends Element {


	public function hasValue($params = array()) {
		return true;
	}


	public function edit() {
		return null;
	}


	public function render($params = array()) {
		$params = $this->app->data->create($params);
		$a = "";
		$TemplateCackle = $this->get('value');
		$cackleurl = JRoute::_($this->app->route->item($this->_item, false), false, 2);
		// add before </body> in your template - - - pleeeeease
		// <script type="text/javascript">
		// cackle_widget = window.cackle_widget || [];
		// cackle_widget.push({widget: 'CommentCount', id: YOUR_SITE_ID, no: '0 комментариев', one: '1 комментарий', mult: 'Комментариев - {num}'});
		// </script>
		if ($TemplateCackle == 0) {
			return $this->_item->getState() ? '<a cackle-channel="'.$cackleurl.'" href="'.$cackleurl.'#mc-container">' . $a . '</a>' : $a;
		}
		else {
			return $this->_item->getState() ? '<a cackle-channel="item-'.$this->_item->id.'" href="'.$cackleurl.'#mc-container">' . $a . '</a>' : $a;
		}

	}

}