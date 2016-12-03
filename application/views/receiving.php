<body id="receiving" class="probody">
    <form>
        {receiving}
        <h2>Received Supplies</h2>
        <hr>
        <div class='row'>
            {supplies}
            <div class="col-md-2">
                <input id="item-name" class="form-control" value="{supply}" onfocus="this.blur()"></input>
                <input id="focusedInput" class="form-control" type="number" min="0" placeholder="Enter Value" autocomplete="off">
            </div>
            {/supplies}
        </div>
        <h2>Received Services</h2>
        <hr>
        <div class='row'>
            {services}
            <div class="col-md-3">
                <input id="item-name" class="form-control" value="{service}" onfocus="this.blur()"></input>
                <input id="focusedInput" class="form-control" type="number" min="0" placeholder="Enter Value" autocomplete="off">
            </div>
            {/services}
        {/receiving}
        </div>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </form>
</body>

