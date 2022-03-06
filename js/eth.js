let ws = new WebSocket('wss://stream.binance.com:9443/ws/etheur@trade');
let stockPriceElement = document.getElementById('stock-price-eth');
let ws2 = new WebSocket('wss://stream.binance.com:9443/ws/btceur@trade');
let stockPriceElement2 = document.getElementById('stock-price-btc');
let ws3 = new WebSocket('wss://stream.binance.com:9443/ws/bnbeur@trade');
let stockPriceElement3 = document.getElementById('stock-price-bnbbtc');
let ws4 = new WebSocket('wss://stream.binance.com:9443/ws/soleur@trade');
let stockPriceElement4 = document.getElementById('stock-price-sol');
let ws5 = new WebSocket('wss://stream.binance.com:9443/ws/linkeur@trade');
let stockPriceElement5 = document.getElementById('stock-price-link');
let ws6 = new WebSocket('wss://stream.binance.com:9443/ws/doteur@trade');
let stockPriceElement6 = document.getElementById('stock-price-dot');
let ws7 = new WebSocket('wss://stream.binance.com:9443/ws/adaeur@trade');
let stockPriceElement7 = document.getElementById('stock-price-wbt');
let ws8 = new WebSocket('wss://stream.binance.com:9443/ws/xrpeur@trade');
let stockPriceElement8 = document.getElementById('stock-price-xrp');
let ws9 = new WebSocket('wss://stream.binance.com:9443/ws/avaxeur@trade');
let stockPriceElement9 = document.getElementById('stock-price-ava');
let ws10 = new WebSocket('wss://stream.binance.com:9443/ws/lunaeur@trade');
let stockPriceElement10 = document.getElementById('stock-price-lun');
let lastPrice = null;

ws.onmessage = (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement.innerText = price;
    stockPriceElement.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws2.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement2.innerText = price;
    stockPriceElement2.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws3.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement3.innerText = price;
    stockPriceElement3.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws4.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement4.innerText = price;
    stockPriceElement4.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws5.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement5.innerText = price;
    stockPriceElement5.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws6.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement6.innerText = price;
    stockPriceElement6.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws7.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement7.innerText = price;
    stockPriceElement7.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws8.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement8.innerText = price;
    stockPriceElement8.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws9.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement9.innerText = price;
    stockPriceElement9.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};

ws10.onmessage= (event) => {
    let stockObject = JSON.parse(event.data);
    let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement10.innerText = price;
    stockPriceElement10.style.color = !lastPrice || lastPrice === price ? 'green' : price >= lastPrice ? 'green' : 'red';
    lastPrice = price;
};