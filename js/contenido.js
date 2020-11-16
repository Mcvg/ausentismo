var x;
x=$(document);
x.ready(inicio);

function inicio(){
	var x;
	x=$("a");
	x.click(muestrame);
}

function muestrame(){
	var pagina=$(this).attr("href");
	var x=$("#contenido");
	x.load(pagina);
	return false;
}

var y;
y=$(document);
y.ready(cargar_datos);

function cargar_datos(){
	Consultar_Sedes();
}

var c;
c=$(document);
c.ready(cargar_Datos_Causas);

function cargar_Datos_Causas(){
	Consultar_Causas();
}

var perfil;
perfil=$(document);
perfil.ready(table_cargar_perfiles);

function table_cargar_perfiles(){
	Consultar_Perfil();
}


var perfil_combo;
perfil_combo=$(document);
perfil_combo.ready(combo_cargar_pefiles);

function combo_cargar_pefiles(){
	Consultar_Perfil_Combo();
}

var instituciones_combo;
instituciones_combo=$(document);
instituciones_combo.ready(combo_cargar_instituciones);

function combo_cargar_instituciones(){
	Consultar_Instituciones_Combo();
}


