fetch("php/calendario.php")
  .then((res) => res.json())
  .then((res) => {

    // console.log(res);

    $("#calendar").fullCalendar({
      header: {
        left: "prev,next today",
        center: "title",
        right: "listYear,month,agendaWeek,agendaDay",
      },
      defaultView: 'month',
      editable: true,
      eventClick: function (id) {
        $("#ModalEventos").modal();
        $("#cliente_orden").val(id.cliente)
        $("#servicio_orden").val(id.title)
        $("#estado_orden").val(id.estado)
        $("#cantidad_orden").val(id.cantidad)
      },
      events: res,
    });
  });

async function calcular() {
  let fechaI = $('#fechaI').val();
  let fechaF = $('#fechaF').val();

  let data = new FormData();

  data.append('fechai', fechaI);
  data.append('fechaf', fechaF);

  let req = await fetch('php/total_residuos.php', {
    method: 'POST',
    body: data
  });

  let res = await req.json();

  $('#resultado').val(res.total);

  // console.log(res);
}