<?php
// File           spanish.inc.php / FirebirdWebAdmin
// Purpose        spanish strings definitions
// Author         Jose Pichardo <joel_pichardo@yahoo.com>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <04/03/28 11:39:45 >       
//
// $Id: spanish.inc.php,v 1.4 2005/10/05 20:26:43 lbrueckner Exp $

// strings used for the tabfolder menu
$menu_strings = array('Database'   => 'Base de Datos',   
                      'Tables'     => 'Tablas',     
                      'Accessories'=> 'Acessorios',
                      'SQL'        => 'SQL',        
                      'Data'       => 'Datos',       
                      'Users'      => 'Usuarios',      
                      'Admin'      => 'Servicios'       
                      );

// the coordinates for the image area used by the tabfolder menu
$menu_coords = array('Database'   => '8,0,122,35',
                     'Tables'     => '124,0,179,35',
                     'Accessories'=> '181,0,269,35',
                     'SQL'        => '271,0,308,35',
                     'Data'       => '310,0,359,35',
                     'Users'      => '361,0,430,35',
                     'Admin'      => '432,0,504,35',
                     );

$ptitle_strings = array('info'        => 'Infomacion', 
                        'db_login'    => 'Conectar a Base de Datos',
                        'db_create'   => 'Crear Base de Datos',
                        'db_delete'   => 'Borrar Base de Datos',
                        'db_systable' => 'Tablas de Sistema',
                        'db_meta'     => 'Metadatos',
                        'tb_show'     => 'Ver Tablas',
                        'tb_create'   => 'Crear Nueva Tabla',
                        'tb_modify'   => 'Modificar Tabla',
                        'tb_delete'   => 'Borrar Tabla',
                        'acc_index'   => '�ndices',
                        'acc_gen'     => 'Generadores',
                        'acc_trigger' => 'Disparadores',
                        'acc_proc'    => 'Procedimientos Almacenados',
                        'acc_domain'  => 'Dominios',
                        'acc_view'    => 'Vistas',
                        'acc_udf'     => 'User Defined Functions',
                        'acc_exc'     => 'Excepciones',
                        'sql_enter'   => 'Escriba algun comando o Script',
                        'sql_output'  => 'Mostrar Resultado',
                        'tb_watch'    => 'Ver Tabla',
                        'dt_enter'    => 'Insertar Datos',
                        'dt_export'   => 'Export Data',
                        'dt_import'   => 'CSV Import',
                        'usr_user'    => 'Usuarios',
                        'usr_role'    => 'Roles',
                        'usr_grant'   => 'Grants',
                        'usr_cust'    => 'Customizing',
                        'adm_server'  => 'Estad�sticas del Servidor',
                        'adm_dbstat'  => 'Estad�sticas de la Base de Datos',
                        'adm_gfix'    => 'Mantenimiento de la Base de Datos',
                        'adm_backup'  => 'Respaldo',
                        'adm_restore' => 'Restauracion',
                        'Open'        => 'Abrir',
                        'Close'       => 'Cerrar',
                        'Up'          => 'Subir',
                        'Top'         => 'Al Tope',
                        'Bottom'      => 'Al Pie',
                        'Down'        => 'Bajar'
                        );

