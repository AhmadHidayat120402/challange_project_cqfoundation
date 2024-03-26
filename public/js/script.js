filterSelection("semua");

function filterSelection(choice) {
    var product, i;
    product = document.getElementsByClassName("donasis");
    if (choice == "semua") choice = "";
    console.info('nih ' + choice);
    for (i = 0; i < product.length; i++) {
        productRemoveClass(product[i], "show");
        if (product[i].className.indexOf(choice) > -1)
            productAddClass(product[i], "show");
    }
}

function productAddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function productRemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i], 1));
        }
    }
    element.className = arr1.join(" ");
}

var category = document.getElementsByClassName("filterItem");

// Menambahkan event listener pada setiap elemen dengan kelas "filterItem"
for (var i = 0; i < category.length; i++) {
    category[i].addEventListener("click", function () {
        // Menghapus kelas "active" dari elemen yang memiliki kelas tersebut
        var currentActive = document.querySelector(".filterItem.active");
        if (currentActive) {
            currentActive.classList.remove("active");
        }

        // Menambahkan kelas "active" pada elemen yang baru diklik
        this.classList.add("active");
    });
}


// Inisialisasi Owl Carousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});

// Mengatur fungsi tombol next dan previous
$('.owl-prev').click(function () {
    $('.owl-carousel').trigger('prev.owl.carousel');
});

$('.owl-next').click(function () {
    $('.owl-carousel').trigger('next.owl.carousel');
});

filterSelection2("berlangsung");

function filterSelection2(choice) {
    var product, i;
    product = document.getElementsByClassName("kajians");
    if (choice == "-") choice = "";
    console.info('nih ' + choice);
    for (i = 0; i < product.length; i++) {
        productRemoveClass(product[i], "show");
        if (product[i].className.indexOf(choice) > -1)
            productAddClass(product[i], "show");
    }
}

function productAddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function productRemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i], 1));
        }
    }
    element.className = arr1.join(" ");
}

var category = document.getElementsByClassName("filterItem2");

// Menambahkan event listener pada setiap elemen dengan kelas "filterItem"
for (var i = 0; i < category.length; i++) {
    category[i].addEventListener("click", function () {
        // Menghapus kelas "active" dari elemen yang memiliki kelas tersebut
        var currentActive = document.querySelector(".filterItem2.active");
        if (currentActive) {
            currentActive.classList.remove("active");
        }

        // Menambahkan kelas "active" pada elemen yang baru diklik
        this.classList.add("active");
    });
}
