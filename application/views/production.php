<body id="production" class="probody">
    <h2>Produce Services</h2>
    <hr>
    {production}
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-5 production-item">
                <input id="item-name" class="form-control" value="{name}" onfocus="this.blur()"></input>
                <input id="focusedInput" class="form-control" type="number" min="0" placeholder="Enter Value" autocomplete="off">
            </div>
            <div class="col-md-7">
                {supplyInformation}
                <div class="col-md-4">
                    <p id="field-title">{supply}:</p>
                </div>
                <div class="col-md-2">
                    <p>{quantity}</p>
                </div>
                <div class="col-md-6">
                    <p>({availability})</p>
                </div>
                {/supplyInformation}
            </div>
        </div>
    </div>
    {/production}
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
</body>