// strings to inscribe buttons
$button_strings = array('Login'    => 'Conectar',
                        'Logout'   => 'Desconectar',
                        'Create'   => 'Crear',
                        'Delete'   => 'Borrar',
                        'Select'   => 'Seleccionar',
                        'Save'     => 'Gualdar',
                        'Reset'    => 'Recomenzar',
                        'Cancel'   => 'Cancelar',
                        'Add'      => 'Adicionar',
                        'Modify'   => 'Modificar',
                        'Ready'    => 'Listo',
                        'Yes'      => 'Si',
                        'No'       => 'No',
                        'DoQuery'  => 'Ejecutar Consulta',
                        'QueryPlan'=> 'Plan del Query',
                        'Go'       => 'Ir',
                        'DisplAll' => 'Mostrar todo',
                        'Insert'   => 'Insertar',
                        'Export'   => 'Exportar',
                        'Import'   => 'Importar',
                        'Remove'   => 'Remover',
                        'Drop'     => 'Borrar',
                        'Set'      => 'Definir',
                        'Clear'    => 'Limpiar',
                        'SweepNow' => 'Sweep Now',
                        'Execute'  => 'Ejecutar',
                        'Backup'   => 'Respaldo',
                        'Restore'  => 'Restaurar',
                        'Reload'   => 'Recalgar',
                        'OpenAll'  => 'Abrir Todo',
                        'CloseAll' => 'Cerrar Todo',
                        'Defaults' => 'Por Defecto',
                        'Load'     => 'Calgar'
                        );

// strings on the database page
$db_strings = array('Database' => 'Base de Datos',
                    'Host'     => 'Host',
                    'Username' => 'Nombre de Usuario',
                    'Password' => 'Contrase�a',
                    'Role'     => 'Role',
                    'Cache'    => 'Cache',
                    'Charset'  => 'Character Set',
                    'Dialect'  => 'Dialecto',
                    'Server'   => 'Version FIB/Interbase',
                    'NewDB'    => 'Nueva Base de Datos',
                    'PageSize' => 'Tama�o de P�gina',
                    'DelDB'    => 'Borrar Base de Datos',
                    'SysTables'=> 'Tablas de Sistema',
                    'SysData'  => 'Datos de Sistema',
                    'FField'   => 'Campo Filtro',
                    'FValue'   => 'Campo Valor',
                    'Refresh'  => 'Actualizar',
                    'Seconds'  => 'Segundos'
                    );

