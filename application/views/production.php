<form class="productionForm">
<body class="productionMain">
    {production}
    <div class="serviceMain">         
        <div class="col-xs-3 title">
            <input id="items" class="form-control" value="{name}" onfocus="this.blur()"></input>
            <input class="form-control" id="focusedInput" type="text" placeholder="Click to set" autocomplete="off">
        </div>
        {supplyInformation}
        <div class="col-xs-3">
            <input type="text" id="items" value="{supply}" onfocus="this.blur()"></input>
            <input type="text" id="items" value="{quantity} {availability}" onfocus="this.blur()"></input>
        </div>
        {/supplyInformation}
        
    </div>
    <br/><br/><br/><br/>
    {/production}
    <button type="submit" class="btn btn-default submits">Submit</button>
</body>

</form>