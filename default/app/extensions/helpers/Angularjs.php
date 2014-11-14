<?php
/**
 * KumbiaPHP web & app Framework
 * Servicios Especializados 
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://wiki.kumbiaphp.com/Licencia
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@kumbiaphp.com so we can send you a copy immediately.
 *
 * @category   KumbiaPHP
 * @package    Helpers
 * @copyright  Copyright (c) 2007-2014 Servicios Especializados (http://webmasterhn.net)
 * @license    http://wiki.kumbiaphp.com/Licencia     New BSD License
 */

/**
 * Helper para creacion de Tags compatibles con Angularjs y nuevas librerias
 *
 * @category   KumbiaPHP
 * @package    Helpers
 */

class Angularjs{
	    /**
     * Incluye un archivo en el Bower librarie
     *
     * Estos deben ir siempre abajo de AgTags::angular()
     * @param string $src archivo javascript
     * @param boolean $cache indica si se usa cache de navegador
     */


    public static function bower($src, $cache = TRUE)
    {
        $src = "bower_componets/$src.js";
        if (!$cache) {
            $src .= '?nocache=' . uniqid();
        }

        return '<script type="text/js" src="' . PUBLIC_PATH . $src . '"></script>';
    }

	    /**
     * Incluye los archivos de desarrollo en la carpeta de angularjs
     *
     * @param string $src archivo de desarrollo angular
     * @param boolean $cache indica si se usa cache de navegador
     */
    public static function angular($src, cache = TRUE)
    {
        $src = "app/$src.js";
        if (!$cache) {
            $src .= '?nocache=' . uniqid();
        }

        return '<script type="text/js" src="' . PUBLIC_PATH . $src . '"></script>';
    }

	    /**
     * Incluye los archivos de desarrollo en la carpeta de angularjs
     *
     * Estos deben ir siempre abajo de AgTags::angular()
     * @param string $path con la url de la libreria externa
     * @param boolean $cache indica si se usa cache de navegador
     */

    public static function cdn($path)
    {
    	 return '<script type="text/js" src="' . $version . '"></script>';
    }
}