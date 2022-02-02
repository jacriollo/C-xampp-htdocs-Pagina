


<table class="table table-bordered">

<thead>  
<tr><h1 align="center" class="display-6">Registrar Horarios a Médicos</h1></tr>
<?php //foreach($medicos as $medico){?>
<tr><th>Dr/Dra <?php //echo $medico->nom_per; ?></th></tr>
<?php// } ?>
    <tr>            
        <th>Dias</th>
        <th>Mañana</th>
        <th>Mañana</th>
        <th>Mañana</th>
        <th>Mañana</th>
        <th>Mañana</th>
        <th>Mañana</th>
        <th>Tarde</th>
        <th>Tarde</th>
        <th>Tarde</th>
        <th>Tarde</th>        
        <th>Acciones</th>
    </tr>        
</thead>    
<tbody>
<?php //foreach($usuarios as $usuario){?>
   
    <tr>
    <td><?php echo"Lunes";?></td>            
        <td><?php echo '<select name="h2" id="h2" class="custom-select" style="width:115px;">
                 <option value ="1">9:00 - 9:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo'<select name="h3" id="h3" class="custom-select" style="width:125px;">
                 <option value ="1">9:30 - 10:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h4" id="h4" class="custom-select" style="width: 135px;">
                 <option value ="1">10:00 - 10:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h5" id="h5" class="custom-select" style="width: 135px;">
                 <option value ="1">10:30 - 11:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:00 - 11:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:30 - 12:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:00 - 16:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:30 - 17:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>   
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:00 - 17:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:30 - 18:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
      
        <td>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 4rem;
                height: 2rem;
                border-radius: 2rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
    </body>
    </html>   
       </td>
    </tr>           
    <?php// } ?>

    <tr>
    <td><?php echo"Martes";?></td>            
        <td><?php echo '<select name="h2" id="h2" class="custom-select" style="width:115px;">
                 <option value ="1">9:00 - 9:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo'<select name="h3" id="h3" class="custom-select" style="width:125px;">
                 <option value ="1">9:30 - 10:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h4" id="h4" class="custom-select" style="width: 135px;">
                 <option value ="1">10:00 - 10:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h5" id="h5" class="custom-select" style="width: 135px;">
                 <option value ="1">10:30 - 11:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:00 - 11:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:30 - 12:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:00 - 16:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:30 - 17:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>   
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:00 - 17:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:30 - 18:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
      
        <td>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 4rem;
                height: 2rem;
                border-radius: 2rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
    </body>
    </html>   
       </td>
    </tr> 


    <tr>
    <td><?php echo"Miercoles";?></td>            
        <td><?php echo '<select name="h2" id="h2" class="custom-select" style="width:115px;">
                 <option value ="1">9:00 - 9:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo'<select name="h3" id="h3" class="custom-select" style="width:125px;">
                 <option value ="1">9:30 - 10:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h4" id="h4" class="custom-select" style="width: 135px;">
                 <option value ="1">10:00 - 10:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h5" id="h5" class="custom-select" style="width: 135px;">
                 <option value ="1">10:30 - 11:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:00 - 11:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:30 - 12:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:00 - 16:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:30 - 17:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>   
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:00 - 17:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:30 - 18:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
      
        <td>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 4rem;
                height: 2rem;
                border-radius: 2rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
    </body>
    </html>   
       </td>
    </tr> 

    <tr>
    <td><?php echo"Jueves";?></td>            
        <td><?php echo '<select name="h2" id="h2" class="custom-select" style="width:115px;">
                 <option value ="1">9:00 - 9:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo'<select name="h3" id="h3" class="custom-select" style="width:125px;">
                 <option value ="1">9:30 - 10:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h4" id="h4" class="custom-select" style="width: 135px;">
                 <option value ="1">10:00 - 10:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h5" id="h5" class="custom-select" style="width: 135px;">
                 <option value ="1">10:30 - 11:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:00 - 11:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:30 - 12:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:00 - 16:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:30 - 17:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>   
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:00 - 17:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:30 - 18:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
      
        <td>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 4rem;
                height: 2rem;
                border-radius: 2rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
    </body>
    </html>   
       </td>
    </tr> 


    <tr>
    <td><?php echo"Viernes";?></td>            
        <td><?php echo '<select name="h2" id="h2" class="custom-select" style="width:115px;">
                 <option value ="1">9:00 - 9:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo'<select name="h3" id="h3" class="custom-select" style="width:125px;">
                 <option value ="1">9:30 - 10:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h4" id="h4" class="custom-select" style="width: 135px;">
                 <option value ="1">10:00 - 10:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php echo '<select name="h5" id="h5" class="custom-select" style="width: 135px;">
                 <option value ="1">10:30 - 11:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:00 - 11:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">11:30 - 12:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:00 - 16:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">16:30 - 17:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>   
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:00 - 17:30</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
        <td><?php  echo '<select name="h6" id="h6" class="custom-select" style="width: 135px;">
                 <option value ="1">17:30 - 18:00</option>
                 <option value ="2">Ocupado</option>                                              
                 </select>'; ?></td>  
      
        <td>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 4rem;
                height: 2rem;
                border-radius: 2rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 2rem;
                height: 2rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
    </body>
    </html>   
       </td>
    </tr> 


 
</tbody>
</table>
