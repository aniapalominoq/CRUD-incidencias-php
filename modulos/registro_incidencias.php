<?php
$seccionActual = "incidencias"; // Sección predeterminada al cargar la página
if (isset($_GET['seccion'])){
$seccionActual = $_GET['seccion'];
}
?>
<section class="addIncidents__container">
    <header>Registrar Nueva incidencia</header>
    <section class="addIncidents__form-outer">
        <form action="" class="addIncidents__form">
            <!-- page one -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 1:</div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <button>Siguiente</button>
                </div>
            </div>
            <!-- page two -->
             <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 2:</div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field btns">
                    <button class="prev-1 prev">Atras</button>
                    <button class="nex-1 next">Siguiente</button>
                </div>
            </div>
            <!-- page 3 -->
            <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 3:</div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field btns">
                    <button class="prev-2 prev">Atras</button>
                    <button class="nex-2 next">Siguiente</button>
                </div>
            </div>
            <!-- page 4 -->
             <div class="addIncidents__form-page">
                <div class="addIncidents__form-title">page 4:</div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field">
                    <label for="" class="addIncidents__form-label"></label>
                    <input type="text" class="addIncidents__form-input">
                </div>
                <div class="addIncidents__form-field btns">
                    <button class="prev-3 prev">Atras</button>
                    <button class="submit">Guardar</button>
                </div>
            </div>
             
        </form>
    </section>
   </section>

    
