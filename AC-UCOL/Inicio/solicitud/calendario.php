<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Calendario</title>


<script>
$(function () {
$("#datepicker").datepicker({
firstDay: 1,
monthNames: ['Enero', 'Febrero', 'Marzo',
'Abril', 'Mayo', 'Junio',
'Julio', 'Agosto', 'Septiembre',
'Octubre', 'Noviembre', 'Diciembre'],
dayNamesMin: ['Do.', 'Lun.', 'Ma.', 'Mi.', 'Ju.', 'Vi.', 'Sa.']
});
});




</script>
</head>

<body>

<div id="datepicker" style=" padding: 0em; margin: 12em  10em 40em;  width: 300px"></div>
</body>
</html>