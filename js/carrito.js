//---------------------Funciones para el carrito----------------------------
const btnCart = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector(
	'.container-cart-products'
);

btnCart.addEventListener('click', () => {
	containerCartProducts.classList.toggle('hidden-cart');
});
/*
const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Lista de todos los contenedores de productos
const productsList = document.querySelector('.seleccion');

// Variable de arreglos de Productos
let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');
/*
productsList.addEventListener('click', e => {
	if (e.target.classList.contains('btn-add-cart')) {
        const product = e.target.parentElement;

		const infoProduct = {
			quantity: 1,
			title: product.querySelector('h2').textContent,
			price: product.querySelector('span').textContent,
		};

        // Obtener la cantidad seleccionada del menú desplegable
        const cantidadSelect = document.getElementById("existente");
        infoProduct.quantity = parseInt(cantidadSelect.value);

        // Verificar si el producto ya existe en el carrito y actualizar la cantidad
        const existsIndex = allProducts.findIndex(product => product.title === infoProduct.title);
        if (existsIndex !== -1) {
        allProducts[existsIndex].quantity += infoProduct.quantity;
        } else {
        allProducts.push(infoProduct);
        }
        /*
        const exits = allProducts.some(
			product => product.title === infoProduct.title
		);
        if (exits) {
			const products = allProducts.map(product => {
				if (product.title === infoProduct.title) {
					product.quantity++;
					return product;
				} else {
					return product;
				}
			});
			allProducts = [...products];
		} else {
			allProducts = [...allProducts, infoProduct];
		}

        showHTML(); 
    }
});
rowProduct.addEventListener('click', e => {
	if (e.target.classList.contains('icon-close')) {
		const product = e.target.parentElement;
		const title = product.querySelector('p').textContent;

		allProducts = allProducts.filter(
			product => product.title !== title
		);

		console.log(allProducts);

		showHTML();
	}
});*/
/*
const showHTML = () => {
    if (!allProducts.length) {
		cartEmpty.classList.remove('hidden');
		rowProduct.classList.add('hidden');
		cartTotal.classList.add('hidden');
	} else {
		cartEmpty.classList.add('hidden');
		rowProduct.classList.remove('hidden');
		cartTotal.classList.remove('hidden');
	}

    // Limpiar HTML
	rowProduct.innerHTML = '';

    let total = 0;
	let totalOfProducts = 0;

	// Variables temporales
    let tempQuantity, tempTitle, tempPrice;


	allProducts.forEach(product => {
		const containerProduct = document.createElement('div');
		containerProduct.classList.add('cart-product');

		// Asignar valores a variables temporales
        tempQuantity = product.quantity;
        tempTitle = product.title;
        tempPrice = parseFloat(product.price.slice(1));

		containerProduct.innerHTML = `
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">${product.quantity}</span>
                <p class="titulo-producto-carrito">${product.title}</p>
                <span class="precio-producto-carrito">${product.price}</span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-close"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        `;

		rowProduct.append(containerProduct);
        total =
			total + parseInt(product.quantity * product.price.slice(1));
		totalOfProducts = totalOfProducts + product.quantity;
		
	});
    valorTotal.innerText = `$${total}`;
	countProducts.innerText = totalOfProducts;
};

*/