// strings on the table page
$tb_strings = array('Name'      => 'Nombre',
                    'Type'      => 'Tipo',
                    'Length'    => 'Tama�o',
                    'Prec'      => 'Precion',
                    'PrecShort' => 'Prec',
                    'Scale'     => 'Escala',
                    'Charset'   => 'Char Set',
                    'Collate'   => 'Collate',
                    'Collation' => 'Collation',
                    'NotNull'   => 'No Nulos',
                    'Unique'    => 'Un�co',
                    'Computed'  => 'Calculado',
                    'Default'   => 'Por defecto',
                    'Primary'   => 'Prim�ria',
                    'Foreign'   => 'Foranea',
                    'TbName'    => 'Nombre de la Tabla',
                    'Fields'    => 'Campos',
                    'DefColumn' => 'Definicion para la Columna',
                    'SelTbMod'  => 'Selecione a tabla para modificar',
                    'DefNewCol' => 'Definiciones para la Nueva Columna',
                    'NewColPos' => 'Nueva Posicion para la Columna',
                    'SelColDel' => 'Selecione columna a borrar',
                    'SelColMod' => 'Selecione columna a modificar',
                    'AddCol'    => 'Adicionar columna',
                    'SelTbDel'  => 'Selecione tabla a borrar',
                    'Datatype'  => 'Tipo de Dato',
                    'Size'      => 'Tama�o',
                    'Subtype'   => 'Subtipo',
                    'SegSiShort'=> 'Tama�o de Segmento',
                    'Domain'    => 'Dom�nio',
                    'CompBy'    => 'Calculado por',
                    'Table'     => 'tabla',
                    'Column'    => 'columna',
                    'Source'    => 'Origen',
                    'Check'     => 'Check',
                    'Yes'       => 'Si',
                    'DispCounts'=> 'Contar Registros',
                    'DispCNames'=> 'constraint names',
                    'DispDef'   => 'default values',
                    'DispComp'  => 'computed values',
                    'DropPK'    => 'Borrar Clave Primaria',
                    'DropFK'    => 'Borrar Clave Foranea',
                    'DropUq'    => 'Borrar Unique Constraint',
                    'FKName'    => 'Nombre Clave Foranea',
                    'OnUpdate'  => 'On Update',
                    'OnDelete'  => 'On Delete',
                    'Table1'    => 'NUEVATABLA',
                    'Column1'   => 'NUEVOCAMPO'
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => 'Crear Nuevo �ndice',
                     'ModIdx'    => 'Modificar �ndice %s',
                     'Name'      => 'Nombre',
                     'Active'    => 'Activo',
                     'Unique'    => '�nico',
                     'Sort'      => 'Clasificar',
                     'Table'     => 'Tabla',
                     'Columns'   => 'Columnas',
                     'SelIdxMod' => 'Selecione un �ndice para modificar',
                     'SelIdxDel' => 'Selecione un �ndice para borrar',
                     'ColExpl'   => 'Colunma(s), separadas por Comas',
                     'Value'     => 'Valor',
                     'SetValue'  => 'Definir Valor',
                     'DropGen'   => 'Remover Generador',
                     'CreateGen' => 'Crear Nuevo Generador',
                     'StartVal'  => 'Valor Inicial',
                     'CreateTrig'=> 'Crear Nuevo Disparador',
                     'SelTrigMod'=> 'Selecione un Disparador para modificar',
                     'SelTrigDel'=> 'Selecione un Disparador para Borrar',
                     'Type'      => 'Tipo',
                     'Pos'       => 'Pos',
                     'Phase'     => 'Phase',
                     'Position'  => 'Posicion',
                     'Status'    => 'Estatus',
                     'Source'    => 'Origen',
                     'ModTrig'   => 'Modificar Disparador %s',
                     'CreateDom' => 'Crear Nuevo Dom�nio',
                     'SelDomDel' => 'Selecione dom�nio a borrar',
                     'SelDomMod' => 'Selecione dom�nio a modificar',
                     'Size'      => 'Tama�o',
                     'Charset'   => 'Charset',
                     'Collate'   => 'Collate',
                     'PrecShort' => 'Prec',
                     'Scale'     => 'Escala',
                     'Subtype'   => 'Subtipo',
                     'SegSiShort'=> 'Tama�o do Segmento',
                     'ModDomain' => 'Modificar Dom�nio %s',
                     'Generator' => 'generador',
                     'Index'     => '�ndice',
                     'Trigger'   => 'Disparador',
                     'Domain'    => 'Dom�nio',
                     'CreateProc'=> 'Crear Nuevo Procedimiento',
                     'ModProc'   => 'Modificar Procedimiento %s',
                     'SelProcMod'=> 'Selecione un procedimiento para modificar',
                     'SelProcDel'=> 'Selecione un procedimiento para Borrarlo',
                     'SP'        => 'procedimiento Almacenado',
                     'Param'     => 'Parametros',
                     'Return'    => 'Retorno',
                     'CreateView'=> 'Crear Nueva Vista',
                     'SelViewDel'=> 'Selecione la vista que desea borrar',
                     'SelViewMod'=> 'Selecione la vista que desea modificar',
                     'CheckOpt'  => 'with check option',
                     'ModView'   => 'Modificar Vista %s',
                     'Yes'       => 'Si',
                     'No'        => 'No',
                     'Module'    => 'Module',
                     'EPoint'    => 'Entrypoint',
                     'IParams'   => 'Parametros de entrada',
                     'Returns'   => 'Returns',
                     'UDF'       => 'user defined function',
                     'SelUdfDel' => 'Selecionar funcion que desea borrar',
                     'Exception' => 'Exception',
                     'Message'   => 'Message',
                     'SelExcDel' => 'Seleccionar exception a borrar',
                     'CreateExc' => 'Crear nueva exception',
                     'SelExcMod' => 'Seleccione exception a modificar',
                     'ModExc'    => 'Modificar exception %s'
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => 'mostrando resultado del buffer',
                     'SelTable' => 'Selecione una Tabla',
                     'Config'   => 'Configurar',
                     'Column'   => 'Columna',
                     'Show'     => 'Mostrar',
                     'Sort'     => 'Classificar',
                     'BlobLink' => 'Blob como Link',
                     'BlobType' => 'Tipo de Blob',
                     'Rows'     => 'Registros',
                     'Start'    => 'Iniciar',
                     'Dir'      => 'Directorio',
                     'ELinks'   => 'Editar Links',
                     'DLinks'   => 'Borrar Links',
                     'Asc'      => 'Ascendente',
                     'Desc'     => 'Descendente',
                     'Restrict' => 'Condicion para restringir los resultado, ej. NOMBREDELCAMPO>=1000',
                     'Prev'     => 'Anterior',
                     'Next'     => 'Pr�ximo',
                     'End'      => 'Fin',
                     'Total'    => 'Total',
                     'Edit'     => 'Editar',
                     'Delete'   => 'Borrar',
                     'Yes'       => 'Si',
                     'No'        => 'No',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars'  => 'Text Blob Characters'
                     );

