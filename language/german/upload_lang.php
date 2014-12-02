<?php
/**
* CodeIgniter
*
* An open source application development framework for PHP 5.2.4 or newer
*
* This content is released under the MIT License (MIT)
*
* Copyright (c) 2014, British Columbia Institute of Technology
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*
* @package	CodeIgniter
* @author	EllisLab Dev Team
* @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
* @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
* @license	http://opensource.org/licenses/MIT MIT License
* @link	http://codeigniter.com
* @since	Version 1.0.0
* @filesource
*/
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['upload_userfile_not_set'] = 'Es wurde kein POST-Wert mit dem Namen userfile gefunden.';
$lang['upload_file_exceeds_limit'] = 'Die hoch geladene Datei überschreitet die in der Anweisung upload_max_filesize in php.ini festgelegte Größe';
$lang['upload_file_exceeds_form_limit'] = 'Die hoch geladene Datei überschreitet die in dem HTML Formular mittels der Anweisung MAX_FILE_SIZE angegebene maximale Dateigröße';
$lang['upload_file_partial'] = 'Die Datei wurde nur teilweise übertragen.';
$lang['upload_no_temp_directory'] = 'Es wurde kein temporäres Verzeichnis auf Ihrem Server gefunden.';
$lang['upload_unable_to_write_file'] = 'Das Speichern der Datei auf die Festplatte ist fehlgeschlagen.';
$lang['upload_stopped_by_extension'] = 'Eine PHP Erweiterung hat den Upload der Datei gestoppt.';
$lang['upload_no_file_selected'] = 'Es wurde keine Datei für den Upload ausgewählt.';
$lang['upload_invalid_filetype'] = 'Der Dateityp, der Datei, welche Sie hochladen möchten, ist nicht erlaubt.';
$lang['upload_invalid_filesize'] = 'Die Datei, welche Sie hochladen möchten, überschreitet die erlaubte Größe.';
$lang['upload_invalid_dimensions'] = 'Die Grafikdatei, welche Sie hochladen möchten überschreitet die maximal erlaubte Abmessung.';
$lang['upload_destination_error'] = 'Beim Versuch die hoch geladene Datei in das Zielverzeichnis zu verschieben ist ein Problem aufgetreten.';
$lang['upload_no_filepath'] = 'Der angegebene Upload-Pfad scheint nicht gültig zu sein.';
$lang['upload_no_file_types'] = 'Sie haben keine Angaben zu den erlaubten Dateitypen vorgenommen.';
$lang['upload_bad_filename'] = 'Der angegebene Dateiname existiert bereits auf dem Server.';
$lang['upload_not_writable'] = 'Das Upload-Zielverzeichnis scheint keine Schreibrechte zu besitzen.';

/* End of file upload_lang.php */
/* Location: ./system/language/english/upload_lang.php */