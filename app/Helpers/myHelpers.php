<?php
function obtenerNombreCategory($id) {
    return \App\Models\Category::findOrFail($id)->title;
}

function obtenerDisponibilidad($option) {
    return $option?'SI':'NO';
}
