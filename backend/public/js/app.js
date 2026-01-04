alert("Welcome to Pizza Royale 🍕");

var orders = [];

function order(pizza) {
    orders.push(pizza);
    alert(pizza + " added to your order");
    console.log("Orders:");
    for (var i = 0; i < orders.length; i++) {
        console.log(orders[i]);
    }
}

function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({
        behavior: "smooth"
    });
}