// strings on the data page
$dt_strings = array('SelTable' => 'Selecione uma Tabla',
                    'Table'    => 'Tabla',
                    'EditFrom' => '%1$sEditar la Tabla %2$s',
                    'FileName' => 'Archivo',
                    'EntName'  => 'Nombre',
                    'FileForm' => 'Formato',
                    'ConvEmpty'=> 'on import convert empty values to NULL',
                    'CsvForm1' => 'Todos los valores entre Comillas() van separados por comas',
                    'CsvForm2' => 'valores entre Comillas dobles',
                    'CsvForm3' => 'Datos separados nuevas lineas(0x0a)',
                    'ColConf'  => 'Configuration for Column %1$s',
                    'ColFKLook'=> 'Column for foreign key lookup',
                    'FKLookup' => 'foreign key lookup',
                    'IARow'    => 'insert another row',
                    'INRow'    => 'insert as a new row',
                    'Drop'     => 'drop',
                    'ExpOptCsv'=> 'CSV-Data',
                    'ExpOptExt'=> 'External Table',
                    'ExpOptPhp'=> 'PHP Code',
                    'ExpOptSql'=> 'SQL',
                    'ExpOptXml'=> 'XML',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb'  => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile'=> 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts'  => 'General Options',
                    'ReplNull' => 'Replace <i>NULL</i> values by',
                    'DFormat'  => 'Date format',
                    'TFormat'  => 'Time format',
                    'CsvOpts'  => 'CSV-Options',
                    'FTerm'    => 'Fields terminated by',
                    'FEncl'    => 'Fields enclosed by',
                    'FTEncl'   => 'Field types to enclose',
                    'All'      => 'all',
                    'Numeric'  => 'numeric',
                    'FEsc'     => 'Escape character',
                    'LTerm'    => 'Lines terminated by',
                    'FNamesF'  => 'Field names at first row'
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => 'Crear Usu�rio',
                     'ModUser'   => 'Modificar Usu�rio %s',
                     'UName'     => 'Nombre de Usu�rio',
                     'FName'     => 'Primer Nombre',
                     'MName'     => 'Segundo Nombre',
                     'LName'     => 'Apellido',
                     'UserID'    => 'ID del Usu�rio',
                     'GroupID'   => 'ID del Grupo',
                     'SysdbaPW'  => 'Contrase�a',
                     'Required'  => 'requerido para crear, modificar y borrar',
                     'USelMod'   => 'Modificar Usuario',
                     'USelDel'   => 'Borrar Usuario',
                     'Password'  => 'Contrase�a',
                     'RepeatPW'  => 'Repetir Contrase�a',
                     'Name'      => 'Nombre',
                     'Owner'     => 'Due�o',
                     'Members'   => 'Miembros',
                     'Role'      => 'Role',
                     'User'      => 'Usu�rio',
                     'CreateRole'=> 'Crear role',
                     'RoleSelDel'=> 'Borrar role',
                     'RoleAdd'   => 'Agregar role',
                     'RoleRem'   => 'Remover role',
                     'ColSet'    => 'Color Settings',
                     'CBg'       => 'Fondo',
                     'CPanel'    => 'Panel Frame',
                     'CArea'     => 'Panel Background',
                     'CHeadline' => 'Headline Background',
                     'CMenubrd'  => 'Menuborder',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg'     => 'Iframe Background',
                     'CLink'     => 'Links',
                     'CHover'    => 'Links while Mouseover',
                     'CSelRow'   => 'Selected Rows',
                     'CSelInput' => 'Selected Input Fields',
                     'CFirstRow' => 'Odd Table Rows',
                     'CSecRow'   => 'Even Table Rows',
                     'Appearance'=> 'Apariencia',
                     'Language'  => 'Lenguaje',
                     'Fontsize'  => 'Fontsize in Points',
                     'TACols'    => 'Textarea Columns',
                     'TARows'    => 'Textarea Rows',
                     'IFHeight'  => 'Iframe Height in Pixel', 
                     'Attitude'  => 'Attitude',
                     'AskDel'    => 'Confirmar al borrar Objetos o Registros',
                     'Yes'       => 'Si',
                     'No'        => 'No'
                    );

