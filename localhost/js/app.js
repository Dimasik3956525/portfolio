let price = 20;
let fee = 0.12;

let inp_quantity = document.querySelector('#inp_quantity');
let inp_reduction = document.querySelector('#inp_reduction');
let title = document.querySelector('.page-title');
let totalPrice = document.querySelector('.total-price');
let totalPriceSpan = document.querySelector('.total-price-span');
let discountStringSpan = document.querySelector('.discount-string-span');
let totalReduction = document.querySelector('.total-reduction');
let discountString = document.querySelector('.discount-string');
let clearBtn = document.querySelector('.reset');
let installmentPriceSpan = document.querySelector('.installment-price-span');


inp_quantity.addEventListener('input', function(){
    calc();
})
inp_reduction.addEventListener('input', function(){
    calc();
})
clearBtn.addEventListener('click', function(){
    clear();
})

calc();

function calc(){

    let totalPriceValue = (price * inp_quantity.value);
    let totalPriceValueFee = totalPriceValue + (totalPriceValue * fee);
    let totalPriceReduction = (totalPriceValueFee *(inp_reduction.value / 100));
    let totalPriceValueEnd = (totalPriceValueFee - totalPriceReduction).toFixed(2);
    let credit = (totalPriceValueEnd / 12);

    installmentPriceSpan.innerHTML = credit.toFixed(2);
    totalReduction.innerHTML = totalPriceReduction.toFixed(2);
    totalPrice.innerHTML = totalPriceValueEnd;
    totalPriceSpan.innerHTML = totalPriceValueEnd;
    discountStringSpan.innerHTML = totalPriceReduction.toFixed(2);

    if(totalPriceValueFee < 50 && totalPriceReduction >= 10) {
        discountString.classList.remove('hidden')
    } else {
        discountString.classList.add('hidden') 
    }
}


function clear() {
    inp_quantity.value = '1';
    inp_reduction.value = 0;
    calc();
}