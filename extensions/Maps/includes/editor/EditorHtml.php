<?php

/**
 * Class to Handle HTML generation for MapEditor
 *
 * @since 2.1
 *
 * @file EditorHtml.php
 * @ingroup Maps
 *
 * @licence GNU GPL v2+
 * @author Nischayn22
 */
class MapEditor extends ContextSource{

    /**
     * Array holding the additional attributes for the canvas div.
     * @var array()
     * @since 2.1
     */
    protected $attribs;

    /**
     * @param array $attribs
     * @param ContextSource|null $
     * @since 2.1
     */
    public function __construct( $attribs = array(), ContextSource $contextSource = null ){
        $this->attribs = $attribs;
    }

    /**
     * Returns the HTML for the MapEditor.
     * @return string
     * @since 2.1
     */
    public function getEditorHTML() {

	$output = $this->getCanvasDiv().'<div style="display: none;">';

		return $output;
	}
	public function utf_8_sprintf ($format) {
	  $args = func_get_args();

	  for ($i = 1; $i < count($args); $i++) {
		$args [$i] = iconv('UTF-8', 'ISO-8859-2', $args [$i]);
	  }
	  
	  return iconv('ISO-8859-2', 'UTF-8', call_user_func_array('sprintf', $args));
	}
    /**
     * @return string
     * @since 2.1
     */
    public function getCanvasDiv(){
        return Html::element(
            'div',
            $this->attribs
        );
    }
	
}