// strings on the admin page
$adm_strings = array('SysdbaPW'  => 'Contrase�a del SYSDBA',
                     'Required'  => 'Es requerida si no eres el due�o de la Base de Datos',
                     'Sweeping'  => 'Sweeping',
                     'SetInterv' => 'Set sweep threshold (number transactions)',
                     'DBDialect' => 'Dialecto',
                     'Buffers'   => 'Cache Buffers',
                     'AccessMode'=> 'Access Mode',
                     'WriteMode' => 'Write Mode',
                     'ReadWrite' => 'read/write',
                     'ReadOnly'  => 'read only',
                     'Sync'      => 'synchronous',
                     'Async'     => 'asynchronous',
                     'UseSpace'  => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve'   => 'reserve',
                     'DataRepair'=> 'Data Repair',
                     'Validate'  => 'Validate',
                     'Full'      => 'Full',
                     'Mend'      => 'Mend',
                     'NoUpdate'  => 'No Update',
                     'IgnoreChk' => 'Ignore Checksum Errors',
                     'Transact'  => 'Transactions',
                     'Shutdown'  => 'Shutdown',
                     'Commit'    => 'Commit',
                     'Rollback'  => 'Rollback',
                     'TwoPhase'  => 'Two Phase Recovery',
                     'AllLimbo'  => 'all limbo transactions',
                     'NoConns'   => 'No New Connections',
                     'NoTrans'   => 'No New Transactions',
                     'Force'     => 'Force',
                     'ForSeconds'=> 'for/after %s seconds',
                     'Reconnect' => 'Reconnect FirebirdWebAdmin after the shutdown',
                     'Rescind'   => 'Rescind Shutdown',
                     'BTarget'   => 'Backup Target',
                     'FDName'    => 'File or device name',
                     'Options'   => 'Options',
                     'BConvert'  => 'Convert external files as internal tables',
                     'BNoGC'     => 'Do not garbage collect during backup',
                     'BIgnoreCS' => 'Ignore Checksums during backup',
                     'BIgnoreLT' => 'Ignore limbo transactions during backup',
                     'BTransport'=> 'Backup in non transportable format',
                     'BMDOnly'   => 'Backup only metadata',
                     'BMDOStyle' => 'Metadata in old-style format',
                     'RSource'   => 'Restore Source',
                     'RTarget'   => 'Restore Target',
                     'TargetDB'  => 'Target database',
                     'NewFile'   => 'Restore to new file',
                     'RestFile'  => 'Replace existing file',
                     'PageSize'  => 'Page Size',
                     'UseAll'    => 'Restore Database with 100% fill ratio on every data page',
                     'OneAtTime' => 'Restore one table at a time',
                     'IdxInact'  => 'Indexes inactive upon restore',
                     'NoValidity'=> 'Delete validity constraints from restored metadata',
                     'KillShad'  => 'Do not create previously defined shadow files',
                     'ConnAfter' => 'Connect FirebirdWebAdmin to the restored database',
                     'Verbose'   => 'Verbose',
                     'Analyze'   => 'Analyze'
                     );

