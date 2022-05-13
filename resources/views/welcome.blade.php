<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
    <link href="{{asset('css')}}" rel="stylesheet">


</head>
<body>
    <nav>
        <div class="contenido">Acceder</div>
        <div class="contenido">Platos</div>
        <div class="contenido">Canastas</div>
        <div><img src="logo.png"  class="logo" alt=""></div>
        <div class="contenido">Nuestros Productores</div>
        <div class="contenido">Calendario</div>
        <div class="contenido">Nosotros</div>
    </nav>
    <section>
        <div class="titulo">
            <p class="enlace">inicio > Mi cuenta > Platos</p>
        </div>
        <div class="formul">
            <div class="platos">
                <div class="menu">
                <h2>Platos</h2>
                <ul>
                    <li>Registro de platos</li>
                    <li>Visualiacion de platos</li>
                    <li>Actualizacion de platos</li>
                    <li>Eliminacion de platos</li>
                    <li>Cerrar Sesion</li>
                </ul>   
                </div>
            </div>
            <div class="regplatos">
                <div class="registro">
                    <div class="contenedor">
                        <h2>Registro de platos</h2>
                        <div class="contimagen">
                            <div class="imag"></div>
                            <span>Subir imagen</span>
                        </div>
                        <div class="entry">
                            <h3>Codigo de plato</h3>
                            <input type="text" class="codigo">
                        </div>
                        <div class="entry">
                            <h3>Nombre de plato</h3>
                            <input type="text" class="nombre">
                        </div>
                        <div class="entry">
                            <h3>Receta de plato</h3>
                            <textarea name="" id="" cols="30" rows="10" class="receta"></textarea>
                        </div>
                    </div>
               
                </div>
                <div class="ingredientes">
                    <div class="contenedor">
                        <h3>ingredientes de plato</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Lista de ingredientes del plato</th>
                                    <th></th>
                                    <th>Cantidad de gramos,kg,etc</th>
                                    <th class="tpr">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="separacion">
                                    <td><span>1</span><input type="text" class="listai" value="Papa amarilla"></td>
                                    <td></td>
                                    <td><input type="text" class="cantidadi" value="50 gramos"></td>
                                    <td class="centpre"><input type="text" class="precioi" value="s/. 0.30"></td>
                                </tr>
                                <tr>
                                    <td><span>2</span><input type="text" class="listai"></td>
                                    <td></td>
                                    <td><input type="text" class="cantidadi"></td>
                                    <td class="centpre"><input type="text" class="precioi"></td>
                                </tr>
                                <tr>
                                    <td><span>3</span><input type="text" class="listai"></td>
                                    <td></td>
                                    <td><input type="text" class="cantidadi"></td>
                                    <td class="centpre"><input type="text" class="precioi"></td>
                                </tr>
                                <tr>
                                    <td><span>4</span><input type="text" class="listai"></td>
                                    <td><div class="plusc"><span class="plus">+</span></div></td>
                                    <td><input type="text" class="cantidadi"></td>
                                    <td class="centpre"><input type="text" class="precioi"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="enviar">
                    <div class="botones">
                        <button>Agregar plato</button>
                        <button>Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>