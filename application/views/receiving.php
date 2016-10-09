
<body class="probody">
    <form>
        <div class='row'>
        {receiving}
        {supplies}
        <div class="col-xs-2">
            <input id="items" class="form-control" value="{supply}" onfocus="this.blur()"></input>
            <input class="form-control" id="focusedInput" type="text" placeholder="Click to set" autocomplete="off">
        </div>
        {/supplies}
        {services}
        <div class="col-xs-2">
            <input id="items" class="form-control" value="{service}" onfocus="this.blur()"></input>
            <input class="form-control" id="focusedInput" type="text" placeholder="Click to set" autocomplete="off">
        </div>
        {/services}
        {/receiving}
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>