// strings for the info-panel
$info_strings = array('Connected' => 'Conectado a la base de datos',
                      'ExtResult' => 'Resultado de un comando externo',
                      'FBError'   => 'Error de Firebird',
                      'ExtError'  => 'Error de un comando externo',
                      'Error'     => 'Error',
                      'Warning'   => 'Alerta',
                      'Message'   => 'Mensaje',
                      'ComCall'   => 'Llamada a un comando',
                      'Debug'     => 'Sal�da de Debug',
                      'PHPError'  => 'Error de PHP'
                      );

$MESSAGES = array('BLOB_BROKEN_INFO'      => "La version de PHP no soporta Campos Blob(pelo menos no php4.0.2 e php4.0.3).<br>\n"
                                            ."Favor Actualizar la version de php.<br>\n",
                  'SP_CREATE_INFO'        => 'FirebirdWebAdmin crea un stored procedure "'.SP_LIMIT_NAME.'" que ser� utilizada por la funcion Ver Tabla '
                                            ."Este se guarda en su Base de Datos.<br>\n"
                                            .'Se varias personas van a usar FirebirdWebAdmin al mismo tiempo, por favor cambie el valor '
                                            ."de WATCHTABLE_METHOD en el archivo inc/configuration.inc.php.<br>\n",
                  'EDIT_ADD_PRIMARY'      => "Necesita crear un campo como Llave Primaria, Esto es necesario para poder accesar la tabla.<br>\n"
                                            ."Los programas seleccionan la Llave Primaria para el acceso a Datos.",
                  'CSV_IMPORT_COUNT'      => "%1\$d lineas importadas para la tabla %2\$s<br>\n",
                  'CONFIRM_TABLE_DELETE'  => 'Realmente desea Borrar la tabla %s?',
                  'CONFIRM_COLUMN_DELETE' => 'Realmente desea Borrar la Columna %1$s da tabela %2$s?',
                  'CONFIRM_DB_DELETE'     => 'Realmente desea Borrar la Base de Datos %s?',
                  'CONFIRM_TRIGGER_DELETE'=> 'Realmente desea Borrar el trigger %s?',
                  'CONFIRM_DOMAIN_DELETE' => 'Realmente desea Borrar el dom�nio %s?',
                  'CONFIRM_INDEX_DELETE'  => 'Realmente desea Borrar el �ndice %s?',
                  'CONFIRM_GEN_DELETE'    => 'Realmente desea Borrar el generador %s?',
                  'CONFIRM_USER_DELETE'   => 'Realmente desea Borrar el usu�rio %s?',
                  'CONFIRM_ROW_DELETE'    => 'Realmente desea Borrar la tabla %s %s?',
                  'CONFIRM_SP_DELETE'     => 'Realmente desea Borrar el stored procedure %s?',
                  'CONFIRM_VIEW_DELETE'   => 'Realmente desea Borrar la vista %s?',
                  'CONFIRM_UDF_DELETE'    => 'Realmente desea Borrar la funcion %s?',
                  'CONFIRM_EXC_DELETE'    => 'Do you really want to delete the exception %s?',
                  'NO_VIEW_SUPPORT'       => "Editar o borrar a partir de Viesta es posible actualmente.<br>\n",
                  'CREATE_DB_SUCCESS'     => "Base de Datos %s creada con suceso.\n",
                  'HAVE_DEPENDENCIES'     => 'Desea borrar los objetos secundarios antes de Borrar %1$s %2$s: %3$s',
                  'COOKIES_NEEDED'        => 'Necesita habilitar los cookies en su navegador Para utilizar esta opcion!'
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS'  => "Los campos Blob de la tabla que seleciono estan omitidos.<br>\n"
                                            ."Solamente esta soportado la exportaion de Blobs de tipo texto csv.<br>\n",
                  'CAN_NOT_IMPORT_BLOBS'  => "The blob fields in the table you have selected are omitted.<br>\n"
                                            ."Solo esta soportado la importacion de blob tipo texto csv.<br>\n",
                  'SELECT_TABLE_FIRST'    => "Por favor selecione una tabla primero<br>\n",
                  'SELECT_FILE_FIRST'     => "Por favor selecione un archivo de importacion<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "En Firebird no es posible modificar Columnas basadas en Dom�nios.<br>\n"
                                            ."Modifique el Dominio correspondiente desde la p�gina de Acess�rios.<br>\n",
                  'CAN_NOT_EDIT_TABLE'    => "La tabla seleccionada no se puede editar.<br>\n"
                                            ."Solo las tablas con claves primarias pueden editarse.<br>\n",
                  'CAN_NOT_DEL_TABLE'     => "Esta tabla no puede borrarse.<br>\n"
                                            ."Solo las tablas con Clave Primaria pueden borrarse<br>\n",
                  'DEL_NO_PERMISSON'      => "Usted no tiene permiso para Borrar/Editar la tabla %s<br>\n",
                  'EDIT_NO_PERMISSON'     => "Usted no tiene permiso para Borrar/Editar la tabla %s<br>\n",
                  'CAN_NOT_ACCESS_DIR'    => "No se puede accesar al directorio %s<br>\n",
                  'NAME_IS_KEYWORD'       => "%s Es una palabra reservada de Firebird<br>\n", 
                  'NAMES_ARE_KEYWORDS'    => "%s Son palabras reservadas de Firebird<br>\n",
                  'NEED_SYSDBA_PW'        => "La contrase�a de SYSDBA's es requerida para crear, modificar o Borrar usu�rios.<br>\n",
                  'PW_REQUIRED'           => "Contrase�a Requerida<br>\n",
                  'UN_REQUIRED'           => "Se requiere un nombre de usuario<br>\n",
                  'PW_WRONG_REPEAT'       => "La confirmacion de la contrase�a es Incorrecta<br>\n",
                  'BAD_ISQLPATH'          => "El ejecutable isql no est� instalado en %s!<br>\n"
                                            ."Por favor verifique el valor para BINPATH en inc/configuration.inc.php.<br>\n",
                  'BAD_TMPPATH'           => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n"
                  );

