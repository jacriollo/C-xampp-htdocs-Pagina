



<table class="table table-bordered">
    <thead>
    <tr><h1 align="center" class="display-6">Doctor: <?php echo $_SESSION['nom_per'];?><?php echo "     ";?><?php echo $_SESSION['ape_per'];?></h1></tr>
    <tr><h1 align="center" class="display-7">Especialista en: ##########</h1></tr>
    <tr><h1 align="center" class="display-6">Solicitud de exámenes</h1></tr>
    <tr><h1 align="left" class="col-9"><h3>Nombre del Paciente:</h3></h1></tr>
    <tr><h1 align="left" class="col-9"><h3>Fecha:   <?php $fechaActual = date('d-m-Y');   
            echo $fechaActual;
            ?></h3></h1></tr>
       <!-- <tr>         
            <th>############</th>
            <th>###########</th>
            <th>#############</th> 
                        
        </tr>--> 
    </thead>
    <tbody>
    <?php// foreach($registrar as $registra){?>
        <tr>                                                    
            <td><div><br>HEMATOLOGÍA</br></div> <div><input type="checkbox" name="cb-autos" value="gusta">     Biometría Hemática</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hb.</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hemocultivo</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hemocultivo HACEK</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hto</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Plaquetas</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Reticulocitos</div>
            <div><br>EMOSTASIA</br></div>
            </div><div><input type="checkbox" name="cb-autos" value="gusta">     Fibrinógeno</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     INR</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Tiempo de sangría</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     TP</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     TTP</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Test de Coombs directo</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Test de Coombs indirecto</div>
            <div><br>QUIMICA SANGUINEA</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Ásido úrico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Albúmina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Bilirrubina directa</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Bilirrubina indirecta</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Bilirrubina total</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Colesterol total</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Creatinina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Ferritina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Globulina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Glucosa</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Glucosa: Curva de tolerancia</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     HbA1c</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     HDL-Colesterol</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hierro sérico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Lactato deshidrogenasa</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     LDL-Colesterol</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Proteínas totales</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Saturación de hierro</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Transferrina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Triglicéridos</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Urea</div>
            <div><br>ELECTROLITOS</br></div>            
            <div><input type="checkbox" name="cb-autos" value="gusta">     Calcio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Fósforo<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Magnecio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Potacio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Sodio<br></div>                         
           
            </td>
             
            <td><div><br>ENZIMAS</br></div>            
            <div><input type="checkbox" name="cb-autos" value="gusta">     ALT(TGP)<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     AST(TGO)<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Amilasa<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CPK MB<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CPK total<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Fosfatasa ácida<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Fosfatasa alcalina<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Gamma. GT<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Lipasa<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Tropolina T (TNNT2)<br></div>
            <br>HORMONAL</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Cortisol am</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Cortisol pm</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     FSH</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     HCG beta</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Insulina sérica</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Péptido C</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Prolactina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     PTH</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     T3</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     T4</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     T4 libre</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     TSH</div>
            <br>INMUNOLOGÍA</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Ac. anti cardiolipina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Ac. Anti CCP (Ac. antipéptido cíclico)</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     ANA</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Anti DNA</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Anticoagulante lúpico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     ASTO</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     C3</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     C4</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     FR</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     PCR</div>
            <br>SEROLOGÍA</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Clamidia IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CMV IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Epstein-Barr IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     HBsAg</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Hepatitis A IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     HIV</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Reacción de Hudleson</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Reacción de Widal</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Rubeola IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Toxoplasma IGM</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Weil-Félix</div>
            </td>
          
            <td><div><br>GINECOLOGÍA</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Secreción vaginal: Cultivo</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Gram y Fresco</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     KOH</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Papanicolaou</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Secreción vaginal</div>
            <div><br>ORINA</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Albuminuria</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     BAAR de orina </div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Creatinina urinaria</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Crenocitos</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     EMO</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Proteinuria</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Radio Albúnina/Creatinina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Radio proteinas/Creatinina</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Test de embarazo</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Urocultivo</div>
            <div><br>HECES</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Antígeno H. Pylori</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Coprocultivo</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Coprológico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Coproparasitario</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Sangre oculta</div>
            <div><br>MARCADORES TUMORALES</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     AFP</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CA 125</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CA 15-3</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CA 19-9</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CEA</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     CYFRA</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     PSA</div>
            <div><br>LIQUIDOS CORPORALES</br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Líquido articular</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Líquido ascítico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Líquido pericárdico</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Líquido pleural</div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Orina</div>
            
            </td> 

            <!--<td><div><input type="checkbox" name="cb-autos" value="gusta">     Calcio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Fósforo<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Magnecio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Potacio<br></div>
            <div><input type="checkbox" name="cb-autos" value="gusta">     Sodio<br></div></td>-->                      
        </tr> 

       

       

               
        <?php //} ?>
    </tbody>
</table>