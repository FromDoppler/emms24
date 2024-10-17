<div class="emms__checkout">
    <div class="emms__checkout__container emms__checkout__card__container--form emms__fade-in">
        <div class="emms__checkout__card">
            <div id="checkout"></div>
        </div>
        <a href="./ecommerce-registrado.php" class="emms__checkout__back">← Volver al sitio</a>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // This is your test publishable API key.
const stripe = Stripe(`<?= STRIPE_PUBLIC_KEY; ?>`);

initialize();

async function initialize() {
  const getCustomerEmail = () => {
    if (localStorage.getItem('dplrid')) {
        const encodedEmailHex = localStorage.getItem('dplrid');
        const decodedEmail = hexToString(encodedEmailHex);
        return decodedEmail;
    } else {
        return null;
    }
  };

  const customerEmail = getCustomerEmail();
  const response = await fetch(`<?= STRIPE_URL_SERVER; ?>/create-checkout-session`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({ customerEmail: customerEmail })
  });

  const { clientSecret } = await response.json();

  const checkout = await stripe.initEmbeddedCheckout({
    clientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}

// Función para convertir hexadecimal a string ASCII
function hexToString(hex) {
    let string = '';
    for (let i = 0; i < hex.length; i += 2) {
        string += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    }
    return string;
}

</script>
