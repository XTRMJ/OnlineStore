<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<section id="container-carrito-compras">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="carrito-compras-tienda"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
                    <i class="fa fa-shopping-cart"></i>
                </p>
                <p class="text-center">
                    <a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar"></i>   Confirmar pedido</a>
                    <a href="process/vaciarcarrito.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>   Vaciar carrito</a> 
                </p>
            </div>
        </div>
    </div>
</section>
<nav id="navbar-auto-hidden">
        <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
            <div class="col-xs-2" style="margin-left: 2%;margin-right:14%;margin-top:1%;">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.47 139.09"><defs><style>.cls-1{font-size:89px;}.cls-1,.cls-5{fill: #fff;},.cls-6{fill:#1b1464;}.cls-1,.cls-5{font-family:Bauhaus93, "Bauhaus 93";}.cls-2{font-size:84px;font-family:Arial Rounded MT;}.cls-3{fill:none;stroke-width:13px;}.cls-3,.cls-8{stroke:#fff;stroke-miterlimit:10;}.cls-4{fill:#666;}.cls-5{font-size:16px;}.cls-7{fill:#fff;}.cls-8{stroke-width:3px;}</style></defs><title>latinox-vectores-logo</title><text class="cls-1" transform="translate(66.77 111.59)">LATI<tspan class="cls-2" x="157.84" y="0">N</tspan><tspan x="221.66" y="0">O</tspan></text><g id="x"><path class="cls-3" d="M488,141.33c-12.88-.36-23.54,9.6-24.22,21.53-.73,12.86,10.31,24.54,24.22,24.21" transform="translate(-79.53 -81.8)"/><path class="cls-3" d="M439.58,187c12.84.35,23.47-9.58,24.15-21.49.74-12.82-10.28-24.48-24.15-24.15" transform="translate(-79.53 -81.8)"/></g><rect class="cls-4" x="66.76" y="23.61" width="341.74" height="15.43"/><rect class="cls-4" x="66.76" width="341.74" height="10"/><text class="cls-5" transform="translate(0 133.02)">LATINOAMERICANA DE ACEROS INOXIDABLES, S.A. DE C.V,</text><path class="cls-6" d="M139,117v3.28l-13.16-.78-.94,18.12c.37,0,.6.06.84.06h12.55a5.51,5.51,0,0,0,.71-.09v3.64l-12.83-.09c-.77,0-1.11.29-1,1.09.1,1.24.18,2.48.21,3.72,0,.55.26.74.73,1a21.8,21.8,0,0,1,3.4,1.84c1.56,1.11,1.46,1.17.85,3-.44,1.3-.74,2.65-1.1,3.94l9.79-.4v3.28c-1.42.06-2.85,0-4.26.21-2.55.32-5.27-.22-7.56,1.52-.41.31-.65.51-.55,1.06.38,2.11.69,4.24,1.09,6.35a63,63,0,0,0,5.42,17,11,11,0,0,0,3.68,4.53,8.55,8.55,0,0,0,2.18.69v3.65h-2.73a4,4,0,0,0-.68-.16,52,52,0,0,1-22.17-6.13c-16.92-9.2-26.8-23.39-29.65-42.44-.2-1.37-.35-2.74-.52-4.11v-6.74c.2-1.49.36-3,.6-4.47A55,55,0,0,1,104,94.39a53.54,53.54,0,0,1,27.5-11.9c1.55-.2,3.09-.45,4.64-.68H139v3.64a8.22,8.22,0,0,0-2.09.74,11.15,11.15,0,0,0-2.2,2.14,27.58,27.58,0,0,0-4.09,8.34,6.93,6.93,0,0,0,1.77.62c1.91.13,3.84.47,5.71-.29a3,3,0,0,1,.9-.07v8.2c-1.51.67-3,1.32-4.53,2a2.07,2.07,0,0,0-.73.9,1.58,1.58,0,0,1-1.46.89,2.49,2.49,0,0,1-2.57-3.52c.36-1,.84-1.88,1.29-2.8a.89.89,0,0,0-.47-1.4c-.37-.16-.76-.29-1.15-.44a3.9,3.9,0,0,0-.2.53q-1.35,6.83-2.69,13.64c-.13.66.18,1,.82,1ZM96.25,167.42l7.1-4c1.46-.84,1.45-.87.93-2.51a74.49,74.49,0,0,1-3.31-18.3c-.08-1.32-.19-1.47-1.48-1.46q-5.88,0-11.74.06a5.23,5.23,0,0,0-.69.08A52.93,52.93,0,0,0,96.25,167.42Zm8.63-31.3c.85.19,1.93.17,2.25,1.38,0,.08.32.14.48.14,4.47,0,8.93,0,13.39,0,.48,0,.64-.2.65-.65,0-.7.07-1.39.11-2.09q.43-7.68.86-15.35c0-1-.17-1.16-1.1-.89a8.7,8.7,0,0,0-1.65.45,13.35,13.35,0,0,0-1.89,1.28c-.46.32-.83.86-1.33,1a3.45,3.45,0,0,0-2.35,2.31,3.22,3.22,0,0,1-1.33,1.63,4.87,4.87,0,0,0-3,4.89c0,.63-.24,1-1,.92-.16-.35-.35-.73-.49-1.12-.57-1.68-.56-1.68-2.41-1.59-.24,0-.48,0-.72,0-.55,0-.75.27-.78.77-.08,1.31-.18,2.61-.27,3.91,0,0,.06.09.09.14l1,.08Zm4.27,28.3a54.26,54.26,0,0,0,4.73,9.35c3.6,5.65,8.08,10.38,14.1,13.49,1,.54,2.16,1,3.24,1.41-3.92-7.06-5.8-14.64-7.23-22.73a11.28,11.28,0,0,0-2,2.38,4.69,4.69,0,0,1-1.39,1.92,3.22,3.22,0,0,0-1.11,1.54,12.94,12.94,0,0,0-.11,2.72,4.72,4.72,0,0,0,1.25,3.32,7.05,7.05,0,0,1,.59.85,3.17,3.17,0,0,1-3.83-1.1c-.66-.86-1.27-1.77-1.89-2.67a6,6,0,0,1-1.06-3.6,7.49,7.49,0,0,0-.69-3.61,7.12,7.12,0,0,1-.52-2.37,21.44,21.44,0,0,1,0-2.43Zm-3.18,1.3c-.26.13-.45.2-.63.31-2,1.24-4.08,2.5-6.14,3.71-.68.4-.72.7-.21,1.31a52.9,52.9,0,0,0,20,14.73c.25.11.52.19.78.28C113.47,180.43,109.24,173.43,106,165.72ZM93.32,114.14,93,114a14.09,14.09,0,0,0-1.17,1.72,49.81,49.81,0,0,0-4.66,17c-.15,1.62-.18,3.25-.27,4.87H100.6a2.08,2.08,0,0,0-.9-.38c-1.8-.57-3.46-1.21-3.8-3.48a5.83,5.83,0,0,0-2.05-3.51l.5,3a2.89,2.89,0,0,1-2.76-3.09,9.16,9.16,0,0,0-1-4.64,2.49,2.49,0,0,1,0-2.77,13.7,13.7,0,0,0,2.28-5.88Zm20.5-12.37c.55-.18,1-.29,1.34-.43a.83.83,0,0,0,.39-.25c.55-1,2.44-1.18,3.06-.24a2.12,2.12,0,0,0,2.18.93c1.62-.1,3.2-.22,4.45,1.29l1-4a9.26,9.26,0,0,0-2.71,1.2c-1.34,1.29-2.8.91-4.27.66-.51-.08-.92-.47-.46-1.12.1-.14,0-.44-.07-.73l.65-.3a2,2,0,0,0,2.43.41,8.18,8.18,0,0,1-1-.41,2,2,0,0,1-.46-.46,2,2,0,0,1,.52-.26c1.73-.31,3.46-.65,5.2-.85.72-.09.92-.41,1.15-1,1-2.41,2-4.81,3-7.2.3-.7.72-1.36,1.19-2.23C123.65,89.72,118.1,94.9,113.82,101.77Zm5.94-12.4c-7.92,2.88-14.31,7.9-19.91,14.21l.4.09c2.2.18,4.4.37,6.61.5.23,0,.49-.37.74-.58-1.68.18-1.84.12-2.27-1a3.21,3.21,0,0,0,.94-.48,2.8,2.8,0,0,1,3.26-.63c.18.07.45-.11.67-.17l-.06-.26-1.55-.79c.86-.33,1.6-.6,2.32-.9a1.53,1.53,0,0,0,.7-.47A51.44,51.44,0,0,1,119.76,89.37Zm-6.62,70a4.3,4.3,0,0,0-2.08-3.58,21.31,21.31,0,0,1-2.18-1.63c-1.55-1.23-1.54-1.26-1-3.14.09-.3.13-.79,0-1a2.84,2.84,0,0,1,.14-3.95,2.54,2.54,0,0,0,.56-1.11c.26-1.24.44-2.49.65-3.72h-4.85A68.35,68.35,0,0,0,107.89,161Zm6.31-52.4c.23-.13.38-.22.54-.29a12.75,12.75,0,0,0,1.61-.81c.34-.24,1-.53.52-1.13s-.94-.37-1.33,0a11.55,11.55,0,0,0-1.45,1.83,1.85,1.85,0,0,1-2.32,1l-.06-.69c-1.38.54-2.71,1-4,1.57a3.39,3.39,0,0,0-.91.59c-.67.57-.73,1.13-.06,1.67a15.73,15.73,0,0,0,2.15,1.33c1.75,1,2.59,0,3.51-1.23a3.74,3.74,0,0,0,.34-.73,3.6,3.6,0,0,1,3-2.33Zm-5.86-4.38-.41,2.16a7.6,7.6,0,0,0,1.35,0,1.24,1.24,0,0,0,.63-.47c.33-.44.56-1,.91-1.36a8.67,8.67,0,0,1,1-.89c-.53,0-1.14-.49-1.35.32,0,.11-.42.17-.65.19C114.61,102.57,114.13,102.58,113.59,102.6Zm8.11,40.54-.17-1.86h-3Zm2-34.14-2.3-1.06c.19.46.29.77.43,1s.32.62.52,1Zm-22.38,21a2.92,2.92,0,0,0-.32,3.42ZM117,106l.25.07c1-1.83,1-1.83.53-2.52Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M139,189.85a8.55,8.55,0,0,1-2.18-.69,11,11,0,0,1-3.68-4.53,63,63,0,0,1-5.42-17c-.4-2.11-.71-4.24-1.09-6.35-.1-.55.14-.75.55-1.06,2.29-1.74,5-1.2,7.56-1.52,1.41-.18,2.84-.15,4.26-.21Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M139,137.56a5.51,5.51,0,0,1-.71.09H125.78c-.24,0-.47,0-.84-.06l.94-18.12,13.16.78Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M139,155.23l-9.79.4c.36-1.29.66-2.64,1.1-3.94.61-1.8.71-1.86-.85-3a21.8,21.8,0,0,0-3.4-1.84c-.47-.22-.72-.41-.73-1,0-1.24-.11-2.48-.21-3.72-.06-.8.28-1.1,1-1.09l12.83.09Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M139,117l-11.69-1c-.64,0-.95-.35-.82-1q1.35-6.82,2.69-13.64a3.9,3.9,0,0,1,.2-.53c.39.15.78.28,1.15.44a.89.89,0,0,1,.47,1.4c-.45.92-.93,1.84-1.29,2.8a2.49,2.49,0,0,0,2.57,3.52,1.58,1.58,0,0,0,1.46-.89,2.07,2.07,0,0,1,.73-.9c1.49-.72,3-1.37,4.53-2Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M139,96.93a3,3,0,0,0-.9.07c-1.87.76-3.8.42-5.71.29a6.93,6.93,0,0,1-1.77-.62,27.58,27.58,0,0,1,4.09-8.34,11.15,11.15,0,0,1,2.2-2.14,8.22,8.22,0,0,1,2.09-.74Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M96.25,167.42a52.93,52.93,0,0,1-9.19-26.16,5.23,5.23,0,0,1,.69-.08q5.86,0,11.74-.06c1.29,0,1.4.14,1.48,1.46a74.49,74.49,0,0,0,3.31,18.3c.52,1.64.53,1.67-.93,2.51Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M104.88,136.12l.59-2.74-1-.08c0-.05-.1-.1-.09-.14.09-1.3.19-2.6.27-3.91,0-.5.23-.79.78-.77.24,0,.48,0,.72,0,1.85-.09,1.84-.09,2.41,1.59.14.39.33.77.49,1.12.73,0,1-.29,1-.92a4.87,4.87,0,0,1,3-4.89,3.22,3.22,0,0,0,1.33-1.63,3.45,3.45,0,0,1,2.35-2.31c.5-.14.87-.68,1.33-1a13.35,13.35,0,0,1,1.89-1.28,8.7,8.7,0,0,1,1.65-.45c.93-.27,1.15-.11,1.1.89q-.42,7.68-.86,15.35c0,.7-.09,1.39-.11,2.09,0,.45-.17.65-.65.65-4.46,0-8.92,0-13.39,0-.16,0-.46-.06-.48-.14C106.81,136.29,105.73,136.31,104.88,136.12Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M109.15,164.42l4-1.53a21.44,21.44,0,0,0,0,2.43,7.12,7.12,0,0,0,.52,2.37,7.49,7.49,0,0,1,.69,3.61,6,6,0,0,0,1.06,3.6c.62.9,1.23,1.81,1.89,2.67a3.17,3.17,0,0,0,3.83,1.1,7.05,7.05,0,0,0-.59-.85,4.72,4.72,0,0,1-1.25-3.32,12.94,12.94,0,0,1,.11-2.72,3.22,3.22,0,0,1,1.11-1.54,4.69,4.69,0,0,0,1.39-1.92,11.28,11.28,0,0,1,2-2.38c1.43,8.09,3.31,15.67,7.23,22.73-1.08-.46-2.2-.87-3.24-1.41-6-3.11-10.5-7.84-14.1-13.49A54.26,54.26,0,0,1,109.15,164.42Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M106,165.72c3.27,7.71,7.5,14.71,13.82,20.34-.26-.09-.53-.17-.78-.28a52.9,52.9,0,0,1-20-14.73c-.51-.61-.47-.91.21-1.31,2.06-1.21,4.1-2.47,6.14-3.71C105.52,165.92,105.71,165.85,106,165.72Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M93.32,114.14l-.45,2.69a13.7,13.7,0,0,1-2.28,5.88,2.49,2.49,0,0,0,0,2.77,9.16,9.16,0,0,1,1,4.64,2.89,2.89,0,0,0,2.76,3.09l-.5-3a5.83,5.83,0,0,1,2.05,3.51c.34,2.27,2,2.91,3.8,3.48a2.08,2.08,0,0,1,.9.38H86.89c.09-1.62.12-3.25.27-4.87a49.81,49.81,0,0,1,4.66-17A14.09,14.09,0,0,1,93,114Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M113.82,101.77c4.28-6.87,9.83-12,17.6-15-.47.87-.89,1.53-1.19,2.23-1,2.39-2.06,4.79-3,7.2-.23.59-.43.91-1.15,1-1.74.2-3.47.54-5.2.85a2,2,0,0,0-.52.26,2,2,0,0,0,.46.46,8.18,8.18,0,0,0,1,.41,2,2,0,0,1-2.43-.41l-.65.3c0,.29.17.59.07.73-.46.65,0,1,.46,1.12,1.47.25,2.93.63,4.27-.66a9.26,9.26,0,0,1,2.71-1.2l-1,4c-1.25-1.51-2.83-1.39-4.45-1.29a2.12,2.12,0,0,1-2.18-.93c-.62-.94-2.51-.71-3.06.24a.83.83,0,0,1-.39.25C114.77,101.48,114.37,101.59,113.82,101.77Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M119.76,89.37a51.44,51.44,0,0,0-8.15,9.53,1.53,1.53,0,0,1-.7.47c-.72.3-1.46.57-2.32.9l1.55.79.06.26c-.22.06-.49.24-.67.17a2.8,2.8,0,0,0-3.26.63,3.21,3.21,0,0,1-.94.48c.43,1.11.59,1.17,2.27,1-.25.21-.51.59-.74.58-2.21-.13-4.41-.32-6.61-.5l-.4-.09C105.45,97.27,111.84,92.25,119.76,89.37Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M113.14,159.38,107.89,161a68.35,68.35,0,0,1-3.51-19.69h4.85c-.21,1.23-.39,2.48-.65,3.72a2.54,2.54,0,0,1-.56,1.11,2.84,2.84,0,0,0-.14,3.95c.17.18.13.67,0,1-.58,1.88-.59,1.91,1,3.14a21.31,21.31,0,0,0,2.18,1.63A4.3,4.3,0,0,1,113.14,159.38Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M119.45,107l1.52.81a3.6,3.6,0,0,0-3,2.33,3.74,3.74,0,0,1-.34.73c-.92,1.24-1.76,2.26-3.51,1.23a15.73,15.73,0,0,1-2.15-1.33c-.67-.54-.61-1.1.06-1.67a3.39,3.39,0,0,1,.91-.59c1.31-.53,2.64-1,4-1.57l.06.69a1.85,1.85,0,0,0,2.32-1,11.55,11.55,0,0,1,1.45-1.83c.39-.41.93-.58,1.33,0s-.18.89-.52,1.13a12.75,12.75,0,0,1-1.61.81C119.83,106.76,119.68,106.85,119.45,107Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M113.59,102.6c.54,0,1,0,1.5-.07.23,0,.62-.08.65-.19.21-.81.82-.34,1.35-.32a8.67,8.67,0,0,0-1,.89c-.35.41-.58.92-.91,1.36a1.24,1.24,0,0,1-.63.47,7.6,7.6,0,0,1-1.35,0Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M121.7,143.14l-3.17-1.86h3Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M123.7,109l-1.35,1c-.2-.35-.37-.65-.52-1s-.24-.59-.43-1Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M101.32,130l-.32,3.42A2.92,2.92,0,0,1,101.32,130Z" transform="translate(-79.53 -81.8)"/><path class="cls-7" d="M117,106l.78-2.45c.48.69.48.69-.53,2.52Z" transform="translate(-79.53 -81.8)"/><line class="cls-8" x1="59.51" x2="59.51" y2="111.7"/></svg>
            </div>
            <div class="col-xs-8">
                <div class="contenedor-tabla pull-right">
                    <div class="contenedor-tr">
                        <a href="index.php" class="table-cell-td">Inicio</a>
                        <a href="product.php" class="table-cell-td">Productos</a>
                        <?php
                            if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
                                    <a href="configAdmin.php" class="table-cell-td">Administración</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                    </a>
                                 ';
                            }else if(!$_SESSION['nombreUser']==""){
                                echo ' 
                                    <a href="pedido.php" class="table-cell-td">Pedido</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                                    </a>
                                 ';
                            }else{
                                echo ' 
                                    <a href="registration.php" class="table-cell-td">Registro</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                                    </a>
                                 ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs"><!-- Mobile menu navbar -->
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                    <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú
                </button>
                <a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                    <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <?php
                if(!$_SESSION['nombreAdmin']==""){echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreAdmin'].' 
                    </a>';
                }else if(!$_SESSION['nombreUser']==""){
                    echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreUser'].' 
                    </a>';
                }else{
                    echo '
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">
                        <i class="fa fa-user"></i>&nbsp; Iniciar Sesión
                        </a> 
                   ';
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- Modal login -->
    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión en Latinox</h4>
                </div>
            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>

                  <p>¿Cómo iniciaras sesión?</p>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        Usuario
                    </label>
                 </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2">
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
    <!-- Fin Modal login -->
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <br>
        <h3 class="text-center tittles-pages-logo">Latinox</h3>
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="product.php">Productos</a></li>
            <?php 
                if(!$_SESSION['nombreAdmin']==""){
                    echo '<li><a href="configAdmin.php">Administración</a></li>';
                }elseif(!$_SESSION['nombreUser']==""){
                    echo '<li><a href="pedido.php">Pedido</a></li>';
                }else{
                    echo '<li><a href="registration.php">Registro</a></li>';
                }
            ?>
        </ul>
    </div>
    <!-- Modal carrito -->
    <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>
    <!-- Fin Modal carrito -->
    
    <!-- Modal logout -->
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->