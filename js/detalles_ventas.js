// Array para almacenar los detalles de ventas
let detallesVentas = [];

// Función para agregar un detalle de venta
function agregarDetalleVenta(event) {
  event.preventDefault();

  const idDetalleV = parseInt(document.getElementById('idDetalleV').value);
  const cantidad = parseFloat(document.getElementById('cantidad').value);
  const formaPago = document.getElementById('formaPago').value;
  const impuestos = parseFloat(document.getElementById('impuestos').value);
  const precio = parseFloat(document.getElementById('precio').value);
  const idVenta = parseInt(document.getElementById('idVenta').value);

  const detalleVenta = {
    idDetalleV: idDetalleV,
    cantidad: cantidad,
    formaPago: formaPago,
    impuestos: impuestos,
    precio: precio,
    idVenta: idVenta
  };

  detallesVentas.push(detalleVenta);

  // Limpiar el formulario
  document.getElementById('detalleVentasForm').reset();

  // Mostrar los detalles de ventas en la tabla
  mostrarDetallesVentas();
}

// Función para eliminar un detalle de venta
function eliminarDetalleVenta(idDetalleV) {
  detallesVentas = detallesVentas.filter(detalle => detalle.idDetalleV !== idDetalleV);
  mostrarDetallesVentas();
}

// Función para mostrar los detalles de ventas en la tabla
function mostrarDetallesVentas() {
  const detalleVentasTableBody = document.querySelector('#detalleVentasTable tbody');
  detalleVentasTableBody.innerHTML = '';

  detallesVentas.forEach(detalleVenta => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${detalleVenta.idDetalleV}</td>
      <td>${detalleVenta.cantidad}</td>
      <td>${detalleVenta.formaPago}</td>
      <td>${detalleVenta.impuestos}</td>
      <td>${detalleVenta.precio}</td>
      <td>${detalleVenta.idVenta}</td>
      <td>
        <button type="button" onclick="eliminarDetalleVenta(${detalleVenta.idDetalleV})">Eliminar</button>
      </td>
    `;
    detalleVentasTableBody.appendChild(row);
  });
}

// Evento para agregar detalles de ventas
document.getElementById('detalleVentasForm').addEventListener('submit', agregarDetalleVenta);
