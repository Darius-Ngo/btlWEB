
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

// Load list food
function loadListFoods() {
    var FoodsDOM = document.getElementById('list-food');
    FoodsDOM.innerHTML = '';

    foods.forEach(function(value) {
        var product = document.createElement('div');
        product.classList.add('col-lg-2', 'col-sm-6'  ,'mb-2');

        product.innerHTML = `
        <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                <div class="portfolio-hover" onclick="showFoodDetails(${value.id})">
                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="assets/img/${value.image}" alt="..." />
            </a>
            <div class="portfolio-caption">
                <div class="portfolio-caption-heading">${value.name}</div>
                <div class="portfolio-caption-subheading text-muted">${new Intl.NumberFormat().format(value.price)}đ</div>
                <div class="portfolio-caption-subheading text-muted">${value.distance}km</div>
                <a href="detail.php?ID=${value.id}" class="btn">Xem</a>
            </div>
        </div>

        `;

        FoodsDOM.appendChild(product);
    });
}

// Show Detail


// Show modal   
function showFoodDetails(id) {
    var food = foods.find(function(value) {
        return value.id == id;
    });
    console.log(food)

    document.getElementById('modal-ten-mon').innerHTML = food.name;
    document.getElementById('modal-anh').src = 'assets/img/' + food.image;
    document.getElementById('modal-gia-ban').innerHTML = new Intl.NumberFormat().format(food.price) + 'đ';
    document.getElementById('modal-khoang-cach').innerHTML = food.distance + 'km';
}

// Load pagination
function loadPagination() {
    var tmp = (numberProduct - numberProduct%size)/size; // Chia lay nguyen
    var numberPage = (numberProduct/size) > tmp ? tmp + 1 : tmp;
    var pageDOM = document.querySelector('.app-content__pagination');
    pageDOM.innerHTML = `
    <a href="indexall.php?page=1&size=${size}" class="app-content-pagination__first-page">Về trang đầu</a>
    <a href="indexall.php?page=${(page - 1 > 1) ? page - 1 : 1}&size=${size}" class="app-content-pagination__before-page"><</a>
    `;

    var from, to;
    if(page <= 3) {
        from = 1;
        to = 5;
    }
    else if(page + 2 > numberPage) {
        from = numberPage - 4;
        to = numberPage;
    }
    else {
        from = page - 2;
        to = page + 2;
    }
    for(let i = from; i <= to; i++) {
        pageDOM.innerHTML += `
        <a href="indexall.php?page=${i}&size=${size}" class="app-content-pagination__item-page">${i}</a>
        `;
        if(i == numberPage) break;
    }
    if(to < numberPage) {
        pageDOM.innerHTML += `
        <a href="indexall.php?page=${numberPage}&size=${size}" class="app-content-pagination__item-page">...</a>
        `;
    }

    pageDOM.innerHTML += `
    <a href="indexall.php?page=${(page + 1 < numberPage) ? page + 1 : numberPage}&size=${size}" class="app-content-pagination__before-page">></a>
    <a href="indexall.php?page=${numberPage}&size=${size}" class="app-content-pagination__last-page">Về trang cuối</a>
    `;

    var arr = document.querySelectorAll('.app-content-pagination__item-page');
    arr.forEach(function(value) {
        if(value.innerHTML == page) {
            value.classList.add('current-page');
        }
    })
}


loadListFoods();
loadPagination();