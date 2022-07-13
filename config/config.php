<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stubs Path
    |--------------------------------------------------------------------------
    El directorio de ruta de stubs para generar crud. 
    Puede configurar sus rutas de stubs aquí, lo que le permite personalizar los 
    propios stubs del modelo, controlador o vista. ¡O simplemente puede quedarse 
    con los valores predeterminados de CrudGenerator! 
    Ejemplo: 'stub_path' => resource_path('path/to/views/stubs/') 
    
    Predeterminado: "predeterminado"
    
    Default: "default"
    */
    /*
     |----------------------------------------------------------------- -------------------------
     | Ruta de stubs
     |----------------------------------------------------------------- -------------------------
     | El directorio de ruta de stubs para generar crud. Puede configurar su
     | rutas de stubs aquí, lo que le permite personalizar los propios stubs del
     | modelo, controlador o vista. ¡O simplemente puede quedarse con los valores predeterminados de CrudGenerator!
     | Ejemplo: 'stub_path' => resource_path('ruta/a/vistas/stubs/')
     | Predeterminado: "predeterminado"
     */
    'stub_path' => 'default',

    /*
     |----------------------------------------------------------------- -------------------------
     | Diseño de la aplicación
     |----------------------------------------------------------------- -------------------------
     | Este valor es el nombre del diseño de su aplicación. Este valor se utiliza al crear
     | vistas para crud. El valor predeterminado será "layouts.app".
     */

    'layout' => 'layouts.app',

    'model' => [
        'namespace' => 'App\Models',

        /*
         * Do not make these columns $fillable in Model or views
         */
        'unwantedColumns' => [
            'id',
            'password',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at',
            'deleted_at',
            'dominio',
            'borrado',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ],

    'controller' => [
        'namespace' => 'App\Http\Controllers',
    ],

];
