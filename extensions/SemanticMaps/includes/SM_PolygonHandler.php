<?php

/**
 * Class to Handle Polygons in SM.
 * This class is used to convert the string representation
 * of Polygons to concrete structures.
 * Also acts as a factory class for polygons
 *
 * @since 2.1
 *
 * @file SM_PolygonHandler.php
 *
 * @author Nischay Nahata
 */
class PolygonHandler {

	/**
	 * The string used to store this value as a string in SMW.
	 *
	 * @since 2.1
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * The string used to store this value as an object.
	 *
	 * @since 2.1
	 *
	 * @var object or null
	 */
	protected $value = null;

	/**
	 * The array of error messages occured in parsing.
	 *
	 * @since 2.1
	 *
	 * @var array
	 */
	protected $errors = array();

	/**
	 * Array of classes used to validate different Geographic shapes.
	 *
	 * @since 2.1
	 *
	 * @var array
	 */
	protected $validatorClasses = array(
		'locations' => 'LocationValidator',
		'lines' => 'LineValidator',
		'polygons' => 'PolygonValidator',
		'circles' => 'CircleValidator',
		'rectangles' => 'RectangleValidator'
	);

	/**
	 * Array of classes of different Geographic shapes.
	 *
	 * @since 2.1
	 *
	 * @var array
	 */
	protected $geoClasses = array(
		'locations' => 'MapsLocation',
		'lines' => 'MapsLine',
		'polygons' => 'MapsPolygon',
		'circles' => 'MapsCircle',
		'rectangles' => 'MapsRectangle'
	);

	/**
	 * NOTE: These need to be changed as Manipulations are depreceated.
	 * Array of classes for param handling of different Geographic shapes.
	 *
	 * @since 2.1
	 *
	 * @var array
	 */
	protected $paramClasses = array(
		'locations' => 'MapsParamLocation',
		'lines' => 'MapsParamLine',
		'polygons' => 'MapsParamPolygon',
		'circles' => 'MapsParamCircle',
		'rectangles' => 'MapsParamRectangle'
	);

	/**
	 * Constructor.
	 *
	 * @since 2.1
	 *
	 * @param string $text
	 */
	public function __construct( $text ) {
		$this->text = $text;
	}

	public function getGeoType() {
		$parts = explode( '=', $this->text );
		return current( $parts );
	}

	public function getValidationErrors() {
		$this->validateText();
		return $this->errors;
	}

	protected function validateText() {
		$parts = explode( '=', $this->text );
		if( array_key_exists( $parts[0], $this->validatorClasses ) ) {
			$validatorClass = new $this->validatorClasses[ $parts[0] ]( '~' );
			if ( !$validatorClass->doValidation( $parts[1] ) )
				$this->errors[] = wfMessage( 'semanticmaps-shapes-improperformat', $this->text )->escaped();
		} else {
			$this->errors[] = wfMessage( 'semanticmaps-shapes-missingshape', $parts[0] )->escaped();
		}
	}

	/**
	 * Gets an object of the model class the string represents.
	 *
	 * @since 2.1
	 */
	public function shapeFromText() {
		$parts = explode( '~' , $this->text );
		$shape = explode( '=', array_shift( $parts ) );
		if( array_key_exists( $shape[0] , $this->geoClasses ) ) {
			$coords = explode( ':' , $shape[1] );
			if( $shape[0] == 'rectangles' ) {
				$geoClass = new $this->geoClasses[ $shape[0] ]( $coords[0], $coords[1] );
			} elseif( $shape[0] == 'circles' ){
				$geoClass = new $this->geoClasses[ $shape[0] ]( $coords[0], $coords[1] );
			} elseif( $shape[0] == 'locations' ){
				$geoClass = new $this->geoClasses[ $shape[0] ]( $coords[0] );
			} else {
				$geoClass = new $this->geoClasses[ $shape[0] ]( $coords );
			}

			return $geoClass;
		} else {
			return false;
		}
	}
}