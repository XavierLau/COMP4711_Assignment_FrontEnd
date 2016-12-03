<body id="home">
    <h2>Transaction Summary</h2>
    <hr>
    <div id="home-content">
        <div class="row">
            <div class="col-md-4">
                <div class="jumbotron">
                    <p id="field-title">Total Expense</p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <p id="field-title">Total Income</p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <p id="field-title">Materials Consumed</p>
                    <ul class="item-list">
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h2>Transaction History</h2>
        <hr>
        <div class="jumbotron">
            <div id="transaction-titles" class="row">
                <div class="col-md-3">
                    <p id="field-title">Name</p>
                </div>
                <div class="col-md-1">
                    <p id="field-title">Type</p>
                </div>
                <div class="col-md-1">
                    <p id="field-title">Date</p>
                </div>
                <div class="col-md-2">
                    <p id="field-title">Total Price</p>
                </div>
                <div class="col-md-5">
                    <p id="field-title">Materials/Products</p>
                </div>
            </div>
            {log}
            <div id="transaction-data" class="row">
                <div class="col-md-3">
                    <p>{name}</p>
                </div>
                <div class="col-md-1">
                    <p>{type}</p>
                </div>
                <div class="col-md-1">
                    <p>{date}</p>
                </div>
                <div class="col-md-2">
                    <p>${totalPrice}</p>
                </div>
                <div class="col-md-5">
                    <ul class="item-list">
                        {itemTransactions}
                        <li>
                            {itemValue}
                        </li>
                        {/itemTransactions}
                    </ul>
                </div>
            </div>
            {/log}
        </div>
    </div>
</body>
