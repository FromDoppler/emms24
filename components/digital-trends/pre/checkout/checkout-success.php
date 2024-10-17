<div class="emms__checkout">

    <!-- Form -->
    <div class="emms__checkout__container emms__checkout__card__container--form emms__fade-in">
        <div class="emms__checkout__card">
            <section id="success" class="hidden">
                <div class="emms__checkout__container emms__checkout__card__container--success emms__fade-in">
                    <div class="emms__checkout__card">
                        <div class="emms__checkout__card__main">
                            <h2>¡Felicitaciones adquiriste con éxito tus entradas VIP!</h2>
                            <h3>Accedes a todos estos beneficio del evento:</h3>
                            <ul class="emms__checkout__card__main__list">
                                <li>Cápsulas</li>
                                <li>Cursos</li>
                                <li>Promociones</li>
                                <li>Infografías</li>
                                <li>Guías</li>
                                <li>E-books</li>
                            </ul>
                        </div>
                        <div class="emms__checkout__card__aside">
                            <h3>Detalle de tu compra</h3>
                            <table>
                                <tr>
                                    <td>Titular:</td>
                                    <td>
                                        <div id="customerName"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Categoría:</td>
                                    <td>
                                        <div id="ticketName"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Medio de pago:</td>
                                    <td>Tarjeta de Crédito</td>
                                </tr>
                                <tr>
                                    <td>Fecha de compra:</td>
                                    <td>
                                        <div id="date"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Monto:</td>
                                    <td>
                                        <div id="amount"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="./digital-trends24-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
                </div>
            </section>
        </div>
        <a href="./digital-trends24-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
    </div>
</div>

<script>
initialize();


const updateEvents = () => {
  if (localStorage.getItem('events')) {
    const existingEvents = JSON.parse(localStorage.getItem('events'));
    existingEvents.push("digital-trends24-vip");
    localStorage.setItem('events', JSON.stringify(existingEvents));
  } else {
    localStorage.clear();
  }
};

async function initialize() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const sessionId = urlParams.get('session_id');
  const response = await fetch(`http://localhost:4242/session-status?session_id=${sessionId}`);
  const session = await response.json();

  if (session.status == 'complete') {
    document.getElementById('customerName').innerHTML = session.customer_details.customer_name;
    document.getElementById('date').innerHTML = session.customer_details.date;
    document.getElementById('amount').innerHTML = `${session.customer_details.currency} ${session.customer_details.final_price}`;
    document.getElementById('ticketName').innerHTML = session.customer_details.ticket_name;
    document.getElementById('success').classList.remove('hidden');
    updateEvents();
  }
}
</script>
