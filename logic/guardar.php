<?php
    include 'conexion.php';
    
    $tipoSolicitud  = $_POST['tipoSolicitud'] ?? "";
    $horarioContacto= $_POST['horarioContacto'] ?? "";

    if($tipoSolicitud == "cambiate_bitel"){
        $operadorProcedencia    = $_POST['operadorProcedencia'] ?? "";
        $modalidadActual        = $_POST['modalidadActual'] ?? "";
    } else {
        $operadorProcedencia    = "";
        $modalidadActual        = "";
    }

    $plan           = $_POST['plan'] ?? "";
    $celular        = $_POST['celular'] ?? "";
    $dni            = $_POST['dni'] ?? "";
    $nombreCompleto = $_POST['nombreCompleto'] ?? "";
    $correo         = $_POST['correo'] ?? "";
    $departamento   = castDepartamento($_POST['departamento'] ?? "");
    $provincia      = castProvincia($_POST['provincia'] ?? "");
    $distrito       = castDistrito($_POST['distrito'] ?? "");
    $direccion      = $_POST['direccion'] ?? "";

    try{
        $insertar = "INSERT INTO solicitud (tipoSolicitud, plan, celular, dni, nombreCompleto, correo, departamento, provincia, distrito, direccion, operadorProcedencia, modalidadActual, horarioContacto) VALUES ('$tipoSolicitud','$plan','$celular','$dni','$nombreCompleto','$correo','$departamento','$provincia','$distrito','$direccion', '$operadorProcedencia', '$modalidadActual', '$horarioContacto')";
        $query = mysqli_query($conectar, $insertar);

        $mensaje = (($query) ? "exito" : "error");
        
        header("Location: ../solicitud-de-servicio.php?m=$mensaje");

    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }

    function castDepartamento($variable){
        switch ($variable) {
            case 1: return "Amazonas"; break;
            case 2: return "Áncash"; break;
            case 3: return "Apurímac"; break;
            case 4: return "Arequipa"; break;
            case 5: return "Ayachucho"; break;
            case 6: return "Cajamarca"; break;
            case 7: return "Callao"; break;
            case 8: return "Cusco"; break;
            case 9: return "Huancavelica"; break;
            case 10: return "Huanuco"; break;
            case 11: return "Ica"; break;
            case 12: return "Junin"; break;
            case 13: return "La Libertad"; break;
            case 14: return "Lambayeque"; break;
            case 15: return "Lima"; break;
            case 16: return "Loreto"; break;
            case 17: return "Madre de Dios"; break;
            case 18: return "Moquegua"; break;
            case 19: return "Pasco"; break;
            case 20: return "Piura"; break;
            case 21: return "Puno"; break;
            case 22: return "San Martin"; break;
            case 23: return "Tacna"; break;
            case 24: return "Tumbes"; break;
            case 25: return "Ucayali"; break;
            
            default:
                return "";
                break;
        }
    }

    function castProvincia($variable){
        switch ($variable) {
            case 1: return "Chachapoyas"; break;
            case 2: return "Bagua"; break;
            case 3: return "Utcubamba"; break;

            case 4: return "Huaraz"; break;
            case 5: return "Asuncion"; break;
            case 6: return "Casma"; break;
            case 7: return "Huarmey"; break;
            case 8: return "Pomabamba"; break;
            case 9: return "Recuay"; break;
            case 10: return "Santa"; break;
            case 11: return "Yungay"; break;

            case 12: return "Abancay"; break;
            case 13: return "Andahuaylas"; break;
            case 14: return "Chincheros"; break;

            case 15: return "Arequipa"; break;
            case 16: return "Camana"; break;
            case 17: return "Caylloma"; break;
            case 18: return "Islay"; break;
            case 19: return "La union"; break;

            case 20: return "Huamanga"; break;
            case 21: return "Cangallo"; break;
            case 22: return "Huanta"; break;

            case 23: return "Cajamarca"; break;
            case 24: return "Cajabamba"; break;
            case 25: return "Chota"; break;
            case 26: return "Cutervo"; break;
            case 27: return "Jaen"; break;
            case 28: return "San Marcos"; break;

            case 29: return "Callao"; break;

            case 30: return "Cusco"; break;
            case 31: return "Calca"; break;
            case 32: return "Canchis"; break;
            case 33: return "Espinar"; break;
            case 34: return "La Convencion"; break;
            case 35: return "Quispicanchi"; break;

            case 36: return "Huancavelica"; break;
            case 37: return "Angares"; break;
            case 38: return "Taycaja"; break;

            case 39: return "Huanuco"; break;
            case 40: return "Leoncio Prado"; break;

            case 41: return "Ica"; break;
            case 42: return "Chincha"; break;
            case 43: return "Nazca"; break;
            case 44: return "Pisco"; break;

            case 45: return "Huancayo"; break;
            case 46: return "Concepcion"; break;
            case 47: return "Chanchamayo"; break;
            case 48: return "Jauja"; break;
            case 49: return "Satipo"; break;
            case 50: return "Tarma"; break;
            case 51: return "Yauli"; break;
            case 52: return "Chupaca"; break;

            case 53: return "Trujillo"; break;
            case 54: return "Chepen"; break;
            case 55: return "Julcan"; break;
            case 56: return "Otuzco"; break;
            case 57: return "Sanchez Carrion"; break;
            case 58: return "Viru"; break;

            case 59: return "Chiclayo"; break;
            case 60: return "Ferreñafe"; break;
            case 61: return "Lambayeque"; break;
            
            case 62: return "Lima"; break;
            case 63: return "Barranca"; break;
            case 64: return "Canta"; break;
            case 65: return "Huarochiri"; break;
            case 66: return "Huaraura"; break;
            case 67: return "Oyon"; break;
            
            case 68: return "Maynas"; break;
            case 69: return "Alto Amazonas"; break;

            case 70: return "Tambopata"; break;

            case 71: return "Mariscal Nieto"; break;
            case 72: return "Ilo"; break;

            case 73: return "Pasco"; break;
            case 74: return "Piura"; break;
            case 75: return "Ayabaca"; break;
            case 76: return "Morropon"; break;
            case 77: return "Palca"; break;
            case 78: return "Sullana"; break;
            case 79: return "Talara"; break;
            case 80: return "Sechura"; break;
            case 81: return "Puno"; break;
            case 82: return "Azangaro"; break;
            case 83: return "Carabaya"; break;
            case 84: return "Chucuito"; break;
            case 85: return "El Collao"; break;
            case 86: return "Huancane"; break;
            case 87: return "Melgar"; break;
            case 88: return "Santo Antonio de Putina"; break;
            case 89: return "San Roman"; break;
            case 90: return "Sandia"; break;
            case 91: return "Moyobamba"; break;
            case 92: return "Bellavista"; break;
            case 93: return "Mariscal Caceres"; break;
            case 94: return "San Martin"; break;
            case 95: return "Tocache"; break;
            case 96: return "Tacna"; break;
            case 97: return "Tumbes"; break;
            case 98: return "Zarumilla"; break;
            case 99: return "Coronel Portillo"; break;
            case 100: return "Padre Abad"; break;
            case 101: return "Purus"; break;

            default:
                return "";
                break;
        }
    }

    function castDistrito($variable){
        switch ($variable) {
            case 1: return "Chachapoyas"; break;
            // Campo 1
            case 1: return "Chachapoyas"; break;
            case 2: return "Soloco"; break;
            case 3: return "La Peca"; break;
            case 4: return "Bagua Grande"; break;
            case 5: return "Huaraz"; break;
            case 6: return "Independencia"; break;
            case 7: return "Chacas"; break;
            case 8: return "Casma"; break;
            case 9: return "Buena Vista Alta"; break;
            case 10: return "Comandante Noel"; break;
            case 11: return "Huarmey"; break;
            case 12: return "Pomabamba"; break;
            case 13: return "Recuay"; break;
            case 14: return "Catac"; break;
            case 15: return "Ticapampa"; break;
            case 16: return "Chimbote"; break;
            case 17: return "Coishco"; break;
            case 18: return "Santa"; break;
            case 19: return "Nuevo Chimbote"; break;
            case 20: return "Yungay"; break;
            case 21: return "Abancay"; break;
            case 22: return "Tamburco"; break;
            case 23: return "Andahuaylas"; break;
            case 24: return "San Jeronimo"; break;
            case 25: return "Talavera"; break;
            case 26: return "Chincheros"; break;
            case 27: return "Arequipa"; break;
            case 28: return "Alto Selva Alegre"; break;
            case 29: return "Cayma"; break;
            case 30: return "Cerro Colorado"; break;
            case 31: return "Characato"; break;
            case 32: return "Jacobo Hunter"; break;
            case 33: return "Mariano Melgar"; break;
            case 34: return "Miraflores"; break;
            case 35: return "Paucarpata"; break;
            case 36: return "Sabandia"; break;
            case 37: return "Sachaca"; break;
            case 38: return "Socabaya"; break;
            case 39: return "Tiabaya"; break;
            case 40: return "Yanahuara"; break;
            case 41: return "Yura"; break;
            case 42: return "Jose Luis Bustamante y Rivero"; break;
            case 43: return "Camana"; break;
            case 44: return "Jose Maria Quimper"; break;
            case 45: return "Mariscal Caceres"; break;
            case 46: return "Nicolas de Pierola"; break;
            case 47: return "Samuel Pastor"; break;
            case 48: return "Majes"; break;
            case 49: return "Mollendo"; break;
            case 50: return "Cocachacra"; break;
            case 51: return "Dean Valdivia"; break;
            case 52: return "Islay"; break;
            case 53: return "Mejia"; break;
            case 54: return "Punta de Bombon"; break;
            case 55: return "Cotahuasi"; break;
            case 56: return "Ayachucho"; break;
            case 57: return "Carmen Alto"; break;
            case 58: return "San Juan Bautista"; break;
            case 59: return "Jesus Nazareno"; break;
            case 60: return "Cangallo"; break;
            case 61: return "Huanta"; break;
            case 62: return "Luiricocha"; break;
            case 63: return "Cajamarca"; break;
            case 64: return "Cajabamba"; break;
            case 65: return "Chota"; break;
            case 66: return "Cutervo"; break;
            case 67: return "Jaen"; break;
            case 68: return "Pedro Galvez"; break;
            case 69: return "Callao"; break;
            case 70: return "Bellavista"; break;
            case 71: return "Carmen de la Leguia Reynoso"; break;
            case 72: return "La Perla"; break;
            case 73: return "La Punta"; break;
            case 74: return "Ventanilla"; break;
            case 75: return "Cusco"; break;
            case 76: return "San Jeronimo"; break;
            case 77: return "San Sebastian"; break;
            case 78: return "Santiago"; break;
            case 79: return "Wamchaq"; break;
            case 80: return "Calca"; break;
            case 81: return "Sicuani"; break;
            case 82: return "Santa Ana"; break;
            case 83: return "Pichari"; break;
            case 84: return "Urcos"; break;
            case 85: return "Urubamba"; break;
            case 86: return "Ollantaytambo"; break;
            case 87: return "Yucatay"; break;
            case 88: return "Huancavelica"; break;
            case 89: return "Ascencion"; break;
            case 90: return "Lircay"; break;
            case 91: return "Pampas"; break;
            case 92: return "Huanuco"; break;
            case 93: return "Amarillis"; break;
            case 94: return "Pilco Marca"; break;
            case 95: return "Rupa Rupa"; break;
            case 96: return "Ica"; break;
            case 97: return "La Tinguiña"; break;
            case 98: return "Los Aquijes"; break;
            case 99: return "Pachacutec"; break;
            case 100: return "Parcona"; break;
            case 101: return "Pueblo Nuevo"; break;
            case 102: return "Santiago"; break;
            case 103: return "Subtanjalla"; break;
            case 104: return "Tate"; break;
            case 105: return "Chincha Alta"; break;
            case 106: return "Chincha Baja"; break;
            case 107: return "Grocio Prado"; break;
            case 108: return "Pueblo Nuevo"; break;
            case 109: return "Sunampe"; break;
            case 110: return "Tambo de Mora"; break;
            case 111: return "Nazca"; break;
            case 112: return "Changuillo"; break;
            case 113: return "El Ingenio"; break;
            case 114: return "Vista Alegre"; break;
            case 115: return "Pisco"; break;
            case 116: return "Independencia"; break;
            case 117: return "Paracas"; break;
            case 118: return "San Andres"; break;
            case 119: return "San Clemente"; break;
            case 120: return "Tupac Amaru Inca"; break;
            case 121: return "Huancayo"; break;
            case 122: return "Chilca"; break;
            case 123: return "El Tambo"; break;
            case 124: return "Hualhuas"; break;
            case 125: return "Huancan"; break;
            case 126: return "Pilcomayo"; break;
            case 127: return "Quilcas"; break;
            case 128: return "San Agustin"; break;
            case 129: return "Concepcion"; break;
            case 130: return "Matahuasi"; break;
            case 131: return "Chanchamayo"; break;
            case 132: return "Pichanaqui"; break;
            case 133: return "San Ramón"; break;
            case 134: return "Jauja"; break;
            case 135: return "Acolla"; break;
            case 136: return "Ataura"; break;
            case 137: return "Huamali"; break;
            case 138: return "Muquiyauyo"; break;
            case 139: return "Yauyos"; break;
            case 140: return "Satipo"; break;
            case 141: return "Mazamari"; break;
            case 142: return "Pangoa"; break;
            case 143: return "Rio Negro"; break;
            case 144: return "Tarma"; break;
            case 145: return "Acobamba"; break;
            case 146: return "La unión"; break;
            case 147: return "La Oroya"; break;
            case 148: return "Santa Rosa de Sacco"; break;
            case 149: return "Chupaca"; break;
            case 150: return "Ahuac"; break;
            case 151: return "Huamancaca Chico"; break;
            case 152: return "Trujillo"; break;
            case 153: return "El Provenir"; break;
            case 154: return "Florencia de Mora"; break;
            case 155: return "Huanchaco"; break;
            case 156: return "La Esperanza"; break;
            case 157: return "Laredo"; break;
            case 158: return "Chepen"; break;
            case 159: return "Pachanga"; break;
            case 160: return "Pueblo Nuevo"; break;
            case 161: return "Julcan"; break;
            case 162: return "Cajamarca"; break;
            case 163: return "Carabamba"; break;
            case 164: return "Otuzco"; break;
            case 165: return "Huamachuco"; break;
            case 166: return "Viru"; break;
            case 167: return "Chao"; break;
            case 168: return "Chiclayo"; break;
            case 169: return "Jose Leonardo Ortiz"; break;
            case 170: return "La Vitoria"; break;
            case 171: return "Picsi"; break;
            case 172: return "Pimentel"; break;
            case 173: return "Santa Rosa"; break;
            case 174: return "Pomalca"; break;
            case 175: return "Ferreñafe"; break;
            case 176: return "Lambayeque"; break;
            case 177: return "Illimo"; break;
            case 178: return "Mochumi"; break;
            case 179: return "Morrope"; break;
            case 180: return "Pacora"; break;
            case 181: return "San Jose"; break;
            case 182: return "Tucume"; break;
            case 183: return "Lima"; break;
            case 184: return "Ate"; break;
            case 185: return "Barranco"; break;
            case 186: return "Breña"; break;
            case 187: return "Carabayllo"; break;
            case 188: return "Chorrillos"; break;
            case 189: return "Chomas"; break;
            case 190: return "El Agustino"; break;
            case 191: return "Idependencia"; break;
            case 192: return "Jesus Maria"; break;
            case 193: return "La Molina"; break;
            case 194: return "La Victoria"; break;
            case 195: return "Lince"; break;
            case 196: return "Los Olivos"; break;
            case 197: return "Magdalena Del Mar"; break;
            case 198: return "Pueblo Libre"; break;
            case 199: return "Miraflores"; break;
            case 200: return "Puente Piedra"; break;
            case 201: return "Rimac"; break;
            case 202: return "San Borja"; break;
            case 203: return "San Isidro"; break;
            case 204: return "San Juan de Lurigancho"; break;
            case 205: return "San Juan de Miraflores"; break;
            case 206: return "San Luis"; break;
            case 207: return "San Martin de Porres"; break;
            case 208: return "Barranca"; break;
            case 209: return "Paramonga"; break;
            case 210: return "Pativilca"; break;
            case 211: return "Supe"; break;
            case 212: return "Supe Puerto"; break;
            case 213: return "Santa"; break;
            case 214: return "Santa Eulalia"; break;
            case 215: return "Huacho"; break;
            case 216: return "Caleta de Carquin"; break;
            case 217: return "Hualmay"; break;
            case 218: return "Huaura"; break;
            case 219: return "Santa Victoria"; break;
            case 220: return "Vegueta"; break;
            case 221: return "Oyon"; break;
            case 222: return "Iquitos"; break;
            case 223: return "Punchana"; break;
            case 224: return "Belen"; break;
            case 225: return "San Juan Bautista"; break;
            case 226: return "Yurimaguas"; break;
            case 227: return "Tambopata"; break;
            case 228: return "Moquegua"; break;
            case 229: return "Samegua"; break;
            case 230: return "Ilo"; break;
            case 231: return "Pacocha"; break;
            case 232: return "Chaupimarca"; break;
            case 233: return "Simon Bolivar"; break;
            case 234: return "Yanacancha"; break;
            case 235: return "Veintiseis de Octubre"; break;
            case 236: return "Piura"; break;
            case 237: return "Castilla"; break;
            case 238: return "Catacaos"; break;
            case 239: return "Cura Mori"; break;
            case 240: return "El Talllan"; break;
            case 241: return "La Arena"; break;
            case 242: return "La Union"; break;
            case 243: return "Ayabaca"; break;
            case 244: return "Chulucanas"; break;
            case 245: return "Morropon"; break;
            case 246: return "Palta"; break;
            case 247: return "Sullana"; break;
            case 248: return "Bellavista"; break;
            case 249: return "Marcavelica"; break;
            case 250: return "Querecotillo"; break;
            case 251: return "Salitral"; break;
            case 252: return "El Alto"; break;
            case 253: return "Sechura"; break;
            case 254: return "Bellavista de la Union"; break;
            case 255: return "Bernal"; break;
            case 256: return "Cristo Nos Valga"; break;
            case 257: return "Vice"; break;
            case 258: return "Rinconada Llicuar"; break;
            case 259: return "Puno"; break;
            case 260: return "Azangaro"; break;
            case 261: return "Macusani"; break;
            case 262: return "Juli"; break;
            case 263: return "llave"; break;
            case 264: return "Huancane"; break;
            case 265: return "Ayaviri"; break;
            case 266: return "Putina"; break;
            case 267: return "Ananea"; break;
            case 268: return "Sina"; break;
            case 269: return "Juliaca"; break;
            case 270: return "Sandia"; break;
            case 271: return "Moyobamba"; break;
            case 272: return "Bellavista"; break;
            case 273: return "Juanjui"; break;
            case 274: return "Tarapoto"; break;
            case 275: return "La Banda de Shilcayo"; break;
            case 276: return "Morales"; break;
            case 277: return "Tocache"; break;
            case 278: return "Tacna"; break;
            case 279: return "Alto de la Alianza"; break;
            case 280: return "Ciudad Nueva"; break;
            case 281: return "Pocollay"; break;
            case 282: return "Coronel Gregorio Albarracin Lanchipa"; break;
            case 283: return "Tumbes"; break;
            case 284: return "Corrales"; break;
            case 285: return "Zarumilla"; break;
            case 286: return "Calleria"; break;
            case 287: return "Campoverde"; break;
            case 288: return "Yarinacocha"; break;
            case 289: return "Manantay"; break;
            case 290: return "Curimana"; break;
            case 291: return "Purus"; break;

            default:
                return "";
                break;
        }
    }

?>