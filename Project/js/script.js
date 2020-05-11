var processor = document.getElementById('processor');
var cpu_cooler = document.getElementById('cpu_cooler');
var psu = document.getElementById('psu');
var motherboard = document.getElementById('motherboard');
var ram = document.getElementById('ram');
var gpu = document.getElementById('gpu');
var storage = document.getElementById('storage');
var os = document.getElementById('os');

var cpu_price = document.getElementById('cpu_price');
var cpu_cooler_price = document.getElementById('cpu_cooler_price');
var psu_price = document.getElementById('psu_price');
var motherboard_price = document.getElementById('motherboard_price');
var ram_price = document.getElementById('ram_price');
var gpu_price = document.getElementById('gpu_price');
var storage_price = document.getElementById('storage_price');
var os_price = document.getElementById('os_price');

processor.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            cpu_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + processor.value, true);
    xhr.send();
});

cpu_cooler.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            cpu_cooler_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + cpu_cooler.value, true);
    xhr.send();
});

psu.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            psu_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + psu.value, true);
    xhr.send();
});

motherboard.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            motherboard_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + motherboard.value, true);
    xhr.send();
});

ram.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            ram_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + ram.value, true);
    xhr.send();
});

gpu.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            gpu_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + gpu.value, true);
    xhr.send();
});

storage.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            storage_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + storage.value, true);
    xhr.send();
});

os.addEventListener("change", function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            os_price.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/product.php?product=' + os.value, true);
    xhr.send();
});