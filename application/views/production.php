<form class="productionForm">
<div class="productionMain">
    <h2> Producing Services </h2>
    {production}
    <div class="col-md-4"> 
        {name}:
            <input type="text" name="{name}" placeholder="Enter Number to produce...">
        {supplyInformation}
        <div class="productionSub"> 
            <ul>
                Requires : {supply}
                {quantity}
                <b>{availability}</b>
            </ul>
        </div>
        {/supplyInformation}
    </div>
    {/production}
</div>
<input type="submit" value="Submit">
</form>