$ERRORS   = array('CREATE_DB_FAILED'      => 'Error intentando crear Base de Datos <b>%s</b> falhou!',
                  'NO_DB_SELECTED'        => 'Selecione un nombe de base de Datos primero!<br>',
                  'WRONG_DB_SUFFIX'       => 'Un nombre de Base de Datos debe ser terminado con <b>%s</b>',
                  'DB_NOT_ALLOWED'        => 'Acesso � <b>%s</b> no permitido.<br>'
                                             .'(verifique $ALLOWED_FILES e $ALLOWED_DIRS en inc/configuration.php)',
                  'NO_IBASE_MODULE'       => '<b>Su instalacion de php no suporta Firebird!</b><br>'
                                            .'Recompile el php y configure --with-interbase[=DIR]<br>'
                                            .'o modifique el arhivo php.ini para cargar interbase.so respectivamente interbase.dll.',
                  'DISABLED_CMD'          => 'Declaraciones Sql contienen "%s" estan prohibidas en la configuracion!',
                  'BAD_BINPATH'           => "No se encuentra la Linea de Comando <b>%s</b> !\n"
                                            ."Por favor verifique el valor para BINPATH em inc/configuration.inc.php.\n"
                  );

// charset encoding  for html output
$charset = 'iso-8859-1';

?>
