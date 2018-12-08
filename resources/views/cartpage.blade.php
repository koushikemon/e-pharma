<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>E Medicine</title>
    @include('extra.css-link')

    <style>
        .cart_part {
            padding: 100px 40px 150px 40px;
        }

        .btn_c {
            margin-right: 15px;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>


<body>
    @include('extra.nav')



    <!-- Cart part start -->
    <div class="container cart_part">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Medicine Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>200</td>
                        <td>
                            <select name="" id="">
                               <option value="0">00</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>160</td>
                        <td>  
                            <select name="" id="">
                                <option value="0">00</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>300</td>
                        <td>
                             <select name="" id="">
                                <option value="0">00</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn_c btn-secondary btn-lg">Proceed To checkout</button>
            <button type="button" class="btn_c btn-primary btn-lg">Continue Shopping</button>

        </div>
    </div>



    <!-- Cart_part end -->



    @include('extra.footer') @include('extra.js-link')

</body>




</html>