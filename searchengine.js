const products = [
    {
        id: 0,
        image: 'pics/1.jpg',
        title: 'پیتزا',
        price: 120
    },
    {
        id: 1,
        image: 'pics/2.jpg',
        title: 'سوپ',
        price: 60
    },
    {
        id: 2,
        image: 'pics/3.jpg',
        title: 'دوکبوکی',
        price: 100
    },
    {
        id: 3,
        image: 'pics/4.jpg',
        title: 'ساندویچ',
        price: 50
    },
    {
        id: 4,
        image: 'pics/5.jpg',
        title: 'ساندویچ2',
        price: 20
    }
];

document.getElementById("searchBar").addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filterData = products.filter((item) => item.title.toLowerCase().includes(searchData));
    displayItem(filterData);
});
const displayItem = (items) => {
    const productContent = document.querySelector('.product-content');
    if (items.length === 0) {
        productContent.innerHTML = "<p>محصول پیدا نشد.</p>";
    } else {
        productContent.innerHTML = items.map((item) => {
            const { image, title, price } = item;
            const productBox = document.createElement('div');
            productBox.className = 'product-box';
            productBox.style.width = '200px';
            productBox.style.height = '300px';
            const imgBox = document.createElement('div');
            imgBox.className = 'img-box';
            const imgElement = document.createElement('img');
            imgElement.src = image;
            imgElement.alt = title;
            imgElement.style.width = '100%';
            imgElement.style.height = 'auto';
            imgBox.appendChild(imgElement);
            const titleElement = document.createElement('h2');
            titleElement.className = 'product-title';
            titleElement.textContent = title;
            const priceAndCart = document.createElement('div');
            priceAndCart.className = 'price-and-cart';
            const priceElement = document.createElement('span');
            priceElement.className = 'price';
            priceElement.textContent = `$${price}`;
            const cartIcon = document.createElement('i');
            cartIcon.className = 'ri-shopping-bag-line add-cart';
            priceAndCart.appendChild(priceElement);
            priceAndCart.appendChild(cartIcon);
            productBox.appendChild(imgBox);
            productBox.appendChild(titleElement);
            productBox.appendChild(priceAndCart);
            return productBox.outerHTML;
        }).join('');
    }
};

displayItem(products);
