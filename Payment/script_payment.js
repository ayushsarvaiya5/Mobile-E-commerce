$(document).ready(function () {
    $("#button-hidder").click(function () {
        $(this).hide();
        $("#button-hidder-1").show();
    });

    $("#button-hidder-1").click(function () {
        $("#button-hidder").show();
        $(this).hide();
    });

    $(".edit").click(function () {
        $(".hide-for-front").css("display", "none");
        $(".show-for-front").css("display", "block");
    });

    $(".call-back").click(function () {
        $(".hide-for-front").css("display", "block");
        $(".show-for-front").css("display", "none");
    });

    $("#button-hidder").click(function () {
        $("#collapseTwo,#payment-option").collapse("hide");
    });

    $("#phone-pe-hidder").click(function () {
        $("#debit,#net-banking,#cash").collapse("hide");
    });

    $("#debit-hidder").click(function () {
        $("#phonepe,#net-banking,#cash").collapse("hide");
    });

    $("#net-banking-hidder").click(function () {
        $("#phonepe,#cash,#debit").collapse("hide");
    });

    $("#cash-hidder").click(function () {
        $("#phonepe,#net-banking,#debit").collapse("hide");
    });

    document.getElementById('payButton').addEventListener('click', function() {
        var selectedBank = document.querySelector('input[name="bank"]:checked');
        if (selectedBank) {
            switch (selectedBank.value) {
                case 'hdfc':
                    window.location.href = 'https://www.hdfcbank.com/personal/pay/bill-payments/hdfc-bank-credit-card-bill-payment';
                    break;
                case 'icici':
                    window.location.href = 'https://www.icicibank.com/personal-banking/bill-payment';
                    break;
                case 'kotak':
                    window.location.href = 'https://pgi.billdesk.com/pgidsk/pgmerc/kotakcard/kotak_card.jsp';
                    break;
                case 'axis':
                    window.location.href = 'https://pgi.billdesk.com/axiscard/index1.htm';
                    break;
                case 'bob':
                    window.location.href = 'https://www.bankofbaroda.in/personal-banking/digital-products/merchant-payment-solutions/bharat-bill-pay';
                    break;
                default:
                    break;
            }
        }
    });

    document.getElementById('payButton').addEventListener('click', function() {
        var selectedBank = document.getElementById('cars').value;
        switch (selectedBank) {
            case 'Bank of India':
                window.location.href = 'https://bankofindia.co.in/paymentonline';
                break;
            case 'Punjab National Bank':
                window.location.href = 'https://www.pnbindia.in/online-payment.html';
                break;
            case 'State Bank of India':
                window.location.href = 'https://pgi.billdesk.com/pgidsk/pgijsp/sbicard/SBI_card.jsp';
                break;
            case 'Union Bank of India':
                window.location.href = 'https://www.unionbankofindia.co.in/english/bbps.aspx';
                break;
        }
    });
    
    // Get the price from the HTML and remove the ₹ sign and commas
    const priceString = document.getElementById('price').innerText;
    // const displayDiscount = document.getElementById('displayDiscount');
    const price = parseInt(priceString.replace(/[^0-9]/g, ''));

    // Delivery Charges
    const deliveryCharges = 500;

    // Calculate discount based on price
    let discount = 0;
    if (price > 20000 && price < 50000) {
        discount = price * 0.01;
    } else if (price >= 50000) {
        discount = price * 0.03;
    }

    let newDiscount = 0;
    if (price > 20000 && price < 50000) {
        newDiscount = 1;
    } else if (price >= 50000) {
        newDiscount = 3;
    }

    // Calculate total amount
    const totalAmount = price + deliveryCharges - discount;

    // Format numbers in Indian standard number system
    const formatIndianNumber = (number) => {
        return new Intl.NumberFormat('en-IN').format(number);
    };

    // Update the HTML with formatted values
    document.getElementById('displayDiscount').innerText = ` (${newDiscount}%) :`;
    document.getElementById('deliveryCharges').innerText = `+ ₹${formatIndianNumber(deliveryCharges)}`;
    document.getElementById('discount').innerText = `- ₹${formatIndianNumber(discount)}`;
    document.getElementById('totalAmount').innerText = `₹${formatIndianNumber(totalAmount)}`;
    
})

function navigation()
{
    location.href="../Confirmation Page/Confirmation_page.php";
}