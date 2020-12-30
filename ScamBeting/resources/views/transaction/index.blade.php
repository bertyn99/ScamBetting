@extends('layouts.app')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
<section class="py-10 ">
    <div class="container mx-auto px-4">
        <div class=" flex flex-col break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
            <div class="px-6">
                <form id="payment-form" action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div id="card-element">
                        <!-- Elements will create input elements here -->
                    </div>

                    <!-- We'll put the error messages in this element -->
                    <div id="card-errors" role="alert"></div>

                    <button
                        class="bg-blue-500 active:bg-blue-600 uppercase text-white font-bold hover:shadow-md shadow text-lg px-4 py-2 rounded outline-none focus:outline-none sm:mr-4 mb-1"
                        id="submit">Pay</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-js')
<script>
    // Paiement Stripe
    var stripe =Stripe('pk_test_51I47CMHOBAAOK9170mv3kPGRTy6YqvYUDuw92ysOEW6lieID58L2HMLKu0Ouw3r8DzwFkJgwjCjAJrfR19v897S500Np6OBXwh');
    var elements = stripe.elements(); 
    var style = {
        base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
            "::placeholder": {
                color: "#aab7c4"
            }
        },
        invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
        }
};
var card = elements.create("card", { style: style });
    card.mount("#card-element");
    card.addEventListener('change', ({error}) => {
    const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert', 'alert-warning', 'mt-3');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert', 'alert-warning', 'mt-3');
            displayError.textContent = '';
        }
    });
    var submitButton = document.getElementById('submit');
    submitButton.addEventListener('click', function(ev) {
    ev.preventDefault();
    submitButton.disabled = true;
    stripe.confirmCardPayment("{{ $clientSecret }}", {
        payment_method: {
            card: card
        }
        }).then(function(result) {
            if (result.error) {
            // Show error to your customer (e.g., insufficient funds)
            submitButton.disabled = false;
            console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    var paymentIntent = result.paymentIntent;
                    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var form = document.getElementById('payment-form');
                    var url = form.action;
                    var redirect = '/merci';
                    fetch(
                        url,
                        {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": token
                            },
                            method: 'post',
                            body: JSON.stringify({
                                paymentIntent: paymentIntent
                            })
                        }).then((data) => {
                            console.log(data);
                            form.reset();
                            window.location.href = redirect;
                    }).catch((error) => {
                        console.log(error)
                    })
                }
            }
        });
    });
</script>

